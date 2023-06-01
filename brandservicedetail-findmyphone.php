<?php include "admin/app/vander.php"; 
        $models = $_GET['models'];
        $issue = $_GET['issue'];

        $detail = new Crud('single_issue', "WHERE issue_id = (SELECT id FROM issues WHERE slug = '$issue' AND series_id = (SELECT id FROM models WHERE slug = '$models'))");
        $detail = $detail->get()[0];
        ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title><?=$detail['meta_title']?></title>
    <meta name="keywords" content="<?=$detail['meta_keywords']?>">
    <meta name="description" content="<?=$detail['meta_description']?>">
<?php include 'header.php' ?>

<section class="prdetails-section   trick-section section-b-space section-t-space" style="background: #fff;">
    <div class="container p-0">
        <h3 class=""><?= $detail['heading'] ?></h3>
        <hr>
        <?= $detail['content'] ?>

        <h4 class="h4 py-3 mb-5">Using the feature</h4>

        <?php foreach (json_decode($detail['sec_heading']) as $key => $item) : ?>
            <div class="row  section-b-space ">
                <div class="col-lg-1 col-md-1 col-sm-12 text-end">
                    <span class="solo text-end"><?= $key + 1 ?></span>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <h6 class="h6"><?= $item ?></h6>
                    <p><?= json_decode($detail['sec_heading'])[$key] ?></p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div>
                        <img src="<?= storage(json_decode($detail['sec_image'])[$key]) ?>" alt="set device" class="w-100">
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <!-- <div class="feedback mx-lg-5">
            <div class="help d-flex justify-content-start">
                <h3 class="h4 ">Helpful or not?</h3>
                <p class="feedbackbtn" id="oyes"><i class="fa fa-thumbs-up"></i> Yes </p>
                <p class="feedbackbtn" id="ono"><i class="fa fa-thumbs-down"></i> No </p>
            </div>
        </div>
        <div class="okfeedback mx-lg-5">
            <p class="p" id="oredy">Thanks for your feedback. </p>

            <div class='noredy'>
                <form>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="1">
                        <label class="form-check-label" for="1"> The content I found is not relevant to my question </label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="2">
                        <label class="form-check-label" for="2"> The content I found is relevant but didn't solve my problem </label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="3">
                        <label class="form-check-label" for="3"> The content is difficult to understand </label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="4">
                        <label class="form-check-label" for="4"> The function is hard to use </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="5">
                        <label class="form-check-label" for="5"> Other </label>
                    </div>
                    <textarea class="form-control mb-3" id="exampleFormControlTextarea1" rows="3"></textarea>
                    <button id="submit" class="btn bg-secondary text-light rounded rounded-5" type="submit">Submit</button>
                </form>
            </div>

        </div> -->
    </div>
</section>
<!-- end trick -->

<?php include 'footer.php' ?>
<!--end footer-->
</body>

</html>
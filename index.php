<?php include "admin/app/vander.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title><?=$setting['meta_title']?></title>
    <meta name="keywords" content="<?=$setting['meta_keywords']?>">
    <meta name="description" content="<?=$setting['meta_description']?>">
<?php include 'header.php';

$page = new Crud('hcip', "WHERE page = 'index' ORDER BY id DESC");
$index = $page->get()[0];
?>
<!-- home slider start -->
<section class="home-section home-style-2  pt-0 section-b-space">
    <div class="container-fluid p-0">
        <div class="slick-2 dot-dark">
            <div>
                <div class="home-slider">
                    <div class="home-wrap row m-0">
                        <div class="col-xxl-12 col-lg-12 p-0 left-content">
                            <img src="<?= storage($index['image']) ?>" class="bg-img blur-up " alt="">
                            <div class="home-content row">
                                <div class="col-xxl-5 col-lg-7 col-md-12 col-sm-6 col-12 offset-lg-3 ">
                                    <h1 class="h1 text-center text-white"><?= $index['heading'] ?></h1>
                                    <!-- <div class="input-group mb-3">
                                        <input type="text" class="form-control border-0 bradi1 bg-white" placeholder="Enter Phone model and keywords" aria-label="Recipient's username" aria-describedby="button-addon2">
                                        <button class="btn  bg-white   bradi1" type="button" id="button-addon2"><i class="fa fa-search"></i></button>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- home slider end -->


<!-- product list -->
<section class="category-section ratio_40 section-b-space itsticky ">
    <div class="container">
        <div class="row gy-3">
            <div>
                <h2 class="logoes">VOXO</h2>
            </div>
            <!--  <div class="col-xxl-2 col-lg-3">
                    <div class="category-wrap category-padding category-block theme-bg-color">
                        <div>
                            <h2 class="light-text">Top</h2>
                            <h2 class="top-spacing">Our Top</h2>
                            <span>Categories</span>
                        </div>
                    </div>
                </div> -->

            <div class="col-xxl-12 col-lg-12">
                <div class="category-wrapper product-slider1 white-arrow category-arrow">
                    <?php

                    $caregory = new Crud('category');

                    foreach ($caregory->get() as $value) :
                    ?>
                        <div>
                            <a href="brand.php?category=<?= $value['slug'] ?>" class=" category-padding ">
                                <img src="<?= storage($value['image']) ?>" class=" " alt="category image">
                                <div class="category-content category-text-1 ">
                                    <h4 class="text-dark text-center"><?= $value['name'] ?></h4>
                                </div>
                            </a>
                        </div>
                    <?php
                    endforeach;
                    ?>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- end porduct list -->

<!-- Below product slider -->
<section class="home-section home-style-2 product-section  section-t-space">
    <div class="container-fluid p-0">
        <div class="slick-3 dot-dark">
            <?php
            $page = new Crud('hcip', "WHERE page = 'index_slide' ORDER BY id DESC");
            $index_slide = $page->get();

            foreach ($index_slide as $slide) : ?>
                <div>
                    <div class="home-slider">
                        <div class="home-wrap row m-0">
                            <div class="col-xxl-12 col-lg-12 p-0 left-content">
                                <img src="assets/images/slider/slider.png" class="bg-img blur-up " alt=""><!-- " class="lazyload" -->
                                <div class="home-content row">
                                    <div class="col-xxl-8 col-lg-8 col-md-12 col-sm-6 col-12 ">
                                        <h2 data-animation-in="fadeInUp"><?= $slide['heading'] ?></h2>
                                        <p class="p mb-4" data-animation-in="fadeInUp" data-delay-in="0.4"><?= $slide['sub_heading'] ?></p>
                                        <button data-animation-in="fadeInUp" data-delay-in="0.6" onclick="location.href = '<?= $slide['link'] ?>';" type="button" class="btn bradius">Shop Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- End Below product slider -->

<!-- Trick -->

<section class="home-section home-style-2 trick-section " style="padding-top: 160px">
    <div class="container ">
        <h2 class="text-center">Activate new devices with quick tricks</h2>

        <?php
        for ($i = 4; $i <= 6; $i++) :
            $page = new Crud('hcip', "WHERE id = $i");
            $homeFeature = $page->get()[0];
        ?>
            <div class="row align-items-center section-b-space section-t-space">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <h3><?= $homeFeature['heading'] ?></h3>
                    <?= $homeFeature['content'] ?>
                    <p><a href="<?= $homeFeature['link'] ?>" class="abs">Learn more</a></p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div>
                        <img src="<?= storage($homeFeature['image']) ?>" alt="set device" class="w-100">
                    </div>
                </div>
            </div>
            <hr>
        <?php
        endfor;
        ?>
    </div>
</section>
<!-- end trick -->

<!-- Connection page  -->
<section class="home-section home-style-2 connection-section ">
    <div class="container ">
        <div class="row justify-content-around section-b-space section-t-space">
            <?php
            $page = new Crud('hcip', "WHERE id = 7");
            $contactBox1 = $page->get()[0];
            $page = new Crud('hcip', "WHERE id = 8");
            $contactBox2 = $page->get()[0];
            ?>
            <div class="col-lg-5 col-md-5 col-sm-12">
                <div class="text-center">
                    <img src="<?= storage($contactBox1['image']) ?>" alt="set device" class="w-50">
                </div>
                <h3><?= $contactBox1['heading'] ?></h3>
                <?= $contactBox1['content'] ?>
                <p><a href="<?= $contactBox1['link'] ?>" class="abs">Contact us</a></p>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12">
                <div class="text-center">
                    <img src="<?= storage($contactBox2['image']) ?>" alt="set device" class="w-50">
                </div>
                <h3><?= $contactBox2['heading'] ?></h3>
                <?= $contactBox2['content'] ?>
                <p><a href="<?= $contactBox2['link'] ?>" class="abs">Contact us</a></p>
            </div>

        </div>
    </div>
</section>
<!-- end connection page -->

<!-- Fix Device page  -->
<section class="home-section home-style-2 fixdevice-section slider ">
    <div class="container ">
        <h2 class="">We fix your devices</h2>
        <div class="row justify-content-around section-b-space section-t-space">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="category-wrapper device-slider1 white-arrow category-arrow">
                    <?php
                        $page = new Crud('hcip', "WHERE page = 'index_devices'");
                        foreach ($page->get() as $value):
                    ?>
                    <div class="text-center dvs">
                        <a class=" category-padding ">
                            <img src="<?= storage($value['image']) ?>"  alt="category image">
                        </a>
                        <div class="category-content category-text-1 ">
                            <h4 class="text-dark "><?= $value['heading']?></h4>
                        </div>
                    </div>
                        <?php
                    endforeach;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!--footer-->
<?php include 'footer.php' ?>
<!--end Footer-->

<script>
    // sticky product  

    $(window).on("scroll", function() {
        var height = $(window).scrollTop();
        if (height > 700 && $(window).width() > 768) {
            $('.itsticky').fadeIn().css('box-shadow', '0px 0px 5px #000')
            // $('.logoes').fadeIn(); 
        } else {
            //  $('.logoes ').fadeOut(); 
            $('.itsticky').css('box-shadow', 'unset')
        }
    });

    // end
</script>

</body>

</html>
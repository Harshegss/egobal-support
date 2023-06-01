<?php include "admin/app/vander.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
<?php $slug = $_GET['brand'];
    $seo = new Crud('brands', "WHERE slug = '$slug'");
    $seo = $seo->get()[0];
    ?>
    <title><?=$seo['meta_title']?></title>
    <meta name="keywords" content="<?=$seo['meta_keywords']?>">
    <meta name="description" content="<?=$seo['meta_description']?>">
<?php include 'header.php' ?>
<!-- home slider start -->
<section class="home-section home-style-2 brand pt-0">
    <div class="container-fluid p-0">
        <div class="slick-2 dot-dark">
            <div>
                <div class="home-slider3">
                    <div class="home-wrap row m-0">
                        <div class="col-xxl-12 col-lg-12 p-0 left-content">
                            <img src="<?=asset('assets/images/kv-pad.jpg')?>" class="bg-img blur-up" alt="" />
                            <!-- " class="lazyload" -->
                            <div class="home-content row">
                                <div class="col-xxl-5 col-lg-7 col-md-12 col-sm-6 col-10 offset-lg-2 mx-auto ">
                                    <h1 class="h1 text-lg-left text-center  text-white">Dell Laptop Models</h1>
                                    <h3 class="h3 text-lg-left text-center text-white">Support</h3>
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



<!-- Connection page  -->
<section class="home-section home-style-2 connection-section pt-0 section-b-space">
    <div class="container">
        <?php
        $id = $_GET['brand'];
        $caregory = new Crud('models', "WHERE brand_id = (SELECT id FROM brands WHERE slug = '$id')");
        foreach ($caregory->get() as $value) :
        ?>
            <div class="row brand-models mt-5">
                <div class="model-heading"><?= $value['name'] ?></div>
                <?php foreach (json_decode($value['models']) as $model) : ?>
                    <div class="col-lg-3">
                        <div class="model-name">
                            <a href="brandservice.php?category=<?=$_GET['category']?>&brand=<?=$_GET['brand']?>&models=<?=$value['slug']?>"><i class="fa fa-angle-right"></i> <?= $model ?></a>
                        </div>
                    </div>
                <?php
                endforeach; ?>
            </div>
        <?php
        endforeach;
        ?>
    </div>
</section>
<!-- end connection page -->






  <!-- Connection page  -->
  <section class="home-section home-style-2 connection-section pt-0 section-b-space">
      <div class="container">
          <h3 class="h3 text-center section-b-space">Get the tips you're looking for</h3>
          <div class="row section-b-space">

              <?php
                $page = new Crud('blogs');
                $blogs = $page->get();
                foreach ($blogs as $value) :
                ?>
                  <div class="col-lg-4 col-md-5 col-sm-12 offset-lg-2">
                      <div class="text-center mb-2">
                          <img src="<?=storage($value['image'])?>" alt="set device" class="w-100" />
                      </div>
                      <h3><?=$value['heading']?></h3>
                      <?=substr($value['content'],0,200).'...'?>
                      <p><a href="blog-details.php?blog=<?=$value['slug']?>" class="abs">Learn more</a></p>
                  </div>
              <?php endforeach; ?>
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
        if (height > 400 && $(window).width() > 768) {
            $('.itsticky').fadeIn().css('box-shadow', '0px 0px 5px #000')
            $('.brandpro .slick-slide img').css('width', '50px')
        } else {
            //  $('.logoes ').fadeOut(); 
            $('.itsticky').css('box-shadow', 'unset')
        }
    });

    // end
</script>


</body>

</html>
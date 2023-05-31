
    <?php include 'header.php'?>

    <section class="home-section home-style-2 brand  pt-0 ">
        <div class="container-fluid p-0">
            <div class="slick-2 dot-dark">
                <div>
                    <div class="home-slider3 ">
                        <div class="home-wrap row m-0">
                            <div class="col-xxl-12 col-lg-12 p-0 left-content">
                                <img src="assets/images/brand/de-matebook-PCkv1.jpg" class="bg-img blur-up " alt=""><!-- " class="lazyload" -->
                                <div class="home-content row">
                                    <div class="col-xxl-5 col-lg-7 col-md-12 col-sm-6 col-12 offset-lg-2 ">
                                        <h1 class="h1 text-left text-white">Welcome to Phone </h1>
                                        <h3  class="h3 text-left text-white">Support</h3>
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
    <section class="category-section brandpro section-b-space itsticky ">
        <div class="container">
            <div class="row gy-3">
                <div class="col-xxl-10 col-lg-8 mx-auto">
                    <div class="category-wrapper brandlist white-arrow category-arrow">
                    <?php
                    $id = $_GET['models'];
                    $caregory = new Crud('issues', "WHERE series_id = (SELECT id FROM models WHERE slug = '$id')");

foreach ($caregory->get() as $value):
?>
    <div>
        <a href="brandservicedetail-findmyphone.php?category=<?=$_GET['category']?>&brand=<?=$_GET['brand']?>&models=<?=$_GET['models']?>&issue=<?= $value['slug'] ?>" class=" category-padding ">
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
    </section>
    <!-- end porduct list -->

<hr>
    <!-- Trick -->

    <section class="home-section home-style-2 trick-section section-b-space section-t-space" style="background: #fff;">
    <div class="container p-0">
        <h3 class="h3 text-center">Enrich your HUAWEI tablet experience</h3>
        <?php
        $page = new Crud('hcip', "WHERE page = 'model_bottom'");
        $brand_bottom = $page->get();
        foreach ($brand_bottom as $key => $item):
            if (($key) % 2 == 0){
                $oe = "";
            }else{
                $oe = "flex-row-reverse";
            }
        ?>
                <div class="row align-items-center section-b-space section-t-space <?=$oe?>">
                    <div class="col-lg-8 col-md-8 col-sm-12">
                        <h3><?= $item['heading'] ?></h3>
                        <?= $item['content'] ?>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div>
                            <img src="<?= storage($item['image']) ?>" alt="set device" class="w-100" />
                        </div>
                    </div>
                </div>
                <hr/>
        <?php
        endforeach; ?>
    </div>
</section>
    <!-- end trick -->

     <!-- product section end -->

    
  <!-- Connection page  -->
  <section class="home-section home-style-2 connection-section pt-0 section-b-space">
      <div class="container">
          <h3 class="h3 text-center section-b-space">Get the tips you're looking for</h3>
          <div class="row section-b-space">

              <?php
                $page = new Crud('blogs');
                $blogs = $page->get();
                foreach ($blogs as $value):
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
    <?php include'footer.php'?>
    <!--end Footer-->
     <script>
        // sticky product  
         $(window).on("scroll",function(){ 
            var height = $(window).scrollTop();
            if (height > 400 &&  $(window).width() > 768 ){
                $('.itsticky').fadeIn().css('box-shadow','0px 0px 5px #000')
               $('.brandpro .slick-slide img').css('width','50px')
             }
            else{
                //  $('.logoes ').fadeOut(); 
                 $('.itsticky').css('box-shadow','unset')
            }
        });
        
        // end
    </script>  
   
</body>
</html>
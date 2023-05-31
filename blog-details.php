
    <!--navigation Bar-->
    <?php include 'header.php';
    $slug = $_GET['blog'];
    $page = new Crud('blogs',"WHERE slug = '$slug'"); 
    $blogs = $page->get()[0];
    if($blogs == false){
        echo '<script>window.location="blog.php"</script>';
    }
    ?>

    <section class="masonary-blog-section mb-4">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-9 col-md-8 order-md-1 ratio_square mx-auto">
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="blog-details">
                                <div class="blog-image-box">
                                    <img src="<?=storage($blogs['image'])?>" alt="" class="card-img-top">
                                    <div class="blog-title">
                                        <div>
                                            <div class="social-media media-center">
                                                <a href="https://www.facebook.com/" target="new">
                                                    <div class="social-icon-box social-color">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </div>
                                                </a>
                                                <a href="https://twitter.com/" target="new">
                                                    <div class="social-icon-box social-color">
                                                        <i class="fab fa-twitter"></i>
                                                    </div>
                                                </a>
                                                <a href="https://in.pinterest.com/" target="new">
                                                    <div class="social-icon-box social-color">
                                                        <i class="fab fa-pinterest-p"></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="blog-detail-contain">
                                    <h2 class="card-title"><?=$blogs['heading']?></h2>
                                    <?=$blogs['content']?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

               
            </div>
        </div>
    </section>
<style>
    .home-section.home-style-2{
        display: none!important;
    }
</style>
    <!--footer-->
    <?php include'footer.php'?>
    <!--end Footer-->

</body>

</html>
<?php include "admin/app/vander.php";?>
<?php
    $slug = $_GET['blog'];
    $page = new Crud('blogs',"WHERE slug = '$slug'"); 
    $blogs = $page->get()[0];
    if($blogs == false){
        echo '<script>window.location="blog.php"</script>';
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="manifest" href="manifest.json" />
    <link rel="icon" href="assets/images/favicon/2.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="assets/images/favicon/2.png" />
    <meta name="theme-color" content="#e22454" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="apple-mobile-web-app-title" content="Huawei" />
    <meta name="msapplication-TileImage" content="assets/images/favicon/2.png" />
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?=$blogs['meta_description']?>">
    <meta name="keywords" content="<?=$blogs['meta_keyword']?>">
    <meta name="author" content="Huawei">
    <link rel="icon" href="assets/images/favicon/2.png" type="image/x-icon" />
    <title><?=$blogs['meta_title']?></title>

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">

    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/font-awesome.css">

    <!-- feather icon css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/feather-icon.css">

    <!-- animation css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/animate.css">

    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick/slick-theme.css">

    <!-- Theme css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="assets/css/demo2.css">
    <link rel="stylesheet" type="text/css" href="assets/css/custom.css">

</head>

<body class="theme-color2 light ltr ">
    <!-- preloader -->
    <!-- <div class="loader-container">-->
    <!--  <div class="loader"></div>-->
    <!--</div> -->
    <!-- end preloader -->
    
    <!--navigation Bar-->
    <?php include 'navbar.php'?>
    <!--navigation Bar-->
 

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
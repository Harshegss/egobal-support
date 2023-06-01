
<?php include "admin/app/vander.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blogs</title>
    <?php include 'header.php';?>
    <!--end navigation bar-->  

    <!-- Breadcrumb section start -->
    <!-- Breadcrumb section end -->

    <!-- Blog Section Start -->
    <section id="portfolio" class="left-sidebar-section masonary-blog-section section-b-space">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-10 col-md-7 order-md-1 ratio3_2 mx-auto">
                    <div class="row g-4 product-load-more">
                        
                    <?php
                $page = new Crud('blogs');
                $blogs = $page->get();
                foreach ($blogs as $value) :
                ?>
                        <div class="col-lg-4 col-md-6 col-grid-box">
                            <div class="card blog-categority">
                                <a href="blog-details.php?blog=<?=$value['slug']?>" class="blog-img">
                                    <img src="<?=storage($value['image'])?>" alt=""
                                        class="card-img-top blur-up lazyload bg-img">
                                </a>
                                <div class="card-body">
                                    <a href="blog-details.php?blog=<?=$value['slug']?>">
                                        <h2 class="card-title"><?=$value['heading']?>
                                        </h2>
                                    </a>
                                    <?=substr($value['content'],0,200).'...'?><br>
                                    <br>
                                    <div class="blog-profile">
                                        <div class="image-name">
                                            <h6><a href="">Read blog -></a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Subscribe Section Start -->
    <!-- <section class="subscribe-section section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-6">
                    <div class="subscribe-details">
                        <h2 class="mb-3">Subscribe Our News</h2>
                        <h6 class="font-light">Subscribe and receive our newsletters to follow the news about our fresh
                            and fantastic Products.</h6>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-md-0 mt-3">
                    <div class="subsribe-input">
                        <div class="input-group">
                            <input type="text" class="form-control subscribe-input" placeholder="Your Email Address">
                            <button class="btn btn-solid-default" type="button">Button</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->


    <!--footer-->
    <?php include'footer.php'?>
    <script src="assets/js/infinite-scroll.js"></script>
    <!--end Footer-->

</body>

</html>
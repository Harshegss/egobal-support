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
  <!-- footer start -->
  <footer class="footer-sm-space">
      <div class="main-footer">
          <div class="container">
              <div class="row gy-4">
                  <div class="col-xl-3 col-lg-4 col-md-6">
                      <div class="footer-contact">
                          <div class="brand-logo mb-5">
                              <a href="index.php">
                                  <svg class="svg-icon">
                                      <use class="fill-color" xlink:href="assets/svg/icons.svg#logo"></use>
                                  </svg>
                                  <img src="assets/images/logo.png" class="img-fluid blur-up lazyloaded" alt="logo">
                              </a>
                          </div>
                          <ul class="contact-lists">
                              <li>
                                  <span>
                                      <b>phone:</b>
                                      <span class="font-light"> + 185659635</span>
                                  </span>

                              </li>
                              <li>
                                  <span>
                                      <b>Email:</b>
                                      <span class="font-light"> voxo123@gmail.com</span>
                                  </span>

                              </li>
                              <li>
                                  <a class="btn border border-2 rounded rounded-4 bg-light text-dark  " href="support.php">Support</a>
                                  <a class="btn border border-2 rounded rounded-4 bg-light text-dark   mx-2 " href="javascript:void();">Live Chat</a>
                              </li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-lg-2 col-md-4 col-sm-6">
                      <div class="footer-links">
                          <div class="footer-title">
                              <h3>PRODUCTS</h3>
                          </div>
                          <div class="footer-content">
                              <ul>
                                  <li>
                                      <a href="javascript:void();" class="font-dark">Smartphone</a>
                                  </li>
                                  <li>
                                      <a href="javascript:void();" class="font-dark">PC</a>
                                  </li>
                                  <li>
                                      <a href="javascript:void();" class="font-dark">Tablet</a>
                                  </li>
                                  <li>
                                      <a href="javascript:void();" class="font-dark">Monitor</a>
                                  </li>
                                  <li>
                                      <a href="javascript:void();" class="font-dark">Wearable</a>
                                  </li>
                                  <li>
                                      <a href="javascript:void();" class="font-dark">Audio</a>
                                  </li>
                                  <li>
                                      <a href="javascript:void();" class="font-dark">Speaker</a>
                                  </li>
                                  <li>
                                      <a href="javascript:void();" class="font-dark">Router</a>
                                  </li>
                                  <li>
                                      <a href="javascript:void();" class="font-dark">Accessories</a>
                                  </li>
                                  <li>
                                      <a href="javascript:void();" class="font-dark">AppGallery</a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                      <div class="footer-links">
                          <div class="footer-title">
                              <h3>SHOP</h3>
                          </div>
                          <div class="footer-content">
                              <ul>
                                  <li>
                                      <a href="javascript:void();" class="font-dark">Stratford Store</a>
                                  </li>
                                  <li>
                                      <a href="javascript:void();" class="font-dark">Terms of Sale</a>
                                  </li>
                                  <li>
                                      <a href="javascript:void();" class="font-dark">Delivery Policy</a>
                                  </li>
                                  <li>
                                      <a href="javascript:void();" class="font-dark">Return Policy</a>
                                  </li>
                                  <li>
                                      <a href="javascript:void();" class="font-dark">FAQ</a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                      <div class="footer-links">
                          <div class="footer-title">
                              <h3>SUPPORT</h3>
                          </div>
                          <div class="footer-content">
                              <ul>
                                  <li>
                                      <a href="javascript:void();" class="font-dark">Service Privacy Notice</a>
                                  </li>
                                  <li>
                                      <a href="javascript:void();" class="font-dark">Warranty Policy</a>
                                  </li>
                                  <li>
                                      <a href="javascript:void();" class="font-dark">EMUI</a>
                                  </li>
                                  <li>
                                      <a href="javascript:void();" class="font-dark">HiSuite</a>
                                  </li>
                                  <li>
                                      <a href="javascript:void();" class="font-dark">MYHUAWEI</a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-sm-6 d-none d-sm-block">
                      <div class="footer-links">
                          <div class="footer-title">
                              <h3>ABOUT US</h3>
                          </div>
                          <div class="footer-content">
                              <ul>
                                  <li>
                                      <a href="about-us.php" class="font-dark">About Us</a>
                                  </li>
                                  <li>
                                      <a href="blog.php" class="font-dark">News & Events</a>
                                  </li>
                                  <li>
                                      <a href="support.php" class="font-dark">Support</a>
                                  </li>
                                  <li>
                                      <a href="javascript:void();" class="font-dark">XOVA Group</a>
                                  </li>
                                  <li>
                                      <a href="javascript:void();" class="font-dark">Enterprise</a>
                                  </li>
                                  <li>
                                      <a href="javascript:void();" class="font-dark">XOVA Carrier</a>
                                  </li>
                                  <li>
                                      <a href="javascript:void();" class="font-dark">Join Us</a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="sub-footer">
          <div class="container">
              <div class="row gy-3">
                  <div class="col-md-4">
                      <ul class="mt-4">
                          <!--   <li class="font-dark">We accept:</li> -->
                          <li>
                              <a href="javascript:void(0)">
                                  <img src="assets/images/payment-icon/1.jpg" class="img-fluid blur-up lazyload" alt="payment icon"></a>
                          </li>
                          <li>
                              <a href="javascript:void(0)">
                                  <img src="assets/images/payment-icon/2.jpg" class="img-fluid blur-up lazyload" alt="payment icon"></a>
                          </li>
                          <li>
                              <a href="javascript:void(0)">
                                  <img src="assets/images/payment-icon/3.jpg" class="img-fluid blur-up lazyload" alt="payment icon"></a>
                          </li>
                          <li>
                              <a href="javascript:void(0)">
                                  <img src="assets/images/payment-icon/4.jpg" class="img-fluid blur-up lazyload" alt="payment icon"></a>
                          </li>
                      </ul>
                  </div>
                  <div class="col-md">
                      <h5><strong> Follow Us </strong></h5>
                      <ul class="mt-3">
                          <li>
                              <a href="javascript:void(0)" class="social">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="grey" class="bi bi-facebook" viewBox="0 0 16 16">
                                      <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                  </svg>
                              </a>
                          </li>
                          <li>
                              <a href="javascript:void(0)" class="social">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="grey" class="bi bi-twitter" viewBox="0 0 16 16">
                                      <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                  </svg>
                              </a>
                          </li>
                          <li>
                              <a href="javascript:void(0)" class="social">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="grey" class="bi bi-instagram" viewBox="0 0 16 16">
                                      <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                  </svg>
                              </a>
                          </li>
                          <li>
                              <a href="javascript:void(0)" class="social">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="grey" class="bi bi-linkedin" viewBox="0 0 16 16">
                                      <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                                  </svg>
                              </a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
      <hr>
      <div class="sub-footer">
          <div class="container">
              <div class="row gy-3">
                  <div class="col-md-4">
                      <p class="text-start font-dark">© 2022, Voxi Theme. Made with heart by EGSS</p>
                  </div>
                  <div class="col-md-4">
                      <ul>
                          <li>
                              <a href="javascript:void(0)" class="font-dark">
                                  Site Map</a>
                          </li>
                          <li>
                              <a href="term-of-use.php" class="font-dark">
                                  Terms Of Use</a>
                          </li>
                          <li>
                              <a href="javascript:void(0)" class="font-dark">
                                  Privacy Notice </a>
                          </li>
                          <li>
                              <a href="javascript:void(0)" class="font-dark">
                                  Cookie Policy</a>
                          </li>
                      </ul>
                  </div>
                  <div class="col-md-2 offset-lg-1">
                      <a href="javascript:void(0)" class="font-dark">
                          <ul>
                              <li>
                                  United State - English
                              </li>
                              <li>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-globe" viewBox="0 0 16 16">
                                      <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4H4.09zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5h2.49zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5H4.847zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5H4.51zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12H5.145zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5H3.82zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068H8.5zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5h2.49zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4h2.355z" />
                                  </svg>
                              </li>
                          </ul>
                      </a>
                  </div>
              </div>
          </div>
      </div>
  </footer>
  <!-- footer end -->

  <!-- Quick view modal start -->
  <div class="modal fade quick-view-modal" id="quick-view">
      <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              <div class="modal-body">
                  <div class="row gy-4">
                      <div class="col-lg-6">
                          <div class="quick-view-image">
                              <div class="quick-view-slider ratio_2">
                                  <div>
                                      <img src="assets/images/fashion/product/front/4.jpg" class="img-fluid bg-img blur-up lazyload" alt="product">
                                  </div>
                                  <div>
                                      <img src="assets/images/fashion/product/front/5.jpg" class="img-fluid bg-img blur-up lazyload" alt="product">
                                  </div>
                                  <div>
                                      <img src="assets/images/fashion/product/front/6.jpg" class="img-fluid bg-img blur-up lazyload" alt="product">
                                  </div>
                                  <div>
                                      <img src="assets/images/fashion/product/front/7.jpg" class="img-fluid bg-img blur-up lazyload" alt="product">
                                  </div>
                              </div>
                              <div class="quick-nav">
                                  <div>
                                      <img src="assets/images/fashion/product/front/4.jpg" class="img-fluid blur-up lazyload" alt="product">
                                  </div>
                                  <div>
                                      <img src="assets/images/fashion/product/front/5.jpg" class="img-fluid blur-up lazyload" alt="product">
                                  </div>
                                  <div>
                                      <img src="assets/images/fashion/product/front/6.jpg" class="img-fluid blur-up lazyload" alt="product">
                                  </div>
                                  <div>
                                      <img src="assets/images/fashion/product/front/7.jpg" class="img-fluid blur-up lazyload" alt="product">
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="product-right">
                              <h2 class="mb-2">Men's Hoodie t-shirt</h2>
                              <ul class="rating mt-1">
                                  <li>
                                      <i class="fas fa-star theme-color"></i>
                                  </li>
                                  <li>
                                      <i class="fas fa-star theme-color"></i>
                                  </li>
                                  <li>
                                      <i class="fas fa-star theme-color"></i>
                                  </li>
                                  <li>
                                      <i class="fas fa-star"></i>
                                  </li>
                                  <li>
                                      <i class="fas fa-star"></i>
                                  </li>
                                  <li class="font-light">(In stock)</li>
                              </ul>
                              <div class="price mt-3">
                                  <h3>$20.00</h3>
                              </div>
                              <div class="color-types">
                                  <h4>colors</h4>
                                  <ul class="color-variant mb-0">
                                      <li class="bg-half-light selected"></li>
                                      <li class="bg-light1"></li>
                                      <li class="bg-blue1"></li>
                                      <li class="bg-black1"></li>
                                  </ul>
                              </div>
                              <div class="size-detail">
                                  <h4>size</h4>
                                  <ul class="">
                                      <li class="selected">S</li>
                                      <li>M</li>
                                      <li>L</li>
                                      <li>XL</li>
                                  </ul>
                              </div>
                              <div class="product-details">
                                  <h4>product details</h4>
                                  <ul>
                                      <li>
                                          <span class="font-light">Style :</span> Hoodie
                                      </li>
                                      <li>
                                          <span class="font-light">Catgory :</span> T-shirt
                                      </li>
                                      <li>
                                          <span class="font-light">Tags:</span> summer, organic
                                      </li>
                                  </ul>
                              </div>
                              <div class="product-btns">
                                  <a href="cart.html" class="btn btn-solid-default btn-sm">Add to cart</a>
                                  <a href="product-left-sidebar.html" class="btn btn-solid-default btn-sm">View
                                      details</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Quick view modal end -->

  <!-- Cart Successful Start -->
  <div class="modal fade cart-modal" id="addtocart" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content ">
              <div class="modal-header">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

              <div class="modal-body">
                  <div class="modal-contain">
                      <div>
                          <div class="modal-messages">
                              <i class="fas fa-check"></i> 3-stripes full-zip hoodie successfully added to
                              you cart.
                          </div>
                          <div class="modal-product">
                              <div class="modal-contain-img">
                                  <img src="assets/images/fashion/instagram/4.jpg" class="img-fluid blur-up lazyload" alt="">
                              </div>
                              <div class="modal-contain-details">
                                  <h4>Premier Cropped Skinny Jean</h4>
                                  <p class="font-light my-2">Yellow, Qty : 3</p>
                                  <div class="product-total">
                                      <h5>TOTAL : <span>$1,140.00</span></h5>
                                  </div>
                                  <div class="shop-cart-button mt-3">
                                      <a href="javascript:void();" class="btn default-light-theme conti-button default-theme default-theme-2 rounded">CONTINUE
                                          SHOPPING</a>
                                      <a href="cart.html" class="btn default-light-theme conti-button default-theme default-theme-2 rounded">VIEW
                                          CART</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="ratio_asos mt-4">
                      <div class="container">
                          <div class="row m-0">
                              <div class="col-sm-12 p-0">
                                  <div class="product-wrapper product-style-2 slide-4 p-0 light-arrow bottom-space spacing-slider">
                                      <div>
                                          <div class="product-box">
                                              <div class="img-wrapper">
                                                  <div class="front">
                                                      <a href="product-left-sidebar.html">
                                                          <img src="assets/images/fashion/product/front/1.jpg" class="bg-img blur-up lazyload" alt="">
                                                      </a>
                                                  </div>
                                              </div>
                                              <div class="product-details text-center">
                                                  <div class="rating-details d-block text-center">
                                                      <span class="font-light grid-content">B&Y Jacket</span>
                                                  </div>
                                                  <div class="main-price mt-0 d-block text-center">
                                                      <h3 class="theme-color">$78.00</h3>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>

                                      <div>
                                          <div class="product-box">
                                              <div class="img-wrapper">
                                                  <div class="front">
                                                      <a href="product-left-sidebar.html">
                                                          <img src="assets/images/fashion/product/front/2.jpg" class="bg-img blur-up lazyload" alt="">
                                                      </a>
                                                  </div>
                                              </div>
                                              <div class="product-details text-center">
                                                  <div class="rating-details d-block text-center">
                                                      <span class="font-light grid-content">B&Y Jacket</span>
                                                  </div>
                                                  <div class="main-price mt-0 d-block text-center">
                                                      <h3 class="theme-color">$78.00</h3>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>

                                      <div>
                                          <div class="product-box">
                                              <div class="img-wrapper">
                                                  <div class="front">
                                                      <a href="product-left-sidebar.html">
                                                          <img src="assets/images/fashion/product/front/3.jpg" class="bg-img blur-up lazyload" alt="">
                                                      </a>
                                                  </div>
                                              </div>
                                              <div class="product-details text-center">
                                                  <div class="rating-details d-block text-center">
                                                      <span class="font-light grid-content">B&Y Jacket</span>
                                                  </div>
                                                  <div class="main-price mt-0 d-block text-center">
                                                      <h3 class="theme-color">$78.00</h3>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>

                                      <div>
                                          <div class="product-box">
                                              <div class="img-wrapper">
                                                  <div class="front">
                                                      <a href="product-left-sidebar.html">
                                                          <img src="assets/images/fashion/product/front/4.jpg" class="bg-img blur-up lazyload" alt="">
                                                      </a>
                                                  </div>
                                              </div>
                                              <div class="product-details text-center">
                                                  <div class="rating-details d-block text-center">
                                                      <span class="font-light grid-content">B&Y Jacket</span>
                                                  </div>
                                                  <div class="main-price mt-0 d-block text-center">
                                                      <h3 class="theme-color">$78.00</h3>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Cart Successful End -->

  <!-- Newsletter modal start -->
  <!--<div class="modal fade newletter-modal" id="newsletter">-->
  <!--    <div class="modal-dialog modal-dialog-centered">-->
  <!--        <div class="modal-content ">-->
  <!--            <div class="modal-header">-->
  <!--                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
  <!--            </div>-->

  <!--            <div class="modal-body">-->
  <!--                <img src="assets/images/newletter-icon.png" class="img-fluid blur-up lazyload" alt="">-->
  <!--                <div class="modal-title">-->
  <!--                    <h2 class="tt-title">Sign up for our Newsletter!</h2>-->
  <!--                    <p class="font-light">Never miss any new updates or products we reveal, stay up to date.</p>-->
  <!--                    <p class="font-light">Oh, and it's free!</p>-->

  <!--                    <div class="input-group mb-3">-->
  <!--                        <input placeholder="Email" class="form-control" type="text">-->
  <!--                    </div>-->

  <!--                    <div class="cancel-button text-center">-->
  <!--                        <button class="btn default-theme w-100" data-bs-dismiss="modal"-->
  <!--                            type="button">Submit</button>-->
  <!--                    </div>-->
  <!--                </div>-->
  <!--            </div>-->
  <!--        </div>-->
  <!--    </div>-->
  <!--</div>-->
  <!-- Newsletter modal end -->

  <!-- Coockie Section Start -->

  <!-- <div class="cookie-bar-section">
        <img src="assets/images/cookie.png" alt="">
        <div class="content">
            <h3>Cookies Consent</h3>
            <p class="font-light">This website use cookies to ensure you get the best experience on our website.</p>
            <div class="cookie-buttons">
                <button class="btn btn-solid-default" id="button">I understand</button>
                <a href="javascript:void(0)" class="btn default-light1">Learn more</a>
            </div>
        </div>
    </div> -->

  <!-- Coockie Section End -->

  <!-- theme Setting Start -->

  <!-- <div class="theme-setting">
        <ul>
            <li>
                <button id="darkButton" class="btn btn-sm dark-buttton">Dark</button>
            </li>
            <li>
                <button class="btn btn-sm rtl-button">RTL</button>
            </li>
            <li class="color-picker">
                <input type="color" class="form-control form-control-color" id="ColorPicker1" value="#e22454"
                    title="Choose your color">
            </li>
        </ul>
    </div> -->

  <!-- theme Setting End  -->

  <!-- tap to top Section Start -->
  <div class="support">
      <a href="javascript:void()">
          <img src="assets/images/icon/support.png">
          Support
      </a>
  </div>
  <!-- tap to top Section End -->

  <!-- support details -->
  <div class="support-details">
      <div class="details">
          <div class="row mb-3 g-0">
              <div class="col-lg-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chat-dots" viewBox="0 0 16 16">
                      <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                      <path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z" />
                  </svg>
              </div>
              <div class="col-lg-10"> Online Chat</div>
          </div>
          <div class="row">
              <div class="col-lg-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-telephone-inbound" viewBox="0 0 16 16">
                      <path d="M15.854.146a.5.5 0 0 1 0 .708L11.707 5H14.5a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 1 0v2.793L15.146.146a.5.5 0 0 1 .708 0zm-12.2 1.182a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                  </svg>
              </div>
              <div class="col-lg-10">
                  <p>+1 800 088 6700<br>
                      Monday to Friday, 9:00am – 9:00pm; <br>Saturday and Sunday, 10:30am – 3:30pm<br> (Except Bank Holidays) | English</p>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pin-map" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8l3-4z" />
                      <path fill-rule="evenodd" d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zM4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z" />
                  </svg>
              </div>
              <div class="col-lg-10">
                  <p>Voxo Service Centre Wembley<br>
                      Mon to Sat, 10:00am - 7:00pm <br>Sun, 10:00am - 5:00pm</p>
              </div>
          </div>
      </div>
  </div>
  <!--end  support details -->

  <!-- tap to top Section Start -->
  <!-- <div class="tap-to-top">
            <a href="#home">
                <i class="fas fa-chevron-up"></i>
            </a>
        </div> -->
  <!-- tap to top Section End -->

  <div class="bg-overlay"></div>

  <!-- latest jquery-->
  <script src="assets/js/jquery-3.5.1.min.js"></script>

  <!-- Bootstrap js-->
  <script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>

  <!-- feather icon js-->
  <script src="assets/js/feather/feather.min.js"></script>

  <!-- lazyload js-->
  <script src="assets/js/lazysizes.min.js"></script>

  <!-- Slick js-->
  <script src="assets/js/slick/slick.js"></script>
  <script src="assets/js/slick/slick-animation.min.js"></script>
  <script src="assets/js/slick/custom_slick.js"></script>

  <!-- newsletter js -->
  <script src="assets/js/newsletter.js"></script>

  <!-- add to cart modal resize -->
  <script src="assets/js/cart_modal_resize.js"></script>

  <!-- Add To Home js -->
  <script src="assets/js/pwa.js"></script>

  <!-- add to cart modal resize -->
  <script src="assets/js/cart_modal_resize.js"></script>

  <!-- feather icon js-->
  <script src="assets/js/timer1.js"></script>

  <!-- notify js -->
  <script src="assets/js/bootstrap/bootstrap-notify.min.js"></script>

  <!-- script js -->
  <script src="assets/js/theme-setting.js"></script>
  <script src="assets/js/script.js"></script>
  <script>
      $(window).on("load", function() {
          $(".loader-container").fadeOut(2500);
      });
  </script>
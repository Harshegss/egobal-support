<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard-E-Global Support Setting</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

 <?php include("header-links.php"); ?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.4/css/bulma.min.css">

</head>

<body>

<?php include("header.php"); ?>

 <?php include("side-bar.php"); ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Setting</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Setting</li>
          <!--<li class="breadcrumb-item active">Category</li>-->
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">

<div class="col-12 mt-5">
                        <div class="card">
                            <div id="Gallery-Body" class="card-body">
                                <div id="uploadedImages1">
                                    <h4 class="card-title">Setting</h4>
                                    <div class="setting-form">
                                        <!--<input type="file" class="form-control mb-3" id="file" name="file" multiple="">-->
                                        <form  class="row "action="##"  method="POST">
                                        <div class="mb-3">
                                            <label for="Web_title" class="form-label">Web Title</label>
                                            <input type="text" class="form-control" id="Web_title" name="site_title" placeholder="Type title for the page" required="">
                                         </div>
                                         <div class="mb-3">
                                            <label for="Web_title" class="form-label">Meta Description</label>
                                            <input type="text" class="form-control" id="Web_title" name="site_title" placeholder="Description " required="">
                                         </div>
                                          <div class="mb-3">
                                            <label for="Web_title" class="form-label">Meta Keywords</label>
                                            <input type="text" class="form-control" id="Web_title" name="site_title" placeholder="Meta Keywords " required="">
                                         </div>
                                         <div class="col-lg-4 col-md-6 col-12 col-sm-12   mb-3">
                                                   <label for="meta_title" class="form-label">Favicon</label>
                                            <div class="">
                                               <div class="select-fav">
                                                     <img id="uploadPreviewfav" src="assets/img/favicon.png"  width="400px">
                                                     <br><br>
                                         <label class="file-label">
                                            <input class="file-input" type="file" id="uploadfav" onchange="Previewfav();">
                                                <!--<button id="siteLogo" type="button" class="btn btn-primary py-2 px-4 file-label">Select Image</button>-->
                                            </label>
                                               </div>
                                            </div>
                                         </div>
                                         <div class=" col-lg-4 col-md-6 col-12 col-sm-12  mb-3">
                                                   <label for="meta_title" class="form-label">Logo 1</label>
                                            <div class="">
                                               <div class="select-logo">
                                         <img id="uploadPreview" src="assets/img/logo.png"  width="400px">
                                         <br><br>
                                         <label class="file-label" >
                                            <input class="file-input" type="file" id="uploadImage" onchange="PreviewImage();">
                                                <!--<button id="siteLogo" type="button" class="btn btn-primary py-2 px-4 file-label">Select Image</button>-->
                                            </label>
                                               </div>
                                            </div>
                                         </div>
                                         
                                         
                                          <div class=" col-lg-4 col-md-6 col-12 col-sm-12 mb-3">
                                            <label for="meta_title" class="form-label">Logo 2</label>
                                            <div class="">
                                               <div class="select-logo">
                                         <img id="uploadPreview1" src="assets/img/logo.png"   width="400px">
                                         <br><br>
                                         <label class="file-label" >
                                            <input class="file-input" type="file" id="uploadImage1" onchange="PreviewImage1();">
                                                <!--<button id="siteLogo" type="button" class="btn btn-primary py-2 px-4 file-label">Select Image</button>-->
                                            </label>
                                               </div>
                                            </div>
                                         </div>
                                         
                                         
                                         
                                          <div class=" mb-3">
                                            <label for="Web_title" class="form-label">Email</label>
                                           <div class="row">
                                               <div class="col-6">
                                                    <input type="text" class="form-control" id="Web_title" name="site_title" placeholder="support@xyz.com " required="">
                                               </div>
                                               <div class="col-6">
                                                    <input type="text" class="form-control" id="Web_title" name="site_title" placeholder="support@xyz.com " required="">
                                               </div>
                                           </div>
                                         </div>
                                         <div class=" mb-3">
                                            <label for="Web_title" class="form-label">Phone No.</label>
                                           <div class="row">
                                               <div class="col-6">
                                                    <input type="text" class="form-control" id="Web_title" name="site_title" placeholder="Phone-1" required="">
                                               </div>
                                               <div class="col-6">
                                                    <input type="text" class="form-control" id="Web_title" name="site_title" placeholder="Phone-2" required="">
                                               </div>
                                           </div>
                                         </div>
                                         <div class="mb-3">
                                            <label for="Web_title" class="form-label">Facebook</label>
                                            <input type="url" class="form-control" id="Web_title" name="site_title" placeholder="http://facebook.com" required="">
                                         </div>
                                         <div class="mb-3">
                                            <label for="Web_title" class="form-label">Twitter</label>
                                            <input type="url" class="form-control" id="Web_title" name="site_title" placeholder="http://twitter.com" required="">
                                         </div>
                                         <div class="mb-3">
                                            <label for="Web_title" class="form-label">Instagram</label>
                                            <input type="url" class="form-control" id="Web_title" name="site_title" placeholder="http://www.Instagram.com" required="">
                                         </div>
                                         <div class="mb-3">
                                            <label for="Web_title" class="form-label">You Tube</label>
                                            <input type="url" class="form-control" id="Web_title" name="site_title" placeholder="http://www.youtube.com" required="">
                                         </div>
                                         <div class="mb-3">
                                            <label for="Web_title" class="form-label">Address</label>
                                            <textarea class="form-control" name="" rows="5" > 4330 Woodside Circle, Florida</textarea>
                                         </div>
                                         <div class="mb-3">
                                            <label for="Web_title" class="form-label">MAP URL</label>
                                            <textarea class="form-control" name="" rows="5"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d28039.67840114439!2d77.20796160000003!3d28.54092800000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1680505545004!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                </textarea>
                                         </div>
                                         <div class="mb-3">
                                            <label for="Web_title" class="form-label">Footer Description</label>
                                            <textarea class="form-control" name="" rows="5">Footer Description</textarea>
                                         </div>
                                          <div class=" mb-3">
                                           <div class="row">
                                               <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                                            <label for="Web_title" class="form-label">Header Code</label>
                                                  <div> <span class="message">Please Enter js code here without script Tag.</span></div>
                                            <textarea class="form-control" name="" rows="5" required=""> </textarea>
                                               </div>
                                               <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                                                   <label for="Web_title" class="form-label">Footer Code</label>
                                                  <div> <span class="message">Please Enter js code here without script Tag.</span></div>
                                                <textarea class="form-control" name="" rows="5"> </textarea>
                                               </div>
                                           </div>
                                         </div>
                                          <div>
                                              <button id="save-setting-btn" type="button" class="btn btn-dark py-2 px-4"  >
                                                     Save setting
                                                  </button>
                                          </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                         </div>
                    </div>


      </div>
    </section>

  </main><!-- End #main -->


<!-- Modal -->
<!--<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">-->
<!--  <div class="modal-dialog modal-xl">-->
<!--    <div class="modal-content">-->
<!--      <div class="modal-header">-->
<!--        <h5 class="modal-title" id="exampleModalLabel">Choose Images</h5>-->
<!--        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->
<!--      </div>-->
<!--      <div class="modal-body">-->
         <!--<input type="file" class="form-control mb-3" id="file" name="file" multiple="">-->
        
<!--                            <div id="Gallery-Body" class="card-body">-->
<!--                                <div id="uploadedImages1">-->
                                    <!--<h4 class="card-title">Media</h4>-->
<!--                                    <div class="single-table">-->
<!--                                        <input type="file" class="form-control mb-3" id="file" name="file" multiple="">-->
<!--                                        <form action="##"  method="POST">-->
<!--                                            <div class="row">-->
                                                                                         
<!--                                                    <div class="col-md-2 mb-4 ">-->
<!--                                                        <input class="d-none form-check-input" id="gallery_1" type="checkbox" name="gallery" value="1.jpg">-->
<!--                                                        <label class="form-check-label rounded w-100 h-100" for="gallery_1">-->
<!--                                                            <img src="assets/img/1.jpg" alt="" class="" width="400">-->
<!--                                                        </label>-->
<!--                                                    </div>-->
<!--                                                    <div class="col-md-2 mb-4 ">-->
<!--                                                        <input class="d-none form-check-input" id="gallery_2" type="checkbox" name="gallery" value="2.jpg">-->
<!--                                                        <label class="form-check-label rounded w-100 h-100" for="gallery_2">-->
<!--                                                            <img src="assets/img/2.jpg" alt="" class="" width="400">-->
<!--                                                        </label>-->
<!--                                                    </div>-->
<!--                                                    <div class="col-md-2 mb-4 ">-->
<!--                                                        <input class="d-none form-check-input" id="gallery_3" type="checkbox" name="gallery" value="3.jpg">-->
<!--                                                        <label class="form-check-label rounded w-100 h-100" for="gallery_3">-->
<!--                                                            <img src="assets/img/3.jpg" alt="" class="" width="400">-->
<!--                                                        </label>-->
<!--                                                    </div>-->
<!--                                                    <div class="col-md-2 mb-4 ">-->
<!--                                                        <input class="d-none form-check-input" id="gallery_4" type="checkbox" name="gallery" value="4.jpg">-->
<!--                                                        <label class="form-check-label rounded w-100 h-100" for="gallery_4">-->
<!--                                                            <img src="assets/img/4.jpg" alt="" class="" width="400">-->
<!--                                                        </label>-->
<!--                                                    </div>-->
<!--                                                    <div class="col-md-2 mb-4 ">-->
<!--                                                        <input class="d-none form-check-input" id="gallery_5" type="checkbox" name="gallery" value="5.jpg">-->
<!--                                                        <label class="form-check-label rounded w-100 h-100" for="gallery_5">-->
<!--                                                            <img src="uploads/5.jpg" alt="" class="" width="400">-->
<!--                                                        </label>-->
<!--                                                    </div>-->
<!--                                                    <div class="col-md-2 mb-4 ">-->
<!--                                                        <input class="d-none form-check-input" id="gallery_6" type="checkbox" name="gallery" value="6.jpg">-->
<!--                                                        <label class="form-check-label rounded w-100 h-100" for="gallery_6">-->
<!--                                                            <img src="uploads/6.jpg" alt="" class="" width="400">-->
<!--                                                        </label>-->
<!--                                                    </div>-->
<!--                                                     <div class="col-md-2 mb-4 ">-->
<!--                                                        <input class="d-none form-check-input" id="gallery_7" type="checkbox" name="gallery" value="7.jpg">-->
<!--                                                        <label class="form-check-label rounded w-100 h-100" for="gallery_7">-->
<!--                                                            <img src="uploads/7.jpg" alt="" class="" width="400">-->
<!--                                                        </label>-->
<!--                                                    </div>-->
<!--                                                     <div class="col-md-2 mb-4 ">-->
<!--                                                        <input class="d-none form-check-input" id="gallery_8" type="checkbox" name="gallery" value="8.jpg">-->
<!--                                                        <label class="form-check-label rounded w-100 h-100" for="gallery_7">-->
<!--                                                            <img src="uploads/8.jpg" alt="" class="" width="400">-->
<!--                                                        </label>-->
<!--                                                    </div>-->
<!--                                                     <div class="col-md-2 mb-4 ">-->
<!--                                                        <input class="d-none form-check-input" id="gallery_9" type="checkbox" name="gallery" value="9.jpg">-->
<!--                                                        <label class="form-check-label rounded w-100 h-100" for="gallery_7">-->
<!--                                                            <img src="uploads/9.jpg" alt="" class="" width="400">-->
<!--                                                        </label>-->
<!--                                                    </div>-->
<!--                                                     <div class="col-md-2 mb-4 ">-->
<!--                                                        <input class="d-none form-check-input" id="gallery_10" type="checkbox" name="gallery" value="10.jpg">-->
<!--                                                        <label class="form-check-label rounded w-100 h-100" for="gallery_7">-->
<!--                                                            <img src="uploads/10.jpg" alt="" class="" width="400">-->
<!--                                                        </label>-->
<!--                                                    </div>-->
<!--                                                    </div>-->
                                          
<!--                                        </form>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
                         
<!--      </div>-->
<!--      <div class="modal-footer">-->
        <!--<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>-->
<!--        <button type="button" class="btn btn-primary">Save changes</button>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->

<!--modle end-->


 <?php include("footer.php"); ?>
<script>


 function Previewfav() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadfav").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreviewfav").src = oFREvent.target.result;
        };
    };
    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };
      function PreviewImage1() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage1").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview1").src = oFREvent.target.result;
        };
    };
    
    


</script>
</body>

</html>
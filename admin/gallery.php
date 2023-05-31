<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard-E-Global Support - Gallery</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

 <?php include("header-links.php"); ?>


</head>

<body>

<?php include("header.php"); ?>

 <?php include("side-bar.php"); ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Gallery</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Gallery</li>
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
                                    <h4 class="card-title">Media</h4>
                                    <div class="single-table">
                                        <input type="file" class="form-control mb-3" id="file" name="file" multiple="">
                                        <form action="##"  method="POST">
                                            <div class="row">
                                                                                         
                                                    <div class="col-md-2 mb-4 ">
                                                        <input class="d-none form-check-input" id="gallery_1" type="checkbox" name="gallery" value="1.jpg">
                                                        <label class="form-check-label rounded w-100 h-100" for="gallery_1">
                                                            <img src="assets/img/1.jpg" alt="" class="" width="400">
                                                        </label>
                                                    </div>
                                                    <div class="col-md-2 mb-4 ">
                                                        <input class="d-none form-check-input" id="gallery_2" type="checkbox" name="gallery" value="2.jpg">
                                                        <label class="form-check-label rounded w-100 h-100" for="gallery_2">
                                                            <img src="assets/img/2.jpg" alt="" class="" width="400">
                                                        </label>
                                                    </div>
                                                    <div class="col-md-2 mb-4 ">
                                                        <input class="d-none form-check-input" id="gallery_3" type="checkbox" name="gallery" value="3.jpg">
                                                        <label class="form-check-label rounded w-100 h-100" for="gallery_3">
                                                            <img src="assets/img/3.jpg" alt="" class="" width="400">
                                                        </label>
                                                    </div>
                                                    <div class="col-md-2 mb-4 ">
                                                        <input class="d-none form-check-input" id="gallery_4" type="checkbox" name="gallery" value="4.jpg">
                                                        <label class="form-check-label rounded w-100 h-100" for="gallery_4">
                                                            <img src="assets/img/4.jpg" alt="" class="" width="400">
                                                        </label>
                                                    </div>
                                                    <div class="col-md-2 mb-4 ">
                                                        <input class="d-none form-check-input" id="gallery_5" type="checkbox" name="gallery" value="5.jpg">
                                                        <label class="form-check-label rounded w-100 h-100" for="gallery_5">
                                                            <img src="uploads/5.jpg" alt="" class="" width="400">
                                                        </label>
                                                    </div>
                                                    <div class="col-md-2 mb-4 ">
                                                        <input class="d-none form-check-input" id="gallery_6" type="checkbox" name="gallery" value="6.jpg">
                                                        <label class="form-check-label rounded w-100 h-100" for="gallery_6">
                                                            <img src="uploads/6.jpg" alt="" class="" width="400">
                                                        </label>
                                                    </div>
                                                     <div class="col-md-2 mb-4 ">
                                                        <input class="d-none form-check-input" id="gallery_7" type="checkbox" name="gallery" value="7.jpg">
                                                        <label class="form-check-label rounded w-100 h-100" for="gallery_7">
                                                            <img src="uploads/7.jpg" alt="" class="" width="400">
                                                        </label>
                                                    </div>
                                                     <div class="col-md-2 mb-4 ">
                                                        <input class="d-none form-check-input" id="gallery_8" type="checkbox" name="gallery" value="8.jpg">
                                                        <label class="form-check-label rounded w-100 h-100" for="gallery_8">
                                                            <img src="uploads/8.jpg" alt="" class="" width="400">
                                                        </label>
                                                    </div>
                                                     <div class="col-md-2 mb-4 ">
                                                        <input class="d-none form-check-input" id="gallery_9" type="checkbox" name="gallery" value="9.jpg">
                                                        <label class="form-check-label rounded w-100 h-100" for="gallery_9">
                                                            <img src="uploads/9.jpg" alt="" class="" width="400">
                                                        </label>
                                                    </div>
                                                     <div class="col-md-2 mb-4 ">
                                                        <input class="d-none form-check-input" id="gallery_10" type="checkbox" name="gallery" value="10.jpg">
                                                        <label class="form-check-label rounded w-100 h-100" for="gallery_10">
                                                            <img src="uploads/10.jpg" alt="" class="" width="400">
                                                        </label>
                                                    </div>
                                                    </div>
                                            <button class="btn btn-danger" type="submit" name="">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                         </div>
                    </div>


      </div>
    </section>

  </main><!-- End #main -->

 <?php include("footer.php"); ?>

</body>

</html>
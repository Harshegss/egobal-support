<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard-E-Global Support</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
<?php include("header-links.php"); ?>
</head>

<body>

<?php include("header.php"); ?>
<?php include("side-bar.php"); ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>About</h1>
    </div>

    <section class="section dashboard">
      <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">About Banner</h5>
                  <form action="" method="">
                  <div class="row">
                     <div class="col-lg-7">
                         <div class="banner-text">
                             <div class="form-field">
                                 <label>Banner Heading</label>
                                 <input type="text" class="form-control" placeholder="Banner heading" name="" value="">
                             </div>
                              <div class="form-field mt-2">
                                 <label>Banner Subheading</label>
                                 <input type="text" class="form-control" placeholder="Banner subheading" name="" value="">
                             </div>
                         </div>
                         <button class="btn d-button mt-4" type="submit">Submit</button>
                     </div>
                     <div class="col-lg-5">
                         <div class="banner-image">
                             <img src="https://thetestingserver.com/eglobal_support/images/webimg/laptop-issues.jpg" class="img-fluid">
                         </div>
                         <div class="form-filed mt-2">
                             <input type="file" class="form-control">
                         </div>
                     </div>
                  </div>
                 </form>
                </div>
              </div>
        </div>
      </div>
      
        <div class="row mt-5">
          <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">About Content</h5>
                  <form action="" method="">
                  <div class="row">
                     <div class="col-lg-7">
                         <div class="banner-text">
                             <div class="form-field mt-2">
                                <textarea class="tinymce-editor">
                                    <p>Hello World!</p>
                                 </textarea>
                             </div>
                         </div>
                         <button class="btn d-button mt-3" type="submit">Submit</button>
                     </div>
                  </div>
                 </form>
                </div>
              </div>
        </div>
      </div>
     
    </section>

  </main><!-- End #main -->

<?php include("footer.php"); ?>

</body>

</html>
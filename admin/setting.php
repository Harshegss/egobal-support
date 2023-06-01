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
      <div class="col-12">
         <div class="card">
            <div id="Gallery-Body" class="card-body">
               <div id="uploadedImages1">
                  <h4 class="card-title">Setting</h4>
                  <div class="setting-form">
                     <!--<input type="file" class="form-control mb-3" id="file" name="file" multiple="">-->
                     <form class="row " action="app/setting-controller.php" method="POST" enctype="multipart/form-data">
                        <div class=" col-md-6 col-12 col-sm-12  mb-3">
                           <label for="meta_title" class="form-label">Logo</label>
                           <div class="">
                              <div class="select-logo">
                                 <img id="uploadPreview" src="<?= storage($setting['logo']) ?>" width="400px">
                                 <br><br>
                                 <label class="file-label">
                                    <input class="file-input" type="file" id="uploadImage" name="logo[]">
                                 </label>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-12 col-sm-12   mb-3">
                           <label for="meta_title" class="form-label">Favicon</label>
                           <div class="">
                              <div class="select-fav">
                                 <img id="uploadPreviewfav" src="<?= storage($setting['fevicon']) ?>" width="400px">
                                 <br><br>
                                 <label class="file-label">
                                    <input class="file-input" type="file" name="fevicon[]" id="uploadfav">
                                 </label>
                              </div>
                           </div>
                        </div>


                        <div class=" mb-3">

                           <div class="row">
                              <div class="col-6">
                                 <label for="Web_title" class="form-label">Email</label>
                                 <input type="text" class="form-control" name="email" placeholder="support@xyz.com " required="" value="<?= $setting['email'] ?>">
                              </div>
                              <div class="col-6">
                                 <label for="Web_title" class="form-label">Phone</label>
                                 <input type="text" class="form-control" name="phone" placeholder="Phone-1" required="" value="<?= $setting['phone'] ?>">
                              </div>
                           </div>


                        </div>
                        <!-- <div class="mb-3">
                           <label for="Web_title" class="form-label">Facebook</label>
                           <input type="url" class="form-control" name="site_title" placeholder="http://facebook.com" required="">
                        </div>
                        <div class="mb-3">
                           <label for="Web_title" class="form-label">Twitter</label>
                           <input type="url" class="form-control" name="site_title" placeholder="http://twitter.com" required="">
                        </div>
                        <div class="mb-3">
                           <label for="Web_title" class="form-label">Instagram</label>
                           <input type="url" class="form-control" name="site_title" placeholder="http://www.Instagram.com" required="">
                        </div>
                        <div class="mb-3">
                           <label for="Web_title" class="form-label">You Tube</label>
                           <input type="url" class="form-control" name="site_title" placeholder="http://www.youtube.com" required="">
                        </div> -->
                        <!-- <div class="mb-3">
                           <label for="Web_title" class="form-label">Address</label>
                           <textarea class="form-control" name="" rows="5"> 4330 Woodside Circle, Florida</textarea>
                        </div> -->
                        <!-- <div class="mb-3">
                           <label for="Web_title" class="form-label">MAP URL</label>
                           <textarea class="form-control" name="" rows="5"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d28039.67840114439!2d77.20796160000003!3d28.54092800000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1680505545004!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                </textarea>
                        </div> -->
                        <!-- <div class="mb-3">
                           <label for="Web_title" class="form-label">Footer Description</label>
                           <textarea class="form-control" name="" rows="5">Footer Description</textarea>
                        </div> -->
                        <div class=" mb-3">
                           <div class="row">
                              <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                                 <label for="Web_title" class="form-label">Header Code</label>
                                 <div> <span class="message">Please Enter js code here without script Tag.</span></div>
                                 <textarea class="form-control" name="header" rows="5" ><?= $setting['header'] ?> </textarea>
                              </div>
                              <div class="col-lg-6 col-md-6 col-12 col-sm-12">
                                 <label for="Web_title" class="form-label">Footer Code</label>
                                 <div> <span class="message">Please Enter js code here without script Tag.</span></div>
                                 <textarea class="form-control" name="footer" rows="5"><?= $setting['footer'] ?> </textarea>
                              </div>
                           </div>
                           <div class="row">
            <div class="col-12">
            <label for="" class="form-label">Meta title</label>
              <input type="text" class="form-control" placeholder="Meta title" name="meta_title" value="<?=@$setting['meta_title']?>">
            </div>
            <div class="col-12">
            <label for="" class="form-label">Meta keywords</label>
              <input type="text" class="form-control" placeholder="Meta keywords" name="meta_keywords" value="<?=@$setting['meta_keywords']?>">
            </div>
            <div class="col-12">
            <label for="" class="form-label">Meta Description</label>
              <input type="text" class="form-control" placeholder="Meta Description" name="meta_description" value="<?=@$setting['meta_description']?>">
            </div>
                           </div>
                        </div>
                        <div>
                           <button id="save-setting-btn" type="submit" name="saveSettting" class="btn btn-dark py-2 px-4">
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
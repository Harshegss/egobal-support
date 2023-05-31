<?php
  if(!isset($_GET['page'])){
    header('Location: parent.php?page=index');
  }
?>
<div class="pagetitle">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Home Banner</h5>
          <form action="app/home_controller.php" method="POST" enctype="multipart/form-data">
            <div class="row">
              <div class="col-lg-7">
                <div class="banner-text">
                  <div class="form-field">
                    <label>Banner Heading</label>
                    <input type="text" class="form-control" placeholder="Banner heading" name="heading" value="<?= $index[0]['heading'] ?>">
                  </div>
                  <div class="form-filed mt-3">
                    <label>Choose Banner Image</label>
                    <input type="file" class="form-control" name="image[]">
                  </div>

                </div>
                <button class="btn d-button mt-3" type="submit" name="topBanner">Submit</button>
              </div>
              <div class="col-lg-5">
                <div class="banner-image">
                  <img src="<?= storage($index[0]['image']) ?>" class="img-fluid">
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <h5 class="card-title">Feature Banner</h5>
            <button class="btn d-button mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal">Add New Slider</button>
          </div>
          <div class="row">
            <?php foreach ($index_slide as $slide) : ?>
              <div class="col-lg-4">
                <form action="app/home_controller.php" method="POST" enctype="multipart/form-data">
                  <div class="feature-banner">
                    <div class="banner-text">
                      <div class="banner-image">
                        <label class="d-flex justify-content-between">Choose Image <button type="button" onclick="if (confirm('Remove All Selected Images?')){return window.location.href='app/home_controller.php?remove_index_slide=<?= $slide['id'] ?>';}else{event.stopPropagation(); event.preventDefault();};" class="btn btn-sm btn-danger">Remove</button></label>
                        <img src="<?= storage($slide['image']) ?>" class="img-fluid">
                      </div>
                      <div class="form-filed mt-3">
                        <input type="file" class="form-control" name="image[]">
                      </div>
                      <div class="form-field">
                        <label>Banner Heading</label>
                        <input type="text" class="form-control" placeholder="Banner heading" name="heading" value="<?= $slide['heading'] ?>">
                      </div>
                      <div class="form-field mt-1">
                        <label>Banner Subheading</label>
                        <input type="text" class="form-control" placeholder="Banner subheading" name="sub_heading" value="<?= $slide['sub_heading'] ?>">
                      </div>
                      <div class="form-field mt-1">
                        <label>Shop Button Link</label>
                        <input type="url" class="form-control" placeholder="url" name="link" value="<?= $slide['link'] ?>">
                      </div>
                      <button class="btn d-button mt-4" type="submit" value="<?= $slide['id'] ?>" name="updateHcip">Update</button>

                    </div>
                  </div>
                </form>
              </div>
            <?php endforeach; ?>
          </div>

        </div>
      </div>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Home Feature</h5>
          <form action="app/home_controller.php" method="POST" enctype="multipart/form-data">
            <div class="row">
              <div class="col-lg-7">
                <div class="banner-text">
                  <div class="form-field">
                    <label>Feature Heading</label>
                    <input type="text" class="form-control" placeholder="Banner heading" name="heading" value="<?= $homeFeature1[0]['heading'] ?>">
                  </div>
                  <div class="form-field mt-2">
                    <label>Feature Description</label>
                    <textarea class="tinymce-editor" name="content"><?= $homeFeature1[0]['content'] ?></textarea>
                  </div>
                </div>
              </div>
              <div class="col-lg-5">
                <label>Feature Image</label>
                <div class="banner-image mt-4">
                  <img src="<?= storage($homeFeature1[0]['image']) ?>" class="img-fluid w-50">
                </div>
                <div class="form-filed mt-3">
                  <input type="file" class="form-control" name="image[]">
                </div>
                <div class="form-field mt-4">
                  <label>Explore Button Link</label>
                  <input type="url" class="form-control" placeholder="url" name="link" value="<?= $homeFeature1[0]['link'] ?>">
                </div>
              </div>
              <div class="col-12"><button class="btn d-button mt-4" type="submit" value="<?= $homeFeature1[0]['id'] ?>" name="updateHcip">Update</button></div>
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
          <h5 class="card-title">Home Feature</h5>
          <form action="app/home_controller.php" method="POST" enctype="multipart/form-data">
            <div class="row">
              <div class="col-lg-7">
                <div class="banner-text">
                  <div class="form-field">
                    <label>Feature Heading</label>
                    <input type="text" class="form-control" placeholder="Banner heading" name="heading" value="<?= $homeFeature2[0]['heading'] ?>">
                  </div>
                  <div class="form-field mt-2">
                    <label>Feature Description</label>
                    <textarea class="tinymce-editor" name="content"><?= $homeFeature2[0]['content'] ?></textarea>
                  </div>
                </div>
              </div>
              <div class="col-lg-5">
                <label>Feature Image</label>
                <div class="banner-image mt-4">
                  <img src="<?= storage($homeFeature2[0]['image']) ?>" class="img-fluid w-50">
                </div>
                <div class="form-filed mt-3">
                  <input type="file" class="form-control" name="image[]">
                </div>
                <div class="form-field mt-4">
                  <label>Explore Button Link</label>
                  <input type="url" class="form-control" placeholder="url" name="link" value="<?= $homeFeature2[0]['link'] ?>">
                </div>
              </div>
              <div class="col-12"><button class="btn d-button mt-4" type="submit" value="<?= $homeFeature2[0]['id'] ?>" name="updateHcip">Update</button></div>
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
          <h5 class="card-title">Home Feature</h5>
          <form action="app/home_controller.php" method="POST" enctype="multipart/form-data">
            <div class="row">
              <div class="col-lg-7">
                <div class="banner-text">
                  <div class="form-field">
                    <label>Feature Heading</label>
                    <input type="text" class="form-control" placeholder="Banner heading" name="heading" value="<?= $homeFeature3[0]['heading'] ?>">
                  </div>
                  <div class="form-field mt-2">
                    <label>Feature Description</label>
                    <textarea class="tinymce-editor" name="content"><?= $homeFeature3[0]['content'] ?></textarea>
                  </div>
                </div>
              </div>
              <div class="col-lg-5">
                <label>Feature Image</label>
                <div class="banner-image mt-4">
                  <img src="<?= storage($homeFeature3[0]['image']) ?>" class="img-fluid w-50">
                </div>
                <div class="form-filed mt-3">
                  <input type="file" class="form-control" name="image[]">
                </div>
                <div class="form-field mt-4">
                  <label>Explore Button Link</label>
                  <input type="url" class="form-control" placeholder="url" name="link" value="<?= $homeFeature3[0]['link'] ?>">
                </div>
              </div>
              <div class="col-12"><button class="btn d-button mt-4" type="submit" value="<?= $homeFeature3[0]['id'] ?>" name="updateHcip">Update</button></div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <h5 class="card-title">Contact Boxes</h5>

          </div>

          <div class="row">
            <div class="col-lg-6">
              <form action="app/home_controller.php" method="POST" enctype="multipart/form-data">
                <div class="feature-banner">
                  <div class="banner-text">

                    <div class="banner-image">
                      <label>Choose Image</label><br>
                      <img src="<?= storage($contactBox1[0]['image']) ?>" width="50%" class="img-fluid">
                    </div>
                    <div class="form-filed mt-3">
                      <input type="file" class="form-control" name="image[]">
                    </div>
                    <div class="form-field">
                      <label> Heading</label>
                      <input type="text" class="form-control" placeholder="heading" name="heading" value="<?= $contactBox1[0]['heading'] ?>" value="">
                    </div>
                    <div class="form-field mt-1">
                      <label>Sub heading</label>
                      <textarea class="tinymce-editor">
                      <?= $contactBox1[0]['content'] ?>
                                 </textarea>
                    </div>
                    <div class="form-field mt-1">
                      <label>Button Link</label>
                      <input type="url" class="form-control" placeholder="url" name="link" value="<?= $contactBox1[0]['link'] ?>">
                    </div>
                    <button class="btn d-button mt-4" type="submit" value="<?= $contactBox1[0]['id'] ?>" name="updateHcip">Update</button>


                  </div>

                </div>
              </form>
            </div>
            <div class="col-lg-6">
              <form action="app/home_controller.php" method="POST" enctype="multipart/form-data">
                <div class="feature-banner">
                  <div class="banner-text">

                    <div class="banner-image">
                      <label>Choose Image</label><br>
                      <img src="<?= storage($contactBox2[0]['image']) ?>" width="50%" class="img-fluid">
                    </div>
                    <div class="form-filed mt-3">
                      <input type="file" class="form-control" name="image[]">
                    </div>
                    <div class="form-field">
                      <label> Heading</label>
                      <input type="text" class="form-control" placeholder="heading" name="heading" value="<?= $contactBox2[0]['heading'] ?>" value="">
                    </div>
                    <div class="form-field mt-1">
                      <label>Sub heading</label>
                      <textarea class="tinymce-editor">
                      <?= $contactBox2[0]['content'] ?>
                                 </textarea>
                    </div>
                    <div class="form-field mt-1">
                      <label>Button Link</label>
                      <input type="url" class="form-control" placeholder="url" name="link" value="<?= $contactBox2[0]['link'] ?>">
                    </div>
                    <button class="btn d-button mt-4" type="submit" value="<?= $contactBox2[0]['id'] ?>" name="updateHcip">Update</button>
                  </div>

                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>



  <div class="row mt-2">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">We Fix Your Devices</h5>

          <div class="row">
            <div class="col-lg-4 mt-1">
              <form action="app/home_controller.php" class="bg-light" method="POST" enctype="multipart/form-data">
                <div class="banner-text p-5">
                  <img src="" class="img-fluid">
                  <div class="form-field mt-3">
                    <label>Choose Icon</label>
                    <input type="file" class="form-control" placeholder="Choose file" name="image[]">
                  </div>
                  <div class="form-field mt-2">
                    <label>Heading</label>
                    <input type="text" class="form-control" placeholder="Features heading" name="heading" value="">
                  </div>
                  <div class="form-field mt-3">
                    <button class="btn d-button mt-4" type="submit" value="index_devices" name="addHcip">Add</button>
                  </div>
                </div>
              </form>
            </div>
            <?php foreach ($index_devices as $value) : ?>
              <div class="col-lg-4 mt-1">
                <form action="app/home_controller.php" method="POST" enctype="multipart/form-data">
                  <div class="banner-text p-5">
                    <img src="<?= storage($value['image']) ?>" class="img-fluid">
                    <div class="form-field mt-3">
                      <label>Choose Icon</label>
                      <input type="file" class="form-control" placeholder="Choose file" name="image[]">
                    </div>
                    <div class="form-field mt-2">
                      <label>Heading</label>
                      <input type="text" class="form-control" placeholder="Features heading" name="heading" value="<?= $value['heading'] ?>">
                    </div>
                    <div class="form-field mt-3 d-flex justify-content-between">
                      <button class="btn d-button" type="submit" value="<?= $value['id'] ?>" name="updateHcip">Update</button>
                      <button type="button" onclick="window.location.href='app/home_controller.php?remove_index_slide=<?= $value['id'] ?>'" class="btn btn-danger">Remove</button>
                    </div>
                  </div>
                </form>
              </div>
            <?php endforeach; ?>
            <!-- 
            <div class="col-lg-4 mt-1">
              <form action="" method="">
                <div class="banner-text p-5">
                  <img src="https://thetestingserver.com/egssservices/assets/images/icon/2.svg" class="img-fluid">
                  <div class="form-field mt-3">
                    <label>Choose Icon</label>
                    <input type="file" class="form-control" placeholder="Choose file" name="" value="">
                  </div>
                  <div class="form-field mt-2">
                    <label>Heading</label>
                    <input type="text" class="form-control" placeholder="Features heading" name="" value="">
                  </div>
                  <div class="form-field mt-3">
                    <button class="btn d-button" type="submit">Submit</button>
                  </div>
                </div>
              </form>
            </div>

            <div class="col-lg-4 mt-1">
              <form action="" method="">
                <div class="banner-text p-5">
                  <img src="https://thetestingserver.com/egssservices/assets/images/icon/3.svg" class="img-fluid">
                  <div class="form-field mt-3">
                    <label>Choose Icon</label>
                    <input type="file" class="form-control" placeholder="Choose file" name="" value="">
                  </div>
                  <div class="form-field mt-2">
                    <label>Heading</label>
                    <input type="text" class="form-control" placeholder="Features heading" name="" value="">
                  </div>
                  <div class="form-field mt-3">
                    <button class="btn d-button" type="submit">Submit</button>
                  </div>
                </div>
              </form>
            </div> -->
          </div>
          <!-- <div class="row">
            <div class="col-lg-4 mt-1">
              <form action="" method="">
                <div class="banner-text p-5">
                  <img src="https://thetestingserver.com/egssservices/assets/images/icon/4.svg" class="img-fluid">
                  <div class="form-field mt-3">
                    <label>Choose Icon</label>
                    <input type="file" class="form-control" placeholder="Choose file" name="" value="">
                  </div>
                  <div class="form-field mt-2">
                    <label>Heading</label>
                    <input type="text" class="form-control" placeholder="Features heading" name="" value="">

                  </div>

                  <div class="form-field mt-3">
                    <button class="btn d-button" type="submit">Submit</button>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-lg-4 mt-1">
              <form action="" method="">
                <div class="banner-text p-5">
                  <img src="https://thetestingserver.com/egssservices/assets/images/icon/5.svg" class="img-fluid">
                  <div class="form-field mt-3">
                    <label>Choose Icon</label>
                    <input type="file" class="form-control" placeholder="Choose file" name="" value="">
                  </div>
                  <div class="form-field mt-2">
                    <label>Heading</label>
                    <input type="text" class="form-control" placeholder="Features heading" name="" value="">

                  </div>

                  <div class="form-field mt-3">
                    <button class="btn d-button" type="submit">Submit</button>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-lg-4 mt-1">
              <form action="" method="">
                <div class="banner-text p-5">
                  <img src="https://thetestingserver.com/egssservices/assets/images/icon/6.svg" class="img-fluid">
                  <div class="form-field mt-3">
                    <label>Choose Icon</label>
                    <input type="file" class="form-control" placeholder="Choose file" name="" value="">
                  </div>
                  <div class="form-field mt-2">
                    <label>Heading</label>
                    <input type="text" class="form-control" placeholder="Features heading" name="" value="">

                  </div>

                  <div class="form-field mt-3">
                    <button class="btn d-button" type="submit">Submit</button>
                  </div>
                </div>
              </form>
            </div>
          </div> -->

        </div>
      </div>
    </div>
  </div>
</section>
<div class="pagetitle">
  <h1>Brands</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item ">Services</li>
      <li class="breadcrumb-item active">Brands</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<section class="section">

  <div class="row">

    <div class="col-12">
      <div class="card pt-4">
        <div class="category-add-content d-block">
          <h4 class="card-title"> Brands</h4>
          <?php
          if (isset($_GET['edit'])) {
            $id = $_GET['edit'];
            $new = new Crud('brands', "WHERE id = $id");
            $edit = $new->get()[0];
            $image = storage($new->get()[0]['image']);
          }
          ?>
          <form class="row" action="app/category_controller.php" method="POST" enctype="multipart/form-data">
            <div class="col <?= isset($_GET['edit']) ? '' : 'd-none' ?>">
              <a href="parent.php?page=brands" class="btn btn-sm btn-dark">Back To Add Category</a>
            </div>
            <div class="col">
            <label for="" class="form-label">Brand Name</label>
              <input type="text" class="form-control form-control" placeholder="Brand Name" name="name" value="<?= @$edit['name'] ?>">
            </div>
            <div class="col">
            <label for="" class="form-label">Meta title</label>
              <input type="text" class="form-control" placeholder="Meta title" name="meta_title" value="<?=@$edit['meta_title']?>">
            </div>
            <div class="col">
            <label for="" class="form-label">Meta keywords</label>
              <input type="text" class="form-control" placeholder="Meta keywords" name="meta_keywords" value="<?=@$edit['meta_keywords']?>">
            </div>
            <div class="col">
            <label for="" class="form-label">Meta Description</label>
              <input type="text" class="form-control" placeholder="Meta Description" name="meta_description" value="<?=@$edit['meta_description']?>">
            </div>
            <div class="col">
            <label for="" class="form-label">Brand Image</label>
              <img src="<?= @$image ?>" alt="" width="35" class="me-2 <?= isset($_GET['edit']) ? '' : 'd-none' ?>">
              <input type="file" name="image[]" class="form-control form-control-sm py-2 px-3 " id="">
            </div>
            <div class="col">
            <label for="" class="form-label">Select  Category</label>
              <select class="js-example-basic-multiple form-control w-100" name="categories[]" multiple="multiple">
                <?php foreach ($category as $key => $value) : ?>
                  <?php if (isset($_GET['edit']) ? in_array($category[$key]['id'], json_decode($edit['categories'])) : 1 === '2') : ?>
                    <option value="<?= $value['id'] ?>" selected><?= $value['name'] ?></option>
                  <?php else : ?>
                    <option value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
                  <?php endif; ?>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="col-2">
              <button type="submit" class="btn btn-primary" value="<?= @$id ?>" name="<?= isset($_GET['edit']) ? 'updateBrands' : 'addBrands' ?>" value="<?= @$id ?>"><?= isset($_GET['edit']) ? 'Update Category' : 'Add Category' ?></button>
            </div>
          </form>
        </div>
        <div class="card-body table-scroll">
          <!-- Table with stripped rows -->
          <table class="table datatable table-text-center ">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Image</th>
                <th scope="col">Categories</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($brands as $items) : ?>
                <tr>
                  <th scope="row"><?= $items['id'] ?></th>
                  <td><?= $items['name'] ?></td>
                  <td>
                    <div class="category_img"><img src="<?= storage($items['image']) ?>" alt="" name=""></div>
                  </td>
                  <td>
                    <?php foreach (json_decode($items['categories']) as $list) : ?>
                      <span class="badge text-bg-dark"><?php
                      $check = new Crud('category', "WHERE id = $list");
                      echo $check->get()[0]['name'];
                      ?></span>
                    <?php endforeach; ?>
                  </td>
                  <td class="">
                    <ul class="d-flex list-unstyled action_btn">
                      <li class="mx-2">
                        <img onclick="window.location='parent.php?page=brands&edit=<?= $items['id'] ?>'" class="w-25 me-3" style="cursor: pointer;" data-id="<?= $items['id'] ?>" src="assets/img/edit.png">
                        <img class="w-25" style="cursor: pointer;" src="assets/img/trash.png" onclick="if (confirm('You really want to removethis blog?')){return window.location.href='app/category_controller.php?remove_this_brand=<?= $items['id'] ?>';}else{event.stopPropagation(); event.preventDefault();};">
                      </li>
                    </ul>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
          <!-- End Table with stripped rows -->
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="row mt-2">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Content</h5>

          <div class="row">
            <div class="col-lg-12 mt-1">
              <form action="app/home_controller.php" class="bg-light" method="POST" enctype="multipart/form-data">
                <div class="banner-text p-2">
                  <img src="" class="img-fluid">
                  <div class="form-field mt-3">
                    <label>Image</label>
                    <input type="file" class="form-control" placeholder="Choose file" name="image[]">
                  </div>
                  <div class="form-field mt-2">
                    <label>Heading</label>
                    <input type="text" class="form-control" placeholder="Features heading" name="heading" value="">
                  </div>
                  <div class="form-field mt-2">
                    <label>Content</label>
                    <textarea class="tinymce-editor" name="content"></textarea>
                  </div>
                  <div class="form-field mt-3 text-end">
                    <button class="btn d-button mt-4" type="submit" value="brand_bottom" name="addHcip">Add</button>
                  </div>
                </div>
              </form>
            </div>
            <?php foreach ($brand_bottom as $value) : ?>
              <div class="col-lg-6 mt-1">
                <h5 class="card-title"><?= $value['heading'] ?></h5>
                <form action="app/home_controller.php" method="POST" enctype="multipart/form-data">
                  <div class="banner-text">
                    <img src="<?= storage($value['image']) ?>" class="img-fluid">
                    <div class="form-field ">
                      <label>Choose Icon</label>
                      <input type="file" class="form-control" placeholder="Choose file" name="image[]">
                    </div>
                    <div class="form-field mt-2">
                      <label>Heading</label>
                      <input type="text" class="form-control" placeholder="Features heading" name="heading" value="<?= $value['heading'] ?>">
                    </div>
                    <div class="form-field mt-2">
                      <label>Content</label>
                      <textarea class="tinymce-editor" name="content"><?= $value['content'] ?></textarea>
                    </div>
                    <div class="form-field mt-3 d-flex justify-content-between">
                      <button class="btn d-button" type="submit" value="<?= $value['id'] ?>" name="updateHcip">Update</button>
                      <button type="button" onclick="window.location.href='app/home_controller.php?remove_brand_bottom=<?= $value['id'] ?>'" class="btn btn-danger">Remove</button>
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
</section>
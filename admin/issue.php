<div class="pagetitle">
  <h1>Issues</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item ">Services</li>
      <li class="breadcrumb-item active">Issue</li>
    </ol>
  </nav>
</div>

<section class="section">
  <div class="row">
    <div class="col-12">
      <div class="card pt-4">
        <div class="category-add-content">
          <h4 class="card-title">Issue</h4>
          <?php
          if (isset($_GET['edit'])) {
            $id = $_GET['edit'];
            $new = new Crud('issues', "WHERE id = $id");
            $edit = $new->get()[0];
            $image = storage($new->get()[0]['image']);
          }
          ?>
          <form class="row" action="app/category_controller.php" method="POST" enctype="multipart/form-data">
            <div class="col <?= isset($_GET['edit']) ? '' : 'd-none' ?>">
              <a href="parent.php?page=issue" class="btn btn-sm btn-dark">Back To Add Issue</a>
            </div>
            <div class="col">
              <input type="text" class="form-control form-control" placeholder="Issues Name" name="name" value="<?= @$edit['name'] ?>">
            </div>
            <div class="col d-flex">
              <img src="<?= @$image ?>" alt="" width="35" class="me-2 <?= isset($_GET['edit']) ? '' : 'd-none' ?>">
              <input type="file" name="image[]" class="form-control form-control-sm py-2 px-3 " id="">
            </div>
            <div class="col-4">
              <select class="form-control w-100" name="series">
                <option value="" disabled selected>Select Series</option>
                <?php foreach ($models as $key => $value) : ?>
                  <option value="<?= $value['id'] ?>" <?= isset($_GET['edit']) ? ($edit['series_id'] == $value['id'] ? 'selected' : '') : '' ?>><?= $value['name'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="col-2">
              <button type="submit" class="btn btn-primary" value="<?= @$id ?>" name="<?= isset($_GET['edit']) ? 'updateIssue' : 'addIssue' ?>" value="<?= @$id ?>"><?= isset($_GET['edit']) ? 'Update Issues' : 'Add Issues' ?></button>
            </div>
          </form>
        </div>
        <div class="card-body table-scroll">
          <!-- Table with stripped rows -->
          <table class="table datatable table-text-center ">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Series</th>
                <th scope="col">Brand Name</th>
                <th scope="col">Series</th>
                <th scope="col">Create Issue</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($issues as $items) : ?>
                <tr>
                  <th scope="row"><?= $items['id'] ?></th>
                  <td><?= $items['name'] ?></td>
                  <td>
                    <div class="category_img"><img src="<?= storage($items['image']) ?>" alt="" name="" class="w-100"></div>
                  </td>
                  <td><?= $items['modelname'] ?></td>
                  <?php if ($items['single_issue_id'] != null) : ?>
                    <td><a href="parent.php?page=issue&editSingleIssue=<?= $items['single_issue_id'] ?>" class="btn btn-sm btn-dark">Edit</a></td>
                  <?php else : ?>
                    <td><button class="btn btn-dark btn-sm createIssuePage" data-bs-toggle="offcanvas" href="#createIssuePage" data-type="add" data-issue="<?= $items['id'] ?>" role="button" aria-controls="createIssuePage">Create</button></td>
                  <?php endif; ?>
                  <td class="">
                    <img onclick="window.location='parent.php?page=issue&edit=<?= $items['id'] ?>'" class="w-25 me-3" style="cursor: pointer;" data-id="<?= $items['id'] ?>" src="<?= asset('assets/img/edit.png') ?>">
                    <img class="w-25" style="cursor: pointer;" src="<?= asset('assets/img/trash.png') ?>" onclick="if (confirm('You really want to removethis blog?')){return window.location.href='app/category_controller.php?remove_this_issue=<?= $items['id'] ?>';}else{event.stopPropagation(); event.preventDefault();};">
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
          <?php
          if (isset($_GET['edit'])) {
            $id = $_GET['edit'];
            $new = new Crud('issues', "WHERE id = $id");
            $edit = $new->get()[0];
            $image = storage($new->get()[0]['image']);
          }
          ?>
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
                    <button class="btn d-button mt-4" type="submit" value="model_bottom" name="addHcip">Add</button>
                  </div>
                </div>
              </form>
            </div>
            <?php foreach ($model_bottom as $value) : ?>
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
                      <button type="button" onclick="window.location.href='app/home_controller.php?remove_model_bottom=<?= $value['id'] ?>'" class="btn btn-danger">Remove</button>
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

<div class="offcanvas offcanvas-end text-bg-dark" style="width:700px" tabindex="-1" id="createIssuePage" aria-labelledby="createIssuePageLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="">Add Single Issue</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    <label for="addSingleIssue" class="btn btn-primary">Save</label>
  </div>

  <div class="offcanvas-body">
    <form action="app/single_issue_controller.php" method="POST" enctype="multipart/form-data">
      <div class="form-feild">
        <label class="text-white">Heading</label>
        <input type="text" class="form-control mt-2 fs-3" name="heading" value="">
      </div>
      <div class="form-feild mt-3">
        <label class="text-white">Content</label>
        <textarea class="tinymce-editor" name="content"></textarea>
      </div>
      <div class="form-feild mt-3">
        <div class="row bg-light py-3 rounded mb-3 appendedItem">
          <div class="col">
            <input type="text" name="sec_heading[]" class="form-control" placeholder="Heading" aria-label="First name">
          </div>
          <div class="col-5">
            <input type="file" name="sec_image[]" class="form-control form-control-sm py-2">
          </div>
          <div class="col-12 ">
            <textarea class="form-control" name="sec_content[]" rows="5"></textarea>
          </div>
        </div>
        <div id="dynamicSection">

        </div>
        <div class="text-end mt-3">
          <button class="btn-sm btn btn-primary" id="addSections" type="button">Add Section</button>
        </div>
      </div>
      <div class="form-feild mt-3">
        <label class="text-white">Meta Title</label>
        <input type="text" class="form-control mt-2" name="meta_title" value="">
      </div>
      <div class="form-feild mt-3">
        <label class="text-white">Meta Description</label>
        <textarea class="form-control mt-2" rows="2" name="meta_description"></textarea>
      </div>
      <div class="form-feild mt-3">
        <label class="text-white">Meta Keywords</label>
        <input type="text" class="form-control mt-2" name="meta_keyword" value="" placeholder="Hello, Hii, Bye, Byee">
      </div>
      <button type="submit" id="addSingleIssue" name="addSingleIssue" value="" class="d-none">Add Single Issue</button>
    </form>
  </div>
</div>

<script>
  $(document).ready(function() {
    $('.createIssuePage').click(function() {
      $('#addSingleIssue').val($(this).data('issue'))
    })
    $('#addSections').click(function() {
      let div = $('.appendedItem')[0]
      $(div).clone().appendTo('#dynamicSection');
    })
  })
</script> 

<?php if(isset($_GET['editSingleIssue'])):
  include "forms/edit-single-issue.php";
endif; ?>
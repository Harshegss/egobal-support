<div class="pagetitle">
  <h1>Category</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item ">Services</li>
      <li class="breadcrumb-item active">Category</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<section class="section">
  <div class="row">
<?php

  if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $new = new Crud('category',"WHERE id = $id");
    $name = $new->get()[0];
    $image = storage($new->get()[0]['image']);
  }
  ?>
    <div class="col-12">
      <div class="card pt-4">
        <div class="category-add-content d-block">
          <h4 class="card-title"> Categories</h4>
          <form class="row mb-3" action="app/category_controller.php" method="POST" enctype="multipart/form-data">
          <div class="col <?=isset($_GET['edit']) ? '' : 'd-none'?>">
              <a href="parent.php?page=category" class="btn btn-sm btn-dark">Back To Add Category</a>
            </div>
            <div class="col">
              <label for="" class="form-label">Category Name</label>
              <input type="text" class="form-control" placeholder="Category Name" name="name" value="<?=@$name['name']?>">
            </div>
            <div class="col">
            <label for="" class="form-label">Meta title</label>
              <input type="text" class="form-control" placeholder="Meta title" name="meta_title" value="<?=@$name['meta_title']?>">
            </div>
            <div class="col">
            <label for="" class="form-label">Meta keywords</label>
              <input type="text" class="form-control" placeholder="Meta keywords" name="meta_keywords" value="<?=@$name['meta_keywords']?>">
            </div>
            <div class="col">
            <label for="" class="form-label">Meta Description</label>
              <input type="text" class="form-control" placeholder="Meta Description" name="meta_description" value="<?=@$name['meta_description']?>">
            </div>
            <div class="col">
            <label for="" class="form-label">Image</label>
              <img src="<?=@$image?>" alt="" width="35" class="me-2 <?=isset($_GET['edit']) ? '' : 'd-none'?>"><input type="file" name="image[]" class="form-control form-control-sm py-2 px-3 " id="">
            </div>
            <div class="col">
              <button type="submit" class="btn btn-primary" value="<?=@$name['id']?>"  name="<?=isset($_GET['edit']) ? 'updateCategory' : 'addCategory'?>"><?=isset($_GET['edit']) ? 'Update Category' : 'Add Category'?></button>
            </div>
          </form>
        </div>
        <div class="card-body table-scroll">
          <table class="table datatable table-text-center ">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1; foreach ($category as $value) : ?>
                <tr>
                  <th scope="row"><?=$i?></th>
                  <td class="name"><?=$value['name']?></td>
                  <td>
                    <div class="category_img"><img src="<?=storage($value['image'])?>" alt="" class="w-50"></div>
                  </td>
                  <td class="">
                    <img onclick="window.location='parent.php?page=category&edit=<?=$value['id']?>'" class="w-25 me-3" style="cursor: pointer;" data-id="<?=$value['id']?>" src="<?=asset('assets/img/edit.png')?>">
                    <img class="w-25" style="cursor: pointer;" src="<?=asset('assets/img/trash.png')?>" onclick="if (confirm('You really want to removethis blog?')){return window.location.href='app/category_controller.php?remove_this_category=<?= $value['id'] ?>';}else{event.stopPropagation(); event.preventDefault();};">
                  </td>
                </tr>
              <?php $i++; endforeach;?>
            </tbody>
          </table>
          <!-- End Table with stripped rows -->
        </div>
      </div>
    </div>

  </div>
</section>


<!-- <script>
  $(document).ready(function() {})
</script> -->
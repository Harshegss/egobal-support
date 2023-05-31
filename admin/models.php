<div class="pagetitle">
  <h1>Models</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item ">Services</li>
      <li class="breadcrumb-item active">Models</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<section class="section">
  <div class="row">
    <div class="col-12">
      <div class="card pt-4">
        <div class="category-add-content">
          <h4 class="card-title">Models</h4>
          <button type="button" class="btn d-button py-2 px-4" data-bs-toggle="modal" data-bs-target="#addModels">Add Model</button>
        </div>
        <div class="card-body table-scroll">
          <!-- Table with stripped rows -->
          <table class="table datatable table-text-center ">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Series</th>
                <th scope="col">Brand Name</th>
                <th scope="col">Modals</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($models as $items): ?>
                <tr>
                  <th scope="row"><?=$items['id']?></th>
                  <td><?=$items['name']?></td>
                  <td><?=$items['brandname']?></td>
                  <td><?php foreach(json_decode($items['models']) as $dt):?>
                    <span class="badge text-bg-dark fw-medium"><?=$dt?></span>
                    <?php endforeach; ?>
                  </td>
                  <td class="">
                    <img onclick="window.location='parent.php?page=models&edit=<?= $items['id'] ?>'" class="w-25 me-3" style="cursor: pointer;" data-id="<?= $items['id'] ?>" src="<?= asset('assets/img/edit.png') ?>">
                    <img class="w-25" style="cursor: pointer;" src="<?= asset('assets/img/trash.png') ?>" onclick="if (confirm('You really want to removethis blog?')){return window.location.href='app/category_controller.php?remove_this_model=<?= $items['id'] ?>';}else{event.stopPropagation(); event.preventDefault();};">
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

<?php
if(isset($_GET['edit'])){
  $id = $_GET['edit'];
  $model = new Crud('models',"WHERE id = $id" ); 
  $model = $model->get()[0];
}
?>
<div class="modal fade" id="addModels" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"><?=isset($_GET['edit']) ? 'Edit Model' : 'Add New Model';?></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="app/category_controller.php" method="POST" enctype="multipart/form-data">
          <div class="form-feild">
            <label class="text-white">Series</label>
            <input type="text" class="form-control mt-2" name="name" placeholder="Alienware Series" value="<?=@$model['name']?>">
          </div>
          <div class="form-feild mt-3">
            <label class="text-white">Select Brand</label>
            <select class="form-control" name="brand">
            <option value="" disabled selected>Select Brand</option>
              <?php foreach ($brands as $value) : ?>
                <option value="<?= $value['id'] ?>" <?=isset($_GET['edit']) ? ($value['id'] == $model['brand_id'] ? 'selected' : '') : '';?>><?= $value['name'] ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-feild mt-3">
            <label class="text-white">Models</label>
            <textarea name="models" class="form-control" id="" cols="30" rows="10" placeholder="Alienware m15 R7 
Alienware m17 R5
Alienware x17 R2
Alienware x15
Alienware x14
Alienware x17
Alienware x14">
<?=isset($_GET['edit']) ? implode(PHP_EOL,json_decode($model['models'])) : '';?>
</textarea>
          </div>
          <button type="submit" id="addModel" name="<?=isset($_GET['edit']) ? 'updateModel' : 'addModel';?>" value="<?=@$model['id']?>" class="d-none">Add Model</button>
        </form>
      </div>
      <div class="modal-footer">
        <label for="addModel" class="btn bn-sm bg-light text-dark"><?=isset($_GET['edit']) ? 'Save Model' : 'Add Model';?></label>
      </div>
    </div>
  </div>
</div>

<?php if(isset($_GET['edit'])): ?>
  <script> $(document).ready(function(){ 
    
    $('#addModels').modal('show');
     }) </script>
<?php endif; ?>
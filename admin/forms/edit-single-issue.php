<?php
$id = $_GET['editSingleIssue'];
$get = new Crud('single_issue', "WHERE id = $id");
$get = $get->get()[0];

?>
<div class="offcanvas offcanvas-end text-bg-dark show" style="width:700px" tabindex="-1" id="createIssuePage" aria-labelledby="createIssuePageLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="">Edit Single Issue</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    <label for="updateSingleIssue" class="btn btn-primary">Save</label>
  </div>
  <div class="offcanvas-body">
    <form action="app/single_issue_controller.php" method="POST" enctype="multipart/form-data">
      <div class="form-feild">
        <label class="text-white">Heading</label>
        <input type="text" class="form-control mt-2 fs-3" name="heading" value="<?= $get['heading'] ?>" >
      </div>
      <div class="form-feild mt-3">
        <label class="text-white">Content</label>
        <textarea class="tinymce-editor" name="content" required><?= $get['content'] ?></textarea>
      </div>
      <div class="form-feild mt-3">
        <?php foreach (json_decode($get['sec_heading']) as $key => $value) : ?>
          <div class="row bg-light py-3 rounded mb-3 appendedItem2 position-relative">
            <div class="col-12">
            <button class="btn btn-danger btn-sm removeSection position-absolute" style="top:10px; right:10px">Remove</button>
              <input type="hidden" name="sec_image_text[]" value="<?=json_decode($get['sec_image'])[$key]?>" required>
              <img src="<?= storage(json_decode($get['sec_image'])[$key]) ?>" alt="" class="w-25">
            </div>
            <div class="col">
              <input type="text" name="sec_heading[]" class="form-control" placeholder="Heading" value="<?= $value ?>" aria-label="First name" required>
            </div>
            <div class="col-5">
              <input type="file" name="sec_image[]" class="form-control form-control-sm py-2" required>
            </div>
            <div class="col-12 mt-3">
              <textarea class="form-control" name="sec_content[]" rows="5" required><?= json_decode($get['sec_content'])[$key] ?></textarea>
            </div>
          </div>
        <?php endforeach; ?>
        <div id="dynamicSection2">
        </div>
        <div class="text-end mt-3">
          <button class="btn-sm btn btn-primary" id="addSections2" type="button">Add Section</button>
        </div>
      </div>
      <div class="form-feild mt-3">
        <label class="text-white">Meta Title</label>
        <input type="text" class="form-control mt-2" required name="meta_title" value="<?= $get['meta_title'] ?>">
      </div>
      <div class="form-feild mt-3">
        <label class="text-white">Meta Description</label>
        <textarea class="form-control mt-2" rows="2" name="meta_description" required><?= $get['meta_description'] ?></textarea>
      </div>
      <div class="form-feild mt-3">
        <label class="text-white">Meta Keywords</label>
        <input type="text" class="form-control mt-2" name="meta_keyword" required value="<?= $get['meta_keywords'] ?>" placeholder="Hello, Hii, Bye, Byee">
      </div>
      <button type="submit" id="updateSingleIssue" name="updateSingleIssue" value="<?= $id ?>" class="d-none">Save Single Issue</button>
    </form>
  </div>
</div>
<script>
  $(document).ready(function() {
    $('#addSections2').click(function() {
      let div = $('.appendedItem2')[0]
      $(div).clone().appendTo('#dynamicSection2');
    })
    $('.removeSection').click(function() {
      $(this).parent().parent().remove();
    })

  })
</script>
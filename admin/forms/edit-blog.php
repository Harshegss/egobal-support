<?php
    $id = $_GET['editBlog'];
    $page = new Crud('blogs',"WHERE id = $id"); $edit = $page->get()[0];
?>
<div class="offcanvas offcanvas-end show text-bg-dark" style="width:700px" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasRightLabel">Edit Blogs</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        <label for="updateSingleBlog" class="btn btn-primary">Save</label>
    </div>
    
    <div class="offcanvas-body">
        <form action="app/blog_controller.php" method="POST" enctype="multipart/form-data">
            <div class="form-feild">
                <label class="text-white">Heading</label>
                <input type="text" class="form-control mt-2 fs-3" name="heading" value="<?=@$edit['heading']?>">
            </div>
            <div class="form-feild mt-3">
                <label class="text-white">Content</label>
                <textarea class="tinymce-editor" name="content"><?=@$edit['content']?></textarea>
            </div>
            <div class="form-feild mt-3">
                <label class="text-white">Choose Image</label><br>
                <img src="<?=@storage(@$edit['image'])?>" alt="" class="w-25">
                <input type="file" class="form-control mt-2" name="image[]">
            </div>
            <div class="form-feild mt-3">
                <label class="text-white">Meta Title</label>
                <input type="text" class="form-control mt-2" name="meta_title" value="<?=@$edit['meta_title']?>">
            </div>
            <div class="form-feild mt-3">
                <label class="text-white">Meta Description</label>
                <textarea class="form-control mt-2" rows="2" name="meta_description"><?=@$edit['meta_description']?></textarea>
            </div>
            <div class="form-feild mt-3">
                <label class="text-white">Meta Keywords</label>
                <input type="text" class="form-control mt-2" name="meta_keyword" value="<?=@$edit['meta_keyword']?>" placeholder="Hello, Hii, Bye, Byee">
            </div>
            <button type="submit" id="updateSingleBlog" name="updateBlog" value="<?=@$edit['id']?>" class="d-none">Add Blog</button>
        </form>
    </div>
</div>

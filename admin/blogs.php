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
        <div class="col-12 mb-2"><button class="btn d-button float-end" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Add New Blog</button></div>
        <?php foreach ($blogs as $blog) : ?>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body pt-4">
                        <div class="btn-group btn-group-sm position-absolute" onclick="window.location.href='parent.php?page=blogs&editBlog=<?= $blog['id'] ?>';" role="group" aria-label="Small button group" style="right:20px;">
                            <button type="button" class="btn btn-dark me-1">Edit Post</button>
                            <a href="app/blog_controller.php?remove_this_blog=<?= $blog['id'] ?>" class="btn btn-sm btn-danger" onclick="if (confirm('You really want to removethis blog?')){return true;}else{event.stopPropagation(); event.preventDefault();};">Remove</a>
                        </div>
                        <img src="<?= storage($blog['image']) ?>" class="w-100 rounded">
                        <form action="app/home_controller.php" method="POST" enctype="multipart/form-data">
                            <label><?= $blog['heading'] ?></label><br>
                            <?= str_replace(['<div>','</div>'],'',substr($blog['content'], 0, 150)) . '...' ?>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<!-- <div class="modal fade" id="addBlogModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Blog</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="app/blogcontroller.php" method="POST" enctype="multipart/form-data">
                    <div class="form-feild mt-3">
                        <label class="text-white">Heading</label>
                        <input type="text" class="form-control mt-2 fs-3" name="heading">
                    </div>
                    <div class="form-feild mt-3">
                        <label class="text-white">Content</label>
                        <textarea class="tinymce-editor" name="content"></textarea>
                    </div>
                    <div class="form-feild mt-3">
                        <label class="text-white">Choose Image</label>
                        <input type="file" class="form-control mt-2" name="image[]">
                    </div>
                    <div class="form-feild mt-3">
                        <label class="text-white">Meta Title</label>
                        <input type="text" class="form-control mt-2" name="meta_title">
                    </div>
                    <div class="form-feild mt-3">
                        <label class="text-white">Meta Description</label>
                        <textarea class="form-control mt-2" rows="3" name="meta_description"></textarea>
                    </div>
                    <div class="form-feild mt-3">
                        <label class="text-white">Meta Keywords</label>
                        <input type="text" class="form-control mt-2" name="meta_keyword" placeholder="Hello, Hii, Bye, Byee">
                    </div>
                    <button type="submit" id="addSingleBlog" name="addBlog" value="index_slide" class="d-none">Add Blog</button>
                </form>
            </div>
            <div class="modal-footer">

                <label for="addSingleBlog" class="btn bn-sm bg-light text-dark">Add Slider</label>
            </div>
        </div>
    </div>
</div> -->
<div class="offcanvas offcanvas-end text-bg-dark" style="width:700px" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasRightLabel">Add Blogs</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        <label for="addSingleBlog" class="btn btn-primary">Save</label>
    </div>

    <div class="offcanvas-body">
        <form action="app/blog_controller.php" method="POST" enctype="multipart/form-data">
            <div class="form-feild">
                <label class="text-white">Heading</label>
                <input type="text" class="form-control mt-2 fs-3" name="heading" value="">
            </div>
            <div class="form-feild mt-3">
                <label class="text-white">Content</label>
                <textarea class="tinymce-editor" name="content"></textarea>
            </div>
            <div class="form-feild mt-3">
                <label class="text-white">Choose Image</label><br>
                <input type="file" class="form-control mt-2" name="image[]">
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
            <button type="submit" id="addSingleBlog" name="addBlog" class="d-none">Add Blog</button>
        </form>
    </div>
</div>
<?php

if (isset($_GET['editBlog'])) {
    include 'forms/edit-blog.php';
}

?>
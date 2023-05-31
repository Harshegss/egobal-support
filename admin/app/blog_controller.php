<?php
require_once('vander.php');
if (isset($_POST['addBlog'])) {
    $add = new Crud('blogs');
    $add->column['heading'] = $_POST['heading'];
    $add->column['content'] = $_POST['content'];
    $add->column['image'] = storeImage($_FILES['image']);
    $add->column['slug'] = generateSeoURL($_POST['heading']);
    $add->column['meta_title'] = $_POST['meta_title'];
    $add->column['meta_description'] = $_POST['meta_description'];
    $add->column['meta_keyword'] = $_POST['meta_keyword'];
    $add->save();
    redirect_back();

} elseif (isset($_POST['updateBlog'])) {

    $id = $_POST['updateBlog'];
    $update = new Crud('blogs', "id = $id");
    $update->column['heading'] = $_POST['heading'];
    $update->column['content'] = $_POST['content'];
    if ($_FILES['image']['name'][0]  != '') {
        $update->column['image'] = storeImage($_FILES['image']);
    }
    $update->column['slug'] = generateSeoURL($_POST['heading']);
    $update->column['meta_title'] = $_POST['meta_title'];
    $update->column['meta_description'] = $_POST['meta_description'];
    $update->column['meta_keyword'] = $_POST['meta_keyword'];
    $update->update();
    redirect_back("&editBlog=$id");

} elseif (isset($_GET['remove_this_blog'])) {
    $id = $_GET['remove_this_blog'];
    $update = new Crud('blogs', "id = $id");
    $update->delete();
    redirect_back();
}

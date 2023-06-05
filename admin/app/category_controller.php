<?php
require_once 'vander.php';
if(isset($_POST['addCategory'])){
    $new = new Crud('category');
    $new->column['name'] = $_POST['name'];
    $new->column['image'] = storeImage($_FILES['image'],['svg','webp']);
    $new->column['slug'] = generateSeoURL($_POST['name']);
    $new->column['meta_title'] = $_POST['meta_title'];
    $new->column['meta_keywords'] = $_POST['meta_keywords'];
    $new->column['meta_description'] = $_POST['meta_description'];
    $new->save();
    redirect_back();
}
if(isset($_POST['updateCategory'])){
    $id = $_POST['updateCategory'];
    $update = new Crud('category', "id = $id");
    $update->column['name'] = $_POST['name'];
    if ($_FILES['image']['name'][0]  != '') {
        $update->column['image'] = storeImage($_FILES['image']);
    }
    $update->column['slug'] = generateSeoURL($_POST['name']);
    $update->column['meta_title'] = $_POST['meta_title'];
    $update->column['meta_keywords'] = $_POST['meta_keywords'];
    $update->column['meta_description'] = $_POST['meta_description'];
    $update->update();
    redirect_back("&edit=$id");
}
if(isset($_POST['addBrands'])){
    $new = new Crud('brands');
    $new->column['name'] = $_POST['name'];
    $new->column['image'] = storeImage($_FILES['image'],['svg']);
    $new->column['slug'] = generateSeoURL($_POST['name']);
    $new->column['categories'] = json_encode($_POST['categories']);
    $new->column['meta_title'] = $_POST['meta_title'];
    $new->column['meta_keywords'] = $_POST['meta_keywords'];
    $new->column['meta_description'] = $_POST['meta_description'];
    $new->save();
    redirect_back();
}
if(isset($_POST['updateBrands'])){
    $id = $_POST['updateBrands'];
    $update = new Crud('brands', "id = $id");
    $update->column['name'] = $_POST['name'];
    if ($_FILES['image']['name'][0]  != '') {
        $update->column['image'] = storeImage($_FILES['image']);
    }
    $update->column['slug'] = generateSeoURL($_POST['name']);
    $update->column['categories'] = json_encode($_POST['categories']);
    $update->column['meta_title'] = $_POST['meta_title'];
    $update->column['meta_keywords'] = $_POST['meta_keywords'];
    $update->column['meta_description'] = $_POST['meta_description'];
    $update->update();
    redirect_back();
}
if(isset($_GET['remove_this_category'])){
    $hello = $_GET['remove_this_category'];
    $home = new Crud('category', "id = $hello");
    $home->delete();
    redirect_back();
}
if(isset($_GET['remove_this_brand'])){
    $hello = $_GET['remove_this_brand'];
    $home = new Crud('brands', "id = $hello");
    $home->delete();
    redirect_back();
}
if(isset($_POST['addModel'])){
    $new = new Crud('models');
    $new->column['name'] = $_POST['name'];
    $new->column['models'] = json_encode(explode(PHP_EOL, $_POST['models']));
    $new->column['brand_id'] = $_POST['brand'];
    $new->column['meta_title'] = $_POST['meta_title'];
    $new->column['meta_keywords'] = $_POST['meta_keywords'];
    $new->column['meta_description'] = $_POST['meta_description'];
    $new->save();
    redirect_back();
}
if(isset($_POST['updateModel'])){
    print_r($_POST);
    $update = new Crud('models', "id = ".$_POST['updateModel']);
    $update->column['name'] = $_POST['name'];
    $update->column['slug'] = generateSeoURL($_POST['name']);
    $update->column['models'] = json_encode(explode(PHP_EOL, $_POST['models']));
    $update->column['brand_id'] = $_POST['brand'];
    $update->column['meta_title'] = $_POST['meta_title'];
    $update->column['meta_keywords'] = $_POST['meta_keywords'];
    $update->column['meta_description'] = $_POST['meta_description'];
    $update->update();
    redirect_back("&edit=".$_POST['updateModel']);
}
if(isset($_GET['remove_this_model'])){
    $hello = $_GET['remove_this_model'];
    $home = new Crud('models', "id = $hello");
    $home->delete();
    redirect_back();
}
if(isset($_POST['addIssue'])){
    $new = new Crud('issues');
    $new->column['name'] = $_POST['name'];
    $new->column['image'] = storeImage($_FILES['image'],['svg']);
    $new->column['slug'] = generateSeoURL($_POST['name']);
    $new->column['series_id'] = $_POST['series'];
    $new->save();
    redirect_back();
}
if(isset($_POST['updateIssue'])){
    $update = new Crud('issues', "id =".$_POST['updateIssue']);
    $update->column['name'] = $_POST['name'];
    if ($_FILES['image']['name'][0]  != '') {
        $update->column['image'] = storeImage($_FILES['image']);
    }
    $update->column['slug'] = generateSeoURL($_POST['name']);
    $update->column['series_id'] = $_POST['series'];
    $update->update();
    redirect_back("&edit=".$_POST['updateIssue']);
}
if(isset($_GET['remove_this_issue'])){
    $hello = $_GET['remove_this_issue'];
    $home = new Crud('issues', "id = $hello");
    $home->delete();
    redirect_back();
}
?>
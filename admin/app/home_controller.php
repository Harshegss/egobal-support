<?php
require_once('vander.php');

if (isset($_POST['topBanner'])) {

    $home = new Crud('hcip', "id = '1'");
    $home->column['heading'] = $_POST['heading'];
    if ($_FILES['image']['name'][0]  != '') {
        $home->column['image'] = storeImage($_FILES['image']);
    }
    $home->update();
    redirect_back();

} elseif (isset($_POST['addHcip'])) {
    $page = $_POST['addHcip'];
    
    $home = new Crud('hcip');
    if (isset($_POST['heading'])) {
        $home->column['heading'] = $_POST['heading'];
    }
    if ($_FILES['image']['name'][0]  != '') {
        $home->column['image'] = storeImage($_FILES['image'],['svg']);
    }
    if (isset($_POST['sub_heading'])) {
        $home->column['sub_heading'] = $_POST['sub_heading'];
    }
    if (isset($_POST['content'])) {
        $home->column['content'] = $_POST['content'];
    }
    if (isset($_POST['link'])) {
        $home->column['link'] = $_POST['link'];
    }
    if (isset($_POST['link_text'])) {
        $home->column['link_text'] = $_POST['link_text'];
    }
    $home->column['page'] = $_POST['addHcip'];
    $home->save();

    redirect_back();
    
} elseif (isset($_POST['updateHcip'])) {

    $hello = $_POST['updateHcip'];

    $home = new Crud('hcip', "id = $hello");
    if (isset($_POST['heading'])) {
        $home->column['heading'] = $_POST['heading'];
    }
    if ($_FILES['image']['name'][0]  != '') {
        $home->column['image'] = storeImage($_FILES['image'],['svg']);
    }
    if (isset($_POST['sub_heading'])) {
        $home->column['sub_heading'] = $_POST['sub_heading'];
    }
    if (isset($_POST['content'])) {
        $home->column['content'] = $_POST['content'];
    }
    if (isset($_POST['link'])) {
        $home->column['link'] = $_POST['link'];
    }
    if (isset($_POST['link_text'])) {
        $home->column['link_text'] = $_POST['link_text'];
    }
    $home->update();
    redirect_back();
} elseif (isset($_GET['remove_index_slide'])) {

    $hello = $_GET['remove_index_slide'];
    $home = new Crud('hcip', "id = $hello");
    $home->delete();
    redirect_back();
}

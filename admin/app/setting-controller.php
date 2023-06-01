<?php
require_once 'vander.php';

if (isset($_POST['saveSettting'])) {

    $name = new Crud('setting', 'id = 1');
    if ($_FILES['logo']['name'][0]  != '') {
        $name->column['logo'] = storeImage($_FILES['logo']);
    }
    if ($_FILES['fevicon']['name'][0]  != '') {
        $name->column['fevicon'] = storeImage($_FILES['fevicon']);
    }
    $name->column['email'] = $_POST['email'];
    $name->column['phone'] = $_POST['phone'];
    $name->column['header'] = $_POST['header'];
    $name->column['footer'] = $_POST['footer'];
    $name->column['meta_title'] = $_POST['meta_title'];
    $name->column['meta_description'] = $_POST['meta_description'];
    $name->column['meta_keywords'] = $_POST['meta_keywords'];

    $name->update();
    redirect_back();
}

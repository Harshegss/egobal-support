<?php
require_once('vander.php');

if (isset($_POST['addSingleIssue'])) {

    $add = new Crud('single_issue');
    $add->column['issue_id'] = $_POST['addSingleIssue'];
    $add->column['heading'] = $_POST['heading'];
    $add->column['content'] = $_POST['content'];
    $add->column['sec_heading'] = json_encode($_POST['sec_heading']);
    $add->column['sec_content'] = json_encode($_POST['sec_content']);
    $add->column['sec_image'] = json_encode(storeImage($_FILES['sec_image']));
    $add->column['slug'] = generateSeoURL($_POST['heading']);
    $add->column['meta_title'] = $_POST['meta_title'];
    $add->column['meta_keywords'] = $_POST['meta_keyword'];
    $add->column['meta_description'] = $_POST['meta_description'];
    $add->save();
    redirect_back();

} elseif (isset($_POST['issue_id'])) {

    $issue_id = $_POST['issue_id'];
    $issue = new Crud('single_issue', "Where issue_id = $issue_id");
    echo json_encode($issue->get()[0]);

}elseif (isset($_POST['updateSingleIssue'])) {
    $id = $_POST['updateSingleIssue'];
    $add = new Crud('single_issue', "id = $id");
    $add->column['issue_id'] = $_POST['updateSingleIssue'];
    $add->column['heading'] = $_POST['heading'];
    $add->column['content'] = $_POST['content'];
    $add->column['sec_heading'] = json_encode($_POST['sec_heading']);
    $add->column['sec_content'] = json_encode($_POST['sec_content']);
 
    if($_FILES['sec_image']['name'][0] != null){
        $add->column['sec_image'] = json_encode(storeImage($_FILES['sec_image']));
    }else{
        $add->column['sec_image'] = json_encode($_POST['sec_image_text']);
    }
    $add->column['slug'] = generateSeoURL($_POST['heading']);
    $add->column['meta_title'] = $_POST['meta_title'];
    $add->column['meta_keywords'] = $_POST['meta_keyword'];
    $add->column['meta_description'] = $_POST['meta_description'];
    $add->update();
    redirect_back();
}
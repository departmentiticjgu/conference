<?php
require_once "koneksi.php";

$action = $_GET['action'];
switch ($action) {
    // ACTION TOPIC & SUB-TOPIC
    case 'insert_topic':
        if($conference->CreateTopic($_POST['main_topic_id'], $_POST['name'])){
            header('location:data_topic.php');
        }
    break;

    case 'update_topic':
        if($conference->update_user($_POST['main_topic_id'], $_POST['id'], $_POST['name'])){
            header('location:data_topic.php');
        }
        break;

    case 'delete_topic':
        if($conference->delete_user($_GET['id'])) {
            header('location:data_topic.php');
        }
        break;

    case 'insert_sub': 
        if($conference->CreateSub($_POST['topic_id'], $_POST['name'])){
            header('location:data_sub.php');
        }
    
        break;

    case 'update_sub':
        if($conference->UpdateSub($_POST['id'], $_POST['topic_id'], $_POST['name'])){
            header('location:data_sub.php');
        }
        break;

    case 'delete_sub':
        if($conference->DeleteSub($_GET['id'])) {
            header('location:data_sub.php');
        }
        break;


    // ACTION CO-HOST
    case 'insert_host':
        $imageName = $_FILES['image']['name'];
        $imageTemp = $_FILES['image']['tmp_name'];
        $uploadDir = 'image/';

        move_uploaded_file($imageTemp, $uploadDir . $imageName);
    
        if ($conference->CreateHost($imageName, $_POST['name'])) {
        header('location:data_host.php');
        }
        break;

   case 'update_host':
        $imageName = $_FILES['image']['name'];
        $imageTemp = $_FILES['image']['tmp_name'];
        $uploadDir = 'image/';

        // Jika gambar baru ada, upload
        if (!empty($imageName)) {
            move_uploaded_file($imageTemp, $uploadDir . $imageName);
        } else {
            $imageName = null;
        }

        if ($conference->UpdateHost($_POST['id'], $imageName, $_POST['name'])) {
            header('location:data_host.php');
        }
        break;


    case 'delete_host':
        if($conference->DeleteHost($_GET['id'])) {
            header("location: data_host.php");
        }
        break;

    // ACTION EDITORIAL BOARD
    case 'insert_board':
        if($conference->CreateBoard($_POST['name'])){
            header("location: data_board.php");
        }
        break;

    case 'update_board':
        if($conference->UpdateBoard($_POST['id'], $_POST['name'])){
            header("location: data_board.php");
        }
        break;
    
    case 'delete_board':
        if($conference->DeleteBoard($_GET['id'])) {
            header("location: data_board.php");
        }
        break;

    // ACTION ASSOCIATE EDITORS

    case 'insert_associate':
        if($conference->CreateAssociate($_POST['name'])){
            header("location: data_associate.php");
        }
        break;

    case 'update_associate':
        if($conference->UpdateAssociate($_POST['id'], $_POST['name'])){
            header("location: data_associate.php");
        }
        break;
    
    case 'delete_associate':
        if($conference->DeleteAssociate($_GET['id'])) {
            header("location: data_associate.php");
        }
        break;

    // ACTION CHIEF EDITORS

    case 'insert_chief':
        if($conference->CreateChief($_POST['name'], $_POST['title'], $_POST['university'])){
            header("location: data_chief.php");
        }
    break;

    case 'update_chief':
        if($conference->UpdateChief($_POST['id'], $_POST['name'], $_POST['title'], $_POST['university'])){
            header("location: data_chief.php");
        }
        break;
    
    case 'delete_chief':
        if($conference->DeleteChief($_GET['id'])) {
            header("location: data_chief.php");
        }
        break;

    // ACTION ADMIN
    case 'insert_admin':
        $imageName = $_FILES['image']['name'];
        $imageTemp = $_FILES['image']['tmp_name'];
        $uploadDir = 'image/';
    
        move_uploaded_file($imageTemp, $uploadDir . $imageName);
    
        $hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
        if ($conference->CreateAdmin(
            $_POST['username'],
            $_POST['full_name'],
            $_POST['no_hp'],
            $_POST['email'],
            $hashedPassword,
            $imageName
        )) {
            header('location:data_admin.php');
        }
        break;
    

    case 'update_admin':
        $imageName = $_FILES['image']['name'];
        $imageTemp = $_FILES['image']['tmp_name'];
        $uploadDir = 'image/';
        
        if (!empty($imageName)) {
            move_uploaded_file($imageTemp, $uploadDir . $imageName);
        } else {
            $imageName = null;
        }
        
        // Jika password tidak kosong, hash ulang, jika tidak, abaikan
        $password = !empty($_POST['password']) ? password_hash($_POST['password'], PASSWORD_DEFAULT) : null;
        
        if ($conference->UpdateAdmin(
            $_POST['id'],
            $_POST['username'],
            $_POST['full_name'],
            $_POST['no_hp'],
            $_POST['email'],
            $password,
            $imageName
        )) {
            header('location:data_admin.php');
        }
        break;
        
    
    case 'delete_admin':
        if($conference->DeleteAdmin($_GET['id'])) {
            header("location: data_admin.php");
        }
        break;

}
?>
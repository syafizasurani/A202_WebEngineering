<?php
session_start();
$mysqli = new mysqli('localhost', 'root', '', 'edu-national') or die(mysqli_error($mysqli));

$id = 0;
$update = false;
$num = '';
$university = '';
$description = '';
$state = '';

if(isset($_POST['save'])){
    $num = $_POST['num'];
    $university = $_POST['university'];
    $description = $_POST['description'];
    $state = $_POST['state'];

    $mysqli->query("INSERT INTO tbl_university (num, university, description, state) 
    VALUES ('$num', '$university', '$description', '$state')") 
    or die($mysqli->error);

    $_SESSION['message'] = "University Info Successfully Saved";
    $_SESSION['msg_type'] = "success";

    header('location: manage_uni.php');
}

if(isset($_GET['delete'])){
    $id = $_GET['delete'];

    $mysqli->query("DELETE FROM tbl_university WHERE id=$id") 
    or die($mysqli->error);

    $_SESSION['message'] = "University has been deleted";
    $_SESSION['msg_type'] = "danger";

    header('location: manage_uni.php');
}

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM tbl_university WHERE id=$id") 
    or die($mysqli->error);
    if(count(array($result)) == 1){
        $row = $result->fetch_array();
        $num = $row['num'];
        $university = $row['university'];
        $description = $row['description'];
        $state = $row['state'];
    }
}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $num = $_POST['num'];
    $university = $_POST['university'];
    $description = $_POST['description'];
    $state = $_POST['state'];

    $mysqli->query("UPDATE tbl_university SET num='$num', university='$university', description='$description', 
    state='$state' WHERE id='$id'") 
    or die($mysqli->error);

    $_SESSION['message'] = "University info has been updated";
    $_SESSION['msg_type'] = "warning";

    header('location: manage_uni.php');
}

?>
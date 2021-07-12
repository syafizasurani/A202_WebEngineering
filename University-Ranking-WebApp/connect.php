<?php
session_start();
$mysqli = new mysqli('localhost', 'root', '', 'edu-national') or die(mysqli_error($mysqli));

$id = 0;
$update = false;
$year = '';
$rank = '';
$uni_name = '';
$overall_score = '';
$academic_rep = '';
$employee_rep = '';
$student_ratio = '';

if(isset($_POST['save'])){
    $year = $_POST['year'];
    $rank = $_POST['rank'];
    $uni_name = $_POST['uni_name'];
    $overall_score = $_POST['overall_score'];
    $academic_rep = $_POST['academic_rep'];
    $employee_rep = $_POST['employee_rep'];
    $student_ratio = $_POST['student_ratio'];

    $mysqli->query("INSERT INTO ranking (year, rank, uni_name, overall_score, academic_rep, employee_rep, student_ratio) 
    VALUES ('$year', '$rank', '$uni_name', '$overall_score', '$academic_rep', '$employee_rep', '$student_ratio')") 
    or die($mysqli->error);

    $_SESSION['message'] = "New Ranking Successfully Saved";
    $_SESSION['msg_type'] = "success";

    header('location: addnew.php');
}

if(isset($_GET['delete'])){
    $id = $_GET['delete'];

    $mysqli->query("DELETE FROM ranking WHERE id=$id") 
    or die($mysqli->error);

    $_SESSION['message'] = "Ranking has been deleted";
    $_SESSION['msg_type'] = "danger";

    header('location: addnew.php');
}

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM ranking WHERE id=$id") 
    or die($mysqli->error);
    if(count(array($result)) == 1){
        $row = $result->fetch_array();
        $year = $row['year'];
        $rank = $row['rank'];
        $uni_name = $row['uni_name'];
        $overall_score = $row['overall_score'];
        $academic_rep = $row['academic_rep'];
        $employee_rep = $row['employee_rep'];
        $student_ratio = $row['student_ratio'];
    }
}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $year = $_POST['year'];
    $rank = $_POST['rank'];
    $uni_name = $_POST['uni_name'];
    $overall_score = $_POST['overall_score'];
    $academic_rep = $_POST['academic_rep'];
    $employee_rep = $_POST['employee_rep'];
    $student_ratio = $_POST['student_ratio'];

    $mysqli->query("UPDATE ranking SET year='$year', rank='$rank', uni_name='$uni_name', 
    overall_score='$overall_score', academic_rep='$academic_rep', employee_rep='$employee_rep', 
    student_ratio='$student_ratio' WHERE id='$id'") 
    or die($mysqli->error);

    $_SESSION['message'] = "Ranking has been updated";
    $_SESSION['msg_type'] = "warning";

    header('location: addnew.php');
}

?>
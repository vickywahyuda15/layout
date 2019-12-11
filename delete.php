<?php 
include 'config.php';
 
$id = $_GET['id'];

mysqli_query($connect,"DELETE FROM student WHERE id='$id'");
 
header("location:view.php");
 
?>
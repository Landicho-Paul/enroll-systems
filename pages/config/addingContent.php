<?php

session_start();
include "dbcon.php";


$size = $_POST['sizes'];
$title = $_POST['title'];
$caption = $_POST['caption'];
$id = $_POST['id'];

$sql = "UPDATE tb_contenthomepage SET sizes = '$size', title = '$title' , caption = '$caption' , color = $color ToHome = 1 WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    $_SESSION['alert'] = '<div class="alert alert-success" role="alert">
    THE FILE '. $_FILES["image"]["name"] .' HAS BEEN UPLOADED TO HOME.</div>';
    header("Location: ../dashboardcontent/ManageElem.php");
  
} else {
  echo "failed";
  
}



?>
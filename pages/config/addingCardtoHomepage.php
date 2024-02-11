<?php

session_start();
include "dbcon.php";


$image = $_POST['image'];
$title = $_POST['title'];
$caption = $_POST['caption'];
$id = $_POST['id'];

$sql = "UPDATE tb_cardHomepage SET img = '$image', title = '$title' , caption = '$caption' , ToHome = 1 WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    $_SESSION['alert'] = '<div class="alert alert-success" role="alert">
    THE FILE '. $_FILES["image"]["name"] .' HAS BEEN UPLOADED.</div>';
    header("Location: ../dashboardcontent/ManageElem.php");
  
} else {
  echo "failed";
  
}



?>

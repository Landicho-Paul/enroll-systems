<?php

session_start();
include "dbcon.php";

$Sname = $_POST['schoolName'];
$location = $_POST['schoolAddress'];
$email = $_POST['schoolEmail'];
$Mnumber = $_POST['schoolMobilePhone'];
$Tnumber = $_POST['schoolTelePhone'];
$description = $_POST['schoolDescriptiom'];


$sql = "UPDATE tb_schoolprofile SET SchoolName = '$Sname', Lokation = '$location' , Email = '$email' , MobileNumber = '$Mnumber' , TelephoneNumber = '$Tnumber'  , Discription = '$description'  , ToHome = 1 WHERE id = 1";

if ($conn->query($sql) === TRUE) {
    $_SESSION['alert'] = '<div class="alert alert-success" role="alert">
    THE FILE '. $_FILES["image"]["name"] .' HAS BEEN UPLOADED.</div>';
    header("Location: ../dashboardcontent/ManageElem.php");
  
} else {
  echo "failed";
  
}
?>
<?php

session_start();
include "dbcon.php";
$id = $_POST['id'];
$delete = $_POST['delete'];
$image = $_POST['image'];

$path = "../../assets/img/cms-image$image";
echo $path;

if(!unlink($path)){
  echo "You have an error";
}

$sql = "DELETE FROM $delete WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    $_SESSION['alert'] = '<div class="alert alert-danger" role="alert">
    THE CARD IS DELETED.</div>';
    header("Location: ../dashboardcontent/ManageElem.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>
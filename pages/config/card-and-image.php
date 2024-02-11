<?php

session_start();
include "dbcon.php";

$image = $_FILES['image']['name'];
$title = $_POST['title'];
$caption = $_POST['caption'];

$sql = "INSERT INTO tb_cardHomepage (img, title, caption, ToHome)
VALUES ('$image', '$title', '$caption', 0)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit2"])) {
    $uploadDir = '../../assets/img/cms-image/card-and-imag/'; // Create a folder named 'uploads' in the same directory as this script

    // Check if the folder exists, create it if not
    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $targetFile = $uploadDir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if the file is an image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check === false) {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check if the file already exists
    if (file_exists($targetFile)) {
        echo "Sorry, the file already exists.";
        $uploadOk = 0;
    }

    // Check file size (you can adjust the size as needed)
    if ($_FILES["image"]["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow only certain file formats (you can customize the allowed types)
    $allowedTypes = array("jpg", "jpeg", "png", "gif");
    if (!in_array($imageFileType, $allowedTypes)) {
        echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        // Move the uploaded file to the specified directory
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
            

        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    $_SESSION['alert'] = '<div class="alert alert-success" role="alert">
			 THE FILE '. $_FILES["image"]["name"] .' HAS BEEN UPLOADED.</div>';
    header("Location: ../dashboardcontent/ManageElem.php");

} else {
    // Redirect to the form if accessed directly without submitting
    header("Location: index.html");
    exit();
}
?>

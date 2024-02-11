<?php
session_start();
    include "dbcon.php";
    
    $title = $_POST['title'];
    $caption = $_POST['caption'];
    $size = $_POST['size'];
    $color = $_POST['color'];
    

    echo $title , $caption , $size , $color;
    
    
    $sql = "INSERT INTO tb_contenthomepage (sizes,title,caption,color)
    VALUES ('$size','$title','$caption','$color')";
    
    if ($conn->query($sql) === TRUE) {
        $_SESSION['alert'] = '<div class="alert alert-success" role="alert">
        CONTENT SUCCESSFULLY ADDED.</div>';
        header("Location: ../dashboardcontent/ManageElem.php");
        
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>
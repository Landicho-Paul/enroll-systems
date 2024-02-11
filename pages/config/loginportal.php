<?php
include "dbcon.php";
session_start();

if (isset($_POST['submit']))
{
    $username = $_POST['username'];
    $pass = $_POST['pass'];

    // Using prepared statements to prevent SQL injection
    $sql = "SELECT username, pass, verified, user_id FROM tb_userdata WHERE username = ? AND  pass = BINARY ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $pass);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['status'];

        if(strpos($username, "@student"))
        {
            if($row['verified'] == 0)
            {
                $_SESSION['status'] = "pending";
                header("Location:  ../dashboardcontent/dashboard.php");
                exit(); 
                
            }
            else
            {
                $_SESSION['status'] = $row['user_id'];
                header("Location:  ../dashboardcontent/dashboard.php");
                exit(); 
            }
        }
        else if(strpos($username, "@admin"))
        {
            $_SESSION['status'] = "admin";
            header("Location: ../dashboardcontent/dashboard.php");
            exit(); // Ensure script stops execution after redirect
        }
    } else {
        // Display danger alert if login fails
        $_SESSION['status'] = "error";
        header("Location: ../login.php");
        exit(); 
    }
    $stmt->close();
}

?>
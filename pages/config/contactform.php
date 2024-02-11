<?php
include "dbcon.php";
session_start();

if (isset($_POST['submit']))
{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $send_message = $conn->prepare("INSERT INTO tb_messages (name, email, subject, message) VALUES (?, ?, ?, ?)");
  $send_message->bind_param("ssss", $name, $email, $subject, $message);

  if($send_message->execute())
  {
    echo "Message sucessfully sended";
  }
  else 
  {
    echo "Not sucessfully sended";
  }

}

?>
<?php
include 'connect.php';
 if (isset($_POST['edit'])) {
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $sname = $_POST['sname'];
  $semail = $_POST['semail'];
  $message = $_POST['message'];
  $id = $_POST['hidden'];


  if (empty($name) || empty($subject) || empty($sname) || empty($semail) || empty($message)) {
    $error = "all fields are required";
  }else {
        $update = "UPDATE newsdata SET cname='$name', subject='$subject', sname='$name', semail='$semail', content='$message' WHERE id='$id'";
        $result = $conn->query($update);

        if ($update) {
          header("Location: ../admin/newsletter-list.php");
        }else {
          $error = "Error to the database";
        }
  }
}

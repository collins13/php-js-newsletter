<?php
include 'connect.php';

if (isset($_POST['submit'])) {
$subject = $_POST['subject'];
$semail = $_POST['semail'];
$sname = $_POST['sname'];
$content = $_POST['content'];
$name = $_SESSION['name'];

if (isset($_POST['blue'])) {
  $temp = $_POST['blue'];
}elseif (isset($_POST['black'])) {
  $temp = $_POST['black'];
}elseif (empty($_POST['blue']) || empty($_POST['black'])) {
  $error = "please choose a template";
}
if (empty($subject) || empty($semail) || empty($sname) || empty($content)) {
$error = "Please fill all the required fields needed";
}else {
$subject =  mysqli_real_escape_string($conn, $subject);
$semail =  mysqli_real_escape_string($conn, $semail);
$sname =  mysqli_real_escape_string($conn, $sname);
$content =  mysqli_real_escape_string($conn, $content);

$sql =  "INSERT INTO newsdata(subject, semail, sname, cname, content, temp_name, time, status)
                       VALUES('$subject', '$semail', '$sname', '$name', '$content', '$temp', now(), 'active')";

  $result = $conn->query($sql);

  if ($sql) {
  $success = "success";
  }
}
}


 ?>

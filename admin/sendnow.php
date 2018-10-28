<?php
include '../scripts/connect.php';
error_reporting(0);

if (isset($_POST['send'])) {
    $id =_GET['nid'];

    $sql = "SELECT * FROM newsdata WHERE id='$id' LIMIT 1";
    $result = $conn->query($sql);

    $row = mysqli_fetch_assoc($result);

   for ($x=0; $x <count($_POST) ; $x++) {

     $to = $_POST["email$x"];
     $unsubscribeid = $_POST["unsubscribeid$x"];
     $body = $content.'<img src="hhtp://localhost/newslatter/trackemail.php?eid='.$unsubscribeid.'">';

     $headers = "From: ".$semail."\r\n ";
     $headers .= "Reply-To: ".$semail." \r\n ";
     $headers .= "MIME-Version 1.0:" . "\r\n";
     $headers .= "Content-Type:text/html;charset=iso-8859-1" . "\r\n";
     mail($to, $subject, $body, $headers);

   }
}

 ?>

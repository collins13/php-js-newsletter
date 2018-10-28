<?php
if (isset($_GET['eid'])) {
  $id = $_GET['eid'];
  include '../scripts/connect.php';
  $sql = "UPDATE guestbook SET email_read='1' WHERE id='$id' LIMIT 1";
  $result = $conn->query($sql);
}

 ?>

<?

if (isset($_GET['id'])) {
$id = $_GET['id'];

$sql = "SELECT * FROM members WHERE id='$id'";
 $result = $conn->query($sql);


 while ($row1 = mysqli_fetch_assoc($result)):

  $name = $row1['name'];
  $email = $row1['email'];
  $status = $row1['status'];
  $id = $row1['id'];
endwhile;

}

?>

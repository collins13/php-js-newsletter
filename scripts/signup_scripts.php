<?php
 include 'scripts/connect.php';


 if (isset($_POST['submit'])) {
 	$name = $_POST['name'];
 	$email = $_POST['email'];

 	 if (empty($name) || empty($email)) {
 	 	$error = "all fields are required";
 	 }else{
 	 	$sql = "INSERT INTO members(name, email, signup_date, status)
 	 	VALUES('$name', '$email', now(), '1')";
 	 	 $result = $conn->query($sql);

 	 	 if ($sql) {
 	 	 $success = "congratulations";


 	 	 }
 	 }

 }

?>

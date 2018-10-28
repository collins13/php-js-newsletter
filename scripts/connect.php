<?php
$conn = mysqli_connect("localhost", "root", "", "chef");


if (!$conn) {
	echo "connection error".mysqli_connect_error();
}

?>
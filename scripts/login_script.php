 <?php session_start(); ?>
<?php
 include '../scripts/connect.php';

 include 'includes/header.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $count = 0;

    $sql = "SELECT * FROM admin WHERE email='$email' && name ='$name' && password='$password'";
    $result = $conn->query($sql);
    $count = mysqli_num_rows($result);

    if ($count == 0 ) {
        echo "<div class='error'>Invalid Reg No or Password</div>";

    ?>
    <?php
}else{
  $_SESSION['name'] = $name;

    ?>
    <script type="text/javascript">
         window.location="index.php";
    </script>
    <?php
    }
}

?>

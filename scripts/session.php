<?php
session_start();
if (!isset($_SESSION['name'])) {
    ?>

    <script type="text/javascript">
        window.location="login.php";
    </script>
    <?php
 }
?>

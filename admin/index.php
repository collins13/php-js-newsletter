<?php
session_start();
/*if (!isset($_SESSION['name'])) {
    ?>

    <script type="text/javascript">
        window.location="login.php";
    </script>
    <?php
 }*/
?>
<?php include '../scripts/connect.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>newslatter</title>

  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/news.css">
  <link rel="stylesheet" type="text/css" href="css/admin.css">
   <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../font-awesome-4.7.0/css/font-awesome.min.css" >
  <link rel="stylesheet" type="text/css" href="../font-awesome-4.7.0/css/font-awesome.css">
</head>
<body>

	 <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">NEWSLATTER</a>
        </div>
        <div class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" role="form">
            <div class="form-group">
              <input type="text"class="form-control"  value="<?php echo $_SESSION['name']; ?>" readonly="" ?>">
            </div>
            <a href="logout.php" class="btn btn-danger">Logout</a>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </div>

<div class="container-fluid">
  <div id="bg">
  </div>
	<form class="col-lg-4" style="float: right;">
		<table class="table">
			<tr>
				<td>
					<input type="tetx" name="search" placeholder="search" class="form-control">
				</td>
				<td>
					<input type="submit" name="submit" value="search" class="btn btn-success" >
				</td>
			</tr>
		</table>
	</form>
	<div class="clearfix"></div>
	<p><br/></p>

  <?php

  if (isset($_GET['id']) && isset($_GET['action']) && $_GET['action'] == 'delete') {
  $id = $_GET['id'];
  $sql = "DELETE FROM members WHERE id='$id' LIMIT 1";
  $delete = $conn->query($sql);

  if ($delete) {
  header("Location: index.php");
  }

}
  ?>
  <div class="container-fluid">
    <div class="row content">
        <?php include 'includes/sidebar.php'; ?>

      <div class="col-sm-10">

        <div class="panel panel-info">
         <div class="panel-heading h2">ADMIN PANEL</div>
           <div class="panel-body" style="width:100%;">

             <div id="selectallusers">
                   <?php
                    $sql = "SELECT * FROM members ORDER BY id DESC";
                     $result = $conn->query($sql);

                     ?>
               <table class="table table-hover table-striped table-borderd table-responsive">
                 <tr align="left">
                    <th>#</th>
                    <th>Email</th>
                    <th>Name</th>
                    <th>Subscription Status</th>
                    <th>Subscribed Date</th>
                    <th>Action</th>
                 </tr>
                 <?php while($row = mysqli_fetch_assoc($result)) : ?>

                   <?php $status = $row['status'];?>
                    <?php
                   if ($status == '1') {
                     $status = 'subscribed';
                   }elseif ($status == '0') {
                    $status = 'Unsubscribed';
                   }

                    ?>
                <tr>
                  <td><?php echo $row['id']; ?></td>
                  <td><?php echo $row['email']; ?></td>
                  <td><?php echo $row['name']; ?></td>
                  <td><?php echo $status; ?></td>
                  <td><?php echo $row['signup_date']; ?></td>
                  <td><a href="edit-users.php?id=<?=$row['id']; ?>" class="btn btn-info">Edit</a> |
                  <a href="index.php?id=<?=$row['id']; ?> &&action=delete" class="btn btn-danger"> Delete</a></td>
                </tr>
  <?php endwhile; ?>
               </table>
             </div>

           </div>
           <div class="panel-footer"> &copy 2018</div>
       </div>
      </div>
    </div>
  </div>

  <footer class="container-fluid">
    <p>Footer Text</p>
  </footer>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>News Letter</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/news.css">
	  <link rel="stylesheet" type="text/css" href="css/admin.css">
   <link rel="stylesheet" href="../css/bootstrap.css">

  <link rel="stylesheet" type="text/css" href="../font-awesome-4.7.0/css/font-awesome.min.css" >
  <link rel="stylesheet" type="text/css" href="../font-awesome-4.7.0/css/font-awesome.css">
	<script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/popper/popper.min.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

	<script type="text/javascript">
	$(function(){
    $('#edit-newsletter').click(function(){
			$('#edit-form').slideToggle(700);
			return false;
		});

	});
	</script>
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
              <input type="text"class="form-control" readonly value="<?php echo $_SESSION['name'];  ?>">
            </div>
            <a href="logout.php" class="btn btn-danger">Logout</a>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
<p><br></p>

<?php
include 'scripts/signup_scripts.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title> Chef Juma NewsNatter</title>
	<link rel="stylesheet" type="text/css" href="css/news.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<!--<script type="text/javascript">
		function validate(){
			if (window.XMLHttpRequest) {
				  var xmlhttp = new window.XMLHttpRequest();
			}else{
				 xmlhttp =  new ActiveXObject('microsoft',XMLHTTP);
			}

			xmlhttp.onreadystatechange = function(){
				if (xmlhttp.readystate == '4' && xmlhttp.status == '200' ) {
					document.getElementById('error').innerHTML = xmlhttp.responseText;
				}
			}
			var name = document.getElementById('name').value;
			var email = document.getElementById('email').value;

			var parameters = 'name='+name+'&email='+email;

			xmlhttp.open('POST', 'scripts/signup_scripts.php', true);
			xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

			xmlhttp.send(parameters);
		}
	</script>-->
</head>
<body>
	<div class="row">
		<div class="col-md-4">
		</div>
<div class="col-md-4 form">
<h2>SignUp on our NewsLatter</h2>
<p>you can subscribe to our newslatter to receive our latest updates</p>


<form action="signup.php" method="POST">
	<?php
	if (isset($error)){echo '<div class="error">'.$error.'</div>';}
	if(isset($success)){echo'<div class="success">'.$success.'</div>';}
	 ?>
	<div class="form-group">
		<label for="name">UserName</label>
		<input type="text" name="name" placeholder="UserName" class="form-control" style="width: 300px;">
	</div>

	  <div class="form-group">
		<label for="email">Email</label>
		<input type="text" name="email" placeholder="Email" class="form-control" style="width: 300px;">
	</div>

	<input type="submit" name="submit" class="btn btn-success" value="SignUp">
</form>
</div>
<div class="col-md-4">
</div>

</div>

</body>
</html>

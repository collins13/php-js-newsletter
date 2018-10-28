
<?php
session_start();
include 'includes/header.php';
include '../scripts/connect.php';
include '../scripts/newsletter-submit.php';
?>

<div class="container-fluid">
  <div id="bg">
  </div>
	<div class="clearfix"></div>
	<p><br/></p>

  <div class="container-fluid">
    <div class="row content">
        <?php include 'includes/sidebar.php'; ?>

      <div class="col-sm-9">

        <div class="panel panel-info">
         <div class="panel-heading h2">ADMIN PANEL</div>
           <div class="panel-body">

             <form action="newsletter.php" method="POST">
         <div id="mainsection">
           <h3>Create a Newsletter</h3>
           <?php if(isset($error)){echo '<div id="error">'.$error.'</div>';} ?>
           <?php if(isset($success)){echo '<div id="success">'.$success.'</div>';} ?>

         <div id="form-elements1">
         <label class="checkbox-inline">
          <input type="checkbox" name="blue" value="blue">Blue-template
         </label>
       </div>
       <div id="form-elements1">
       <label class="checkbox-inline">
         <input type="checkbox" name="black" value="black">Black-template
       </label>
     </div>
       <div class="clear"></div>
      <div class="row">
       <div class="col-xs-3 form-group" id="form-elements">
          <label for="subject">Subject</label>
         <input type="text" name="subject" class="form-control" id="subject">
       </div>
       <div class="col-xs-3 form-group" id="form-elements">
         <label for="subject">Sender Email</label>
         <input type="text" name="semail" class="form-control" id="semail">
       </div>
       <div class="col-xs-3 form-group" id="form-elements">
         <label for="subject">Sender Name</label>
         <input type="text" name="sname" class="form-control" id="sname">
       </div>
     </div>
     <div>

       <div class="form-group row">
           <div id="form-elements col-xs-4">
             <label for="subject">Content</label>
             <textarea name="content" id="content" class="form-control" rows="10" cols="10" style="width:400px;">
             </textarea>
       </div>
     </div>
       <div class="form-group">
         <label></label>
           <input type="submit" name="submit" class="btn btn-success">
     </div>
</div>
</form>

           </div>
           <div class="panel-footer"> &copy 2018</div>
       </div>
      </div>
    </div>
  </div>

  <footer class="container-fluid">
    <p>Footer Text</p>
  </footer>

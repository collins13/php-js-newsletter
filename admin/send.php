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

<?php
 include 'includes/header.php';
 include '../scripts/connect.php';

 ?>
 <script type="text/javascript">
   $(function(){
     $('#selectall').click(function(){
         $(this).parents('#list-users').find(':checkbox').attr('checked',this.checked);
     });
   });
 </script>

 <?php
  $id = $_GET['id'];

  $sql = "SELECT * FROM members WHERE status='1' ORDER BY id DESC";
  $result = $conn->query($sql);

  $emailCount = 0;
  $nameCount = 0;
  $unsubscribeCount = 0


  ?>

<div class="container-fluid">
  <div class="row content">
      <?php include 'includes/sidebar.php'; ?>

    <div class="col-sm-9">

      <div class="panel panel-info">
       <div class="panel-heading h2">ADMIN PANEL</div>
         <div class="panel-body">

           <div id="list-users">
             <input type="checkbox" name="selectall" id="selectall">SelectAll<br><br>
             <form action="sendnow.php?nid='.$id.'" method="POST">
               <?php while($row = mysqli_fetch_assoc($result)) : ?>
             <div class="form-group" ?>
               <label class="checkbox-inline">
               <input type="checkbox" name="email'.$emailCount++.'" value="<?php echo $row['email']; ?>"/>(<?php echo $row['email'];  ?>)
             </label>
             </div>
             <div class="form-group">
               <input type="hidden" name="name'.$nameCount++.'" value="<?php echo $row['name']; ?>"/>
             </div>
             <div class="form-group">
               <input type="hidden" name="unsubscribe'.$unsubscribeCount++.'" value="<?php  echo $row['id']; ?>"/>
             </div>
             <?php endwhile; ?>
             <input type="submit" name="send" value="Send" class="btn btn-primary">
           </form>
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

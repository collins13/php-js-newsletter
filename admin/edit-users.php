<?php
?>
<?php include '../scripts/connect.php'; ?>
<?php include 'includes/header.php'; ?>
<?php include 'user-data.php'; ?>

  <?php

    if (isset($_GET['id']) && isset($_GET['action']) && $_GET['action'] == 'Unsubscribe') {
        $subscribe_id = $_GET['id'];
      $sql2 = "UPDATE members SET status='0' WHERE id='$subscribe_id' LIMIT 1";
      $result2 = $conn->query($sq2);

      if ($sq2) {
        header("Location: edit-users.php?id='.$subscribe_id.'");
      }

    }
   ?>
  <div class="container-fluid" style="margin-top: 40px;">
    <div class="row content">
        <?php include 'includes/sidebar.php'; ?>

      <div class="col-sm-10">

        <div class="panel panel-info">
         <div class="panel-heading h2">ADMIN PANEL</div>
           <div class="panel-body" style="width:100%;">

             <div id="edit-indivual-users">

<form class="form-inline" role="form" action="edit-users.php" method="POST">
  <div class="form-group form-elements">
    <div class="input-group">
      <div class="input-group-addon">Email</div>
      <input class="form-control" type="email" name="email" value="<?=$email;  ?>">
    </div>
  </div>
  <div class="form-group form-elements">
    <div class="input-group">
      <div class="input-group-addon input-group-addon-success">Name</div>
    <input type="text" class="form-control" name="name" id="id" value="<?=$name;  ?>">
    </div>
  </div>
  <input type="submit" name="edituser" class="btn btn-success">
</form>

             </div>
          <div id="userstatus">

            <?php
            $status = $row1['status'];
             if($status == '1'){ ?>
            <h3>Subscribed</h3>
          <a href="edit-users.php?id=<?=$row1['id']; ?>&&action=unsubscribe" class="btn btn-danger">Unsubscribe</a>
        <?php }else { ?>
          <h3>Unsubscribed</h3>
      <?php  } ?>
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

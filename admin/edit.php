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
 include '../scripts/newsletter-submit.php';
 include '../scripts/validate-edit.php';

 ?>
 <?php
 if (isset($_GET['id'])) {
 $id = $_GET['id'];
 $id = $id;
 $sql = "SELECT * FROM newsdata WHERE id='$id'";

 $result = $conn->query($sql);

 }


  ?>
  <div class="container-fluid">
    <div class="row content">
        <?php include 'includes/sidebar.php'; ?>

      <div class="col-sm-9">

        <div class="panel panel-info">
         <div class="panel-heading h2">ADMIN PANEL</div>
           <div class="panel-body">
             <table class="table table-striped table-responsive">
                 <thead>
                   <tr>
                   <th>Template name</th>
                   <th>Subject</th>
                   <th>Sender Email</th>
                   <th>Sender Name</th>
                   <th>Created on</th>
                   <th>Creator name</th>
                   <th>Status</th>
                 </tr>
                 </thead>
                 <?php while($row = mysqli_fetch_assoc($result)) : ?>
                 <tbody>
                <tr>
                   <td><?php echo$row['temp_name']; ?></td>
                   <td><?php echo$row['subject']; ?></td>
                   <td><?php echo$row['semail']; ?></td>
                   <td><?php echo$row['sname']; ?></td>
                   <td><?php echo$row['time']; ?></td>
                   <td><?php echo$row['cname']; ?></td>
                   <td><?php echo$row['status']; ?></td>
                </tr>
                 </tbody>



            </table>
            <h3 style="margin-top:20px; font-size: 18px; font-weight:bold;">newsletter Description</h3>
            <div id="description">
              <?php echo $row['content']; ?>
            </div>

            <div id="option">
              <a href="#" class="btn btn-primary" id="edit-newsletter"> Edit |</a>
              <a href="#" class="btn btn-danger">Delete</a>
            </div>
            <?php if(isset($error)){echo '<div id="error">'.$error.'</div>';} ?>
            <?php if(isset($success)){echo '<div id="success">'.$success.'</div>';} ?>

            <form action="edit.php" method="POST">
            <div id="edit-form">
              <h3>Edit newsletter</h3>
              <div class="form-elements">
              <label for="newsletter Name">N Name</label>
              <input type="text" name="name" value="<?php echo$row['temp_name']; ?>" />
            </div>

            <div class="form-elements">
              <label for="subject">subject</label>
              <input type="text" name="subject" id="subject" value="<?php echo $row['subject'];  ?>"/>
            </div>
            <div class="form-elements">
             <label for="Sender Name">Sender Name</label>
              <input type="text" name="sname" id="sname" value="<?php echo$row['sname'];  ?>"/>
           </div>
           <input type="hidden" name="hidden" value="<?php echo $id ?>">
            <div class="form-elements">
             <label for="semail">semail</label>
              <input type="email" name="semail" id="semail" value="<?php echo$row['semail'];  ?>"/>
           </div>
          <div class="form-elements">
            <label for="Newslatter Desciption">Newslatter Desciption</label>
          <textarea name="message"><?php echo $row['content'];  ?></textarea>
          </div>

          <div class="form-elements">
           <label></label>
            <input type="submit" name="edit" class="btn btn-success" style="width:100px;" value="Edit"/>
         </div>

            </div>
            <?php endwhile; ?>

        </div>
      </form>

           </div>
           <div class="panel-footer"> &copy 2018</div>
       </div>
      </div>
    </div>
  </div>

  <footer class="container-fluid panel panel-footer">
    <p>Footer Text</p>
  </footer>

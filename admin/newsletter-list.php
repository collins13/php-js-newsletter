
<?php

include 'includes/header.php';
include '../scripts/connect.php';
include '../scripts/newsletter-submit.php';
?>
<div class="container-fluid">
  <div class="row content">
      <?php include 'includes/sidebar.php'; ?>

    <div class="col-sm-9">

      <div class="panel panel-info">
       <div class="panel-heading h2">ADMIN PANEL</div>
         <div class="panel-body">
           <?php
           $sql = "SELECT * FROM newsdata ORDER BY id DESC";

           $result = $conn->query($sql);

            ?>
           <table class="table table-striped">
               <thead>
                 <th>Template name</th>
                 <th>Subject</th>
                 <th>Sender Email</th>
                 <th>Sender Name</th>
                 <th>Created on</th>
                 <th>Creator name</th>
                 <th>Status</th>
                 <th>Action</th>
               </thead>
               <?php while($row = mysqli_fetch_assoc($result)) : ?>
               <tbody>

                 <td><?php echo$row['temp_name']; ?></td>
                 <td><?php echo$row['subject']; ?></td>
                 <td><?php echo$row['semail']; ?></td>
                   <td><?php echo$row['sname']; ?></td>
                 <td><?php echo$row['time']; ?></td>
                 <td><?php echo$row['cname']; ?></td>
                 <td><?php echo$row['status']; ?></td>
                 <td><a href="edit.php?id=<?php echo $row['id']; ?>"> preview | </a><a href="send.php?id=<?php echo $row['id']; ?>">Send</a></td>

               </tbody>
               <?php endwhile; ?>

          </table>


         </div>
         <div class="panel-footer"> &copy 2018</div>
     </div>
    </div>
  </div>
</div>

<footer class="container-fluid">
  <p>Footer Text</p>
</footer>

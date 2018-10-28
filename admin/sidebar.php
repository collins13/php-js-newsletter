<?php include 'includes/header.php'; ?>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#">Menu</a></li>
        <li class="h4"><a href="index.php" class="fa fa-home"> Home</a></li>
        <li class="h4"><a href="newsletter.php" class="fa fa-desktop "> Newsletter</a></li>
        <li class="h4"><a href="newsletter-list.php" class="fa fa-envelope"> Send Newsletter</a></li>
        <li class="h4"><a href="issue_book.php" class="fa fa-edit"> Issue book</a></li>
        <li class="h4"><a href="returned_books.php" class="fa fa-table"> Returned Book</a></li>
        <li class="h4"><a href="book_details.php" class="fa fa-table"> Book Details</a></li>
        <li class="h4"><a href="issued_books.php" class="fa fa-table list-group-ite"> issued Books</a></li>
      </ul>
    </div>

    <div class="col-sm-9">

      <div class="panel panel-info">
       <div class="panel-heading h2">ADMIN PANEL</div>
         <div class="panel-body">

           <div class="form-group row">
             <div class="col-xs-2">
               <label for="ex1">col-xs-2</label>
               <input class="form-control" id="ex1" type="text">
             </div>
             <div class="col-xs-3">
               <label for="ex2">col-xs-3</label>
               <input class="form-control" id="ex2" type="text">
             </div>
             <div class="col-xs-4">
               <label for="ex3">col-xs-4</label>
               <input class="form-control" id="ex3" type="text">
             </div>
           </div>

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


</body>
</html>

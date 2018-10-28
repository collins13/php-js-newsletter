<?php
 include 'connect.php';

 $sql = "SELECT * FROM newsdata ORDER BY id DESC";

 $result = $conn->query($sql);

 while ($row = mysqli_fetch_assoc($sql)) {
   echo'<td>'.$row['temp_name'].'</td>
   <td>'.$row['subject'].'</td>
   <th>Sender Email</th>
   <th>Sender Name</th>
   <th>Created on</th>
   <th>Creator Email</th>
   <th>Status</th>
   <th>Content</th>


   ';
 }



 ?>

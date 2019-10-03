<?php
include_once('connection.php');
$query ="Select *from distress order by id desc ";
$result = mysqli_query($con,$query);
 //?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Fetch Data from Database</title>
   </head>
   <body>
     <table algin="center" border="1px" style="width:600px; line-height:40px;">
       <tr><th colspan="4">Student Record</th></tr>
       <tr>

         <th>ID</th>
         <th>Latitude</th>
         <th>Longitude</th>
         <th>Map_URL</th>
       </tr>
       <?php
          while($rows=mysqli_fetch_assoc($result)){
        ?>
            <tr>
              <td><?php echo $rows['ID']; ?></td>
              <td><?php echo $rows['lat']; ?></td>
              <td><?php echo  $rows['lon']; ?></td>
              <?php $url=$rows['map_url'];
               echo "<td> <a href='" . $url . "'>" . $url . "</a> </td>" ?>
            <?php
            }
             ?>


     </table>
   </body>
 </html>

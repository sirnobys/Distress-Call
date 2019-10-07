<?php
include_once('connection.php');
$query ="Select *from distress order by id desc ";
$result = mysqli_query($con,$query);
 //?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <meta http-equiv="refresh" content="10; url=admin.php">
     <title>Fetch Data from Database</title>
     <!-- Compiled and minified CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

   <!-- Compiled and minified JavaScript -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

   </head>
   <body>
     <div class="container">
     <table  class="centered responsive-table">
       <thead>
       <tr><th colspan="4">Student Record</th></tr>
     </thead>
       <tr>
         <thead>
         <th>ID</th>
         <th>Latitude</th>
         <th>Longitude</th>
         <th>Map_URL</th>
       </thead>
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
   </div>
   <script>
   setTImeout(function(){location.reload();},500)
</script>
   </body>
 </html>

<?php
$host='localhost';
$user='root';
$password='';
$db = 'distress_call';

$con = mysqli_connect($host,$user,$password);
mysqli_select_db($con,$db);

if (isset($_POST['submit'])){

//variables for the external values to insert into query
  $lat = 2332.343;
  $lon = 234.4874;
  $map_url = 'http://hope.com';

  $sql = "Insert into distress(lat,lon,map_url) values('".$lat."','".$lon."','".$map_url."')";

  //entering the data into the database
  $result = mysqli_query($con,$sql);
  if (mysqli_num_rows($result)==1){
    echo"Data inserted Successfully";
    exit();
  }
  else{
    echo"Data not inserted";
    exit();
  }
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="#" method="POST">
      <input type="submit" name="submit" value="submit">
    </form>

  </body>
</html>

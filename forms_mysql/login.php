<?php
$host="localhost";
$user="root";
$password="";
$db = "distress_call";


$con = mysqli_connect($host,$user,$password);
mysqli_select_db($con,$db);

if(isset($_POST['username'])){

  $uname=$_POST['username'];
  $password=$_POST['password'];

  $sql = "Select * from loginForm where user='".$uname."' AND pass='".$password."'
   limit 1 ";

   $result=mysqli_query($con,$sql);

   if(mysqli_num_rows($result)==1){
     echo"You have successfully logged in";
     exit();
   }
   else{
     echo"You have Entered Incorrect Password";
     exit();
   }
 }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Form in Design</title>
  </head>
  <body>
     <div class="container">

       <form class="" action="#" method="POST">
         <div class="form_input">
           <input type="text" name="username" placeholder="Enter your username" >
         </div>
         <div class="form-input">
           <input type="password" name="password" placeholder="Enter your Password" >
         </div>
         <input type="submit" name="submit" value="LOGIN" class="btn-login">
       </form>
     </div>
  </body>
</html>

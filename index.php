<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Distress Call</title>
  <!--adding the css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.css" />
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" />
  <!--Adding the css for the font-->
  <link type="text/css" rel="stylesheet" href="css/materializeicon.css"/>
</head>
<body>
  <script type="text/javascript" src="/js/materialize.js"></script>
  <script type="text/javascript" src="/js/materialize.min.js"></script>
  <div class="container">
    <div class="row">
      <div class="row"></div>
      <div class="row"></div>
      <div class="row"></div>
      <div class="row"></div>
      <div class="row"></div>
      <div class="row"></div>
      <div class="row"></div>
    
        
    
      <div class="col s12 show-medium-and-up center">
        
            <button type="submit" name="action" id="panic" class="btn btn-floating pulse" onclick="panic();">
                <h1 id="sos" class="flow-text">SOS</h1>
            </button>
       
         
        </div>
      
      <div class="col m4">
        
        </div>
    </div>
    
  </div>
  <style>
    
    #panic{
      width:20rem;
      height:20rem;
      background:red;
      position:relative;
      top:30px;
    }

    #sos{
       position:relative;
       top:20%;
       font-size:5rem;
    }
  </style>


<p id='loc'><p>
<script>
  var x = document.getElementById("loc");
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}
//var la;
//var lo;
function showPosition(position) {
export var  la =position.coords.latitude;
 export var lo= position.coords.longitude;
  x.innerHTML = "https://maps.google.com/?q="+la + ","+ lo;
}
getLocation();
//function to send google maps link
// function coordinates (la,lo){
//   var maps_code = "https://maps.google.com/?q="+la + ","+ lo;
//   return maps_code;
// }


// var coordinates = coordinates();
</script>
<?php

function panic(){
  $basic  = new \Nexmo\Client\Credentials\Basic('', '');
  $client = new \Nexmo\Client($basic);
  
  $message = $client->message()->send([
      'to' => '233246971090',
      'from' => 'Nexmo',
      'text' => "Shiiiiiiiiiiiiiiiiiiiitttttttt  https://maps.google.com/?q=$la!,$lo!"
      
      
  ]);
  
  echo "message sent";
  
}
//panic();
?>
 
</body>
</html>
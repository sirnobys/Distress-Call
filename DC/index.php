<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>


<link rel="manifest" href="manifest.json">

<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="application-name" content="DC">
<meta name="apple-mobile-web-app-title" content="DC">
<meta name="theme-color" content="#02075d">
<meta name="msapplication-navbutton-color" content="#02075d">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="msapplication-starturl" content="/htdocs/dc/index.php">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="icon" type="image/jpeg" sizes="64x64" href="ucc.jpeg">
<link rel="apple-touch-icon" type="image/jpeg" sizes="64x64" href="ucc.jpeg">
<link rel="icon" type="image/jpeg" sizes="128x128" href="ucc.jpeg">
<link rel="apple-touch-icon" type="image/jpeg" sizes="128x128" href="ucc.jpeg">
<link rel="icon" type="image/jpeg" sizes="512x512" href="ucc.jpeg">
<link rel="apple-touch-icon" type="image/jpeg" sizes="512x512" href="ucc.jpeg">

  <title>Starter Template - Materialize</title>
  <script src="sw.js"></script>
<link rel="manifest" href="manifest.json">
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
function getLocation()
{
  // Check whether browser supports Geolocation API or not
  if (navigator.geolocation) { // Supported
  
    // To add PositionOptions
  
  navigator.geolocation.getCurrentPosition(getPosition);
  } else { // Not supported
  alert("Oops! This browser does not support HTML Geolocation.");
  }
}
function getPosition(position)

{x= document.getElementById("location");

   // x.innerHTML= "https://www.google.com/maps/search/?api=1&query="+position.coords.latitude+","+position.coords.longitude;
   x.value = `<?php echo '` + "https://www.google.com/maps/search/?api=1&query=" + position.coords.latitude + "," + position.coords.longitude + `'; ?>`;
    // "Latitude: " + position.coords.latitude + "<br>" +
    // "Longitude: " + position.coords.longitude;

}

// To add catchError(positionError) function

</script>
</head>

 <body onload="getLocation();">

  <div class="container">
    <div class="row">
      <div class="row"></div>
         <h3 class="center z-depth-1" > Click on the button below to send a distress alert to authorities</h3>
      </div>
    </div>
 

<form role="form" method="get" action="dc.php">
  <input type="hidden" name="location" id="location">
  <div class="col s12 show-medium-and-up center ">
        

            
       <button type="submit" id="panic" class="btn btn-floating pulse z-depth-5" name="send" value="send">
        <h6 id="sos" class="flow-text">SOS</h6></button>
         
        </div>
      
</form>

  <style>
    
    #panic{
      width:25rem;
      height:25rem;
      background:red;
      position:relative;
      top:30px;
    }

    #sos{
       position:relative;
       top:20%;
       font-size:7rem;
    }
  </style>
<script type="text/javascript">
  
</script>
 
</body>

 
</html>

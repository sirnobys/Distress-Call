
<!DOCTYPE html>
<html>

<head>
        <link rel="manifest" href="manifest.json">

<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="application-name" content="PWA from scratch">
<meta name="apple-mobile-web-app-title" content="PWA from scratch">
<meta name="theme-color" content="#c2f442">
<meta name="msapplication-navbutton-color" content="blue">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="msapplication-starturl" content="/index.html">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="icon" sizes="64x64" href="1.jpeg">
<link rel="apple-touch-icon" sizes="64x64" href="1.jpeg">
<link rel="icon" sizes="128X128" href="2.jpeg">
<link rel="apple-touch-icon" sizes="128X128" href="2.jpeg">
<link rel="icon" sizes="512x512" href="ucc.gif">
<link rel="apple-touch-icon" sizes="512x512" href="aau.png">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Distress call</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="manifest" href="manifest.json">

    <script src="main.js"></script>
</head>

<body>
    <div>
        <!-- <input id="anime_id_input" placeholder="Anime id" />
        <button id="ok_button" onclick="onOkButtonClickAsync()">OK</button>
    </div>
    <div id="main_anime">
    </div>
    <h1>History</h1>
    <div id="history"> -->
    <div class="hero flex-center">
        <p class="">jonah</p>
    <form method="post" action="index.php">
        hello
      <h1><input class="panic" value="submit" type="submit"/></h1>
    </form>
  </div>
    <?php
    function send_sms(){
    require_once "vendor/autoload.php";

    $basic  = new \Nexmo\Client\Credentials\Basic('', '');
    $client = new \Nexmo\Client($basic);

    $message = $client->message()->send([
        'to' => '233245391083',
        'from' => 'Nexmo',
        'text' => 'Hello from Nexmo'
    ]);
    }

    if($_SERVER['REQUEST_METHOD']=='POST')
           {
               send_sms();
           }


    ?>

    </div>
</body>

</html>

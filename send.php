
<?php

function send_sms(){
require_once "vendor/autoload.php";

$basic  = new \Nexmo\Client\Credentials\Basic('', '');
$client = new \Nexmo\Client($basic);

$message = $client->message()->send([
    'to' => '233246971090',
    'from' => 'Nexmo',
    'text' => 'Hello from Nexmo'
]);
}

send_sms();
?>

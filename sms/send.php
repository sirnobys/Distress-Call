<?php
require_once "vendor/autoload.php";
 
$basic  = new \Nexmo\Client\Credentials\Basic('52643da5', '06uGQhKUKANdFhgX');
$client = new \Nexmo\Client($basic);

$message = $client->message()->send([
    'to' => '233209028266',
    'from' => 'Nexmo',
    'text' => 'Hello from Nexmo'
]);
?>
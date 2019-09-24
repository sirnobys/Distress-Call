
<?php

require_once "vendor/autoload.php";

function send_sms(){
    $basic  = new \Nexmo\Client\Credentials\Basic('cfbde54a', 'st6ssDYhJZwhydlp');
$client = new \Nexmo\Client($basic);

$message = $client->message()->send([
    'to' => '233246971090',
    'from' => 'Nexmo',
    'text' => 'Hello from Nexmo'
]);

echo "message sent";
}

send_sms();

?>

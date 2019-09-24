<?php
    $txt='help me!!!! find me with this link: ';
    $location = $_GET['location'];   
    $api_key = '5d83abc6e259b5d83abc6e25e1';
    $phone = '0246971090';
    $sender_id = 'Emergency';
    $message = $txt.$location;


    $url = "http://sms.nasaramobile.com/api?api_key=$api_key&&sender_id=$sender_id&&phone=$phone&&message=".urlencode($message)."";
    //send message and get response
    $response = file_get_contents($url);
    if($response == '1801'){

        echo '<script type="text/javascript">';
        echo ' alert("SOS message sent successfully")';  //not showing an alert box.
        echo '</script>';
    }
    elseif($response == '1802') {
        echo "message sending failed";
    }
    elseif($response == '1803') {
        echo "invalid login phone or password given";
    }
    elseif($response == '1804') {
        echo "not enough sms credit";
    }
    elseif($response == '1805') {
        echo "sender id must be more than 1 charater and less than 12 characters";
    }
    elseif($response == '1806') {
        echo "phone number must be more than 8 characters";
    }

?>
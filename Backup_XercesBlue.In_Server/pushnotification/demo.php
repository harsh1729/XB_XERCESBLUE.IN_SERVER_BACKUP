<?php
echo "Project Key:" .$_POST['ProjectKey'];
echo "<br>";
echo "GCM ID:" .$_POST['GCMID'];
echo "<br>";
echo "Message:" .$_POST['Message'];


// Message to be sent
$message = $_POST['Message'];

 
// Set POST variables
$url = 'https://android.googleapis.com/gcm/send';
//$url='demo.php';

$fields = array(
                'registration_ids'  => array ($_POST['GCMID']),
                'data'              => array( "message" => $message),
                );
 
$headers = array(
                    'Authorization: key=' . $_POST['ProjectKey'],
                    'Content-Type: application/json'
                );
 
// Open connection
$ch = curl_init();
 
// Set the url, number of POST vars, POST data
curl_setopt( $ch, CURLOPT_URL, $url );
 
curl_setopt( $ch, CURLOPT_POST, true );
curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
 
curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( $fields ) );
 
// Execute post
$result = curl_exec($ch);
 
// Close connection
curl_close($ch);
 
echo $result;

 
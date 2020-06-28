

<?php

require_once('connection.php');
session_start();
$Phone=$_SESSION['Phone3'];
$sql = "SELECT * FROM items WHERE Phone='$Phone'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        
        $name = $row["Name"]."<br>";
        $pick = $row["Pick"]."<br>";
        $qua1 = $row["qu1"]."<br>";
        $qua2 = $row["qu2"]."<br>";
        $qua3 = $row["qu3"]."<br>";
        $qua4 = $row["qu4"]."<br>";
        $qua5 = $row["qu5"]."<br>";
        $qua6 = $row["qu6"]."<br>";
        $tota = $row["Total"]."<br>";
        
        
    }
}
else{
    echo "error";
}

$prarr= array("$name","$Phone","$pick","$qua1","$qua2","$qua3","$qua4","$qua5","$qua6");
print_r($prarr);
if(isset($_POST['submit'])){
   $number="8825511238";
   

  $text="hello";

$url="www.sms4india.com/api/v1/sendCampaign";
$message = urlencode($text);// urlencode your message
$curl = curl_init();
curl_setopt($curl, CURLOPT_POST, 1);// set post data to true
curl_setopt($curl, CURLOPT_POSTFIELDS, "apikey=BHPPQ0WCZXQU820K2DDYJTAMXBK6RBJB&secret=ZTA7AO2A8I8Y7SSV&usetype=stage&phone=$number&senderid=srirambala2k@gmail.com&message=$message");// post data
// query parameter values must be given without squarebrackets.
 // Optional Authentication:
curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);
curl_close($curl);
echo $result;
}
?>


<!--
if(isset($_POST['submit'])){
    $number=$_POST['number'];
    $text=$_POST['text'];
    //$code = '+91';
	// Authorisation details.
	/*
  $username = "srirambala2k@gmail.com";
	$hash = "fe89cfb574c88c333235d9049b294c8979057bfac1491bbc0f7d80732736b7a8";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = $number; // A single number or a comma-seperated list of numbers
	$message = $text;

	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);
}

if(isset($_POST['submit'])){
    $number='91'.$_POST['number'];
    $text=$_POST['text'];
    //$code = '+91';
	// Authorisation details.
  // Account details
  	$apiKey = urlencode('/0qGu3EwDEc-Q7XCnpplwT6csNyGdtjp584XA77axH');

  	// Message details
  	$numbers = array($number);
  	$sender = urlencode('TXTLCL');
  	$message = rawurlencode($text);

  	$numbers = implode(',', $numbers);

  	// Prepare data for POST request
  	$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);

  	// Send the POST request with cURL
  	$ch = curl_init('https://api.textlocal.in/send/');
  	curl_setopt($ch, CURLOPT_POST, true);
  	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  	$response = curl_exec($ch);
  	curl_close($ch);

  	// Process your response here
  	echo $response;
}
-->

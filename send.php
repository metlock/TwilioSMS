<style type="text/css">
.body {
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size: 12px;	
}
</style>

<?php require_once("sms.php");
//DB setup
$host = "localhost";
$user = "metlock_ful324";
$pass = "D_z5*Bs-c*Zk";
$db = "metlock_fulsit34";
//Store the DB connection.
$con = mysql_connect($host,$user,$pass);
	mysql_select_db($db) or die ("Unable to select DB!"); 

try {
    // Instantiate a new Twilio Rest Client
    $client = new Services_Twilio($AccountSid, $AuthToken);
	
	// Your Twilio Number
    $from = "442033222595"; 
	
	// World code for your region
	$world = "44"; 
	
	//capture the number
    $to =  $_POST["number"]; 
	
	//trim the 0 from start of UK numbers
	$finalnum =  ltrim ($to, "0");
	
	//Capture message body from form and add our FREE boilerplate
    $message = $_POST["mess"]." Sent4Free: http://fmly.me/goGIbt";

    // Send a new outgoing SMS
    $response = $client->account->sms_messages->create($from, $world.$finalnum, $message);
	
//Call the DB
$sql="INSERT INTO smsout (world,number,mess)
VALUES
('$world','$finalnum','$message')";

//if Something goes wrong, tell us
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

    // What's the status of the sent message.
	echo '<div class="body">your Message is '.$response->status.' and will send in a few seconds';
	//display number sent to
	echo '</br>Number: '.$to;
	//Display the message sent
	echo '</br>Message sent: '.$message.'</div>';
} catch (Exception $e) {
	//something went wrong, what?
    echo 'Caught exception: ' . $e->getMessage();
} ?>
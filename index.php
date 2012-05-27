<?php header("content-type: text/xml");echo"<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
$host = "localhost";

$user = "metlock_sms";

$pass = "ZGm5}(@w_&=6";

$db = "metlock_sms";
?>
<?php $con = mysql_connect($server,$user,$pass);?>
 
 <?php

	$message = $_POST["Body"];
	$number = $_POST["From"];
	$smsid =$_POST["SmsSid"];
	$city =$_POST["FromCity"];
	$state =$_POST["FromState"];
	$zip =$_POST["FromZip"];
	$country =$_POST["FromCountry"];
	$lowerCase = strtolower($message);
	mysql_select_db($db) or die ("Unable to select DB!"); 

$sql="INSERT INTO smsin (callid, Body,smsid,FromCity,FromState,FromZip,FromCountry)  
VALUES
('$number','$lowerCase', '$smsid', '$city', '$state', '$zip', '$country')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
	
	if ( $lowerCase == "email"){
		$reply = "You can email Family Lives Support team on parentsupport@familylives.org.uk";
	}
	elseif ( $lowerCase == "phone"){
		$reply = "You can call Family Lives on 0808 800 2222";
	}
	elseif ( $lowerCase == "chat"){
		$reply = "You can chat to Family Lives online at http://fmly.me/fah7Py";
	}
	elseif ( $lowerCase == "skype"){
		$reply = "You can call Family Lives on skype add FamilyLives";
	
	}
	else
	{
		//add subscriber to database via PDO
		// database access code goes here.
		$reply = "Please send keyword email, phone, chat or skype for more info";
	
	}

?>
<Response>
	<Sms><?php echo $reply; ?></Sms>
</Response>

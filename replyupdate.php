<style type="text/css">
.style {
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size: 14px;
}
.style2 {	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size: 14px;
	margin-bottom: 8px;
}
</style>

<?php 
//DB setup
$host = "localhost";
$user = "metlock_sms";
$pass = "ZGm5}(@w_&=6";
$db = "metlock_sms";
$reply = $_GET["reply"];
$id = $_GET["id"];

//Store the DB connection.
$con = mysql_connect($server,$user,$pass);
	mysql_select_db($db) or die ("Unable to select DB!"); 
	
//update the DB
mysql_query("UPDATE smsin SET replied=on
WHERE id ='$id'");

//if Something goes wrong, tell us
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  
//clode DB
mysql_query($sql,$con); 


?>




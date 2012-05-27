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
//Database setup, add your details below
$host = "localhost";
$user = "DBuser";
$pass = "dbpass";
$db = "dbname";

//Store the DB connection.
$con = mysql_connect($host,$user,$pass);
	mysql_select_db($db) or die ("Unable to select DB!"); 
	//call the DB and ask for any SMS with no reply
	$result = mysql_query("SELECT * FROM smsin WHERE replied='0'");
//Take the results and display them to users
while($row = mysql_fetch_array($result))
  {                                       
	  echo "<form name='input' action='replyupdate.php' method='get'><input type='hidden' name='var' value='<?=$id?>' /><div class='style'>Message: ".$row['Body']."</div>"; 

  echo "<div class='style2'>From: ".$row['callid'].""; 
  //I'm stuck passing the ID from here to the replyupdate.php
  echo "<div class='style2'>LID: "."<input type='checkbox' name='reply'></div><input type='submit' value='Submit' /></form>"; 
  

  }
//clode DB
mysql_query($sql,$con); 




?>



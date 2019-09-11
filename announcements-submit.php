<?php
//connect to database
$h="localhost";$user="dmtech";$pw="FTechK@DM15";
$db_n="dm";$tbl_n="announcement";
mysql_connect($h, $user, $pw) or die ("cannot connect"); 
mysql_select_db($db_n) or die ("cannot select database");

date_default_timezone_set('America/New_York');
$date = date('m/d/Y h:i:s a', time());
$register="INSERT INTO ".$tbl_n." (text,date) VALUES('". $_POST['announcement_txt'] ."',
CAST('". $date ."' AS DATE))";

//check if there
if(mysql_query($register)) { 
	header('Location: success.php');
}
 else { 
	echo "Message Failed to Post!";
}
?>




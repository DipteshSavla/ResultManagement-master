
 <?php
 $user = "root";
$pass = "project12";
$db = "tabulation";
 $db_link = mysql_connect("localhost",$user,$pass) or die ("could not connect to the server\n");
 mysql_select_db($db) or die ("could not select database\n");
 ?>

 

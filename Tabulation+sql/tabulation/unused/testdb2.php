<?php
$user = "exmadministrator";
$pass = "project12";
$db = "tabulation";
$con = mysql_connect("172.16.4.19",$user,$pass) or die('Could not connect: ' . mysql_error());
echo "connected..to MySql <br />";
mysql_select_db($db) or die("Could not select". mysql_error());;
echo "Connected to DB..<br />";
$qr = "select * from login";
$result = mysql_query($qr) or die('Could not set query results..'.mysql_error());

$fresult = mysql_fetch_row($result); 

echo "Table fatched..<br />";
$username = $fresult[0];
$pswd = $fresult[1];
echo "display rows..<br />";
echo $username, $pswd;
echo "<br />";
//$row = mysql_fetch_row($qr);
//echo "Table fatched..";
//echo "<br />";
//$username = $row["username"];
//$pswd = $row["passwd"];
//echo "display rows..";
//
//echo "<br />";
//echo $username, $pswd;



//mysql_free_result($row);
mysql_close();
//      }
//echo "over";
//echo "<br />";
?>

<?php
$user = "exmadministrator";
$pass = "project12";
$db = "tabulation";
$con = mysql_connect("172.16.4.19",$user,$pass);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  else
      {
echo "connected..xxxxxx";
echo "<br />";
mysql_select_db($db,$con);
echo "db selected..";
echo "<br />";
$qr = "select * from login";
$row = mysql_fetch_row($qr);
echo "Table fatched..";
echo "<br />";
$username = $row[1];
$pswd = $row["passwd"];
echo "display rows..";
echo "<br />";
echo $username, $pswd;
echo "<br />";
$row = mysql_fetch_row($qr);
echo "Table fatched..";
echo "<br />";
$username = $row["username"];
$pswd = $row["passwd"];
echo "display rows..";

echo "<br />";
echo $username, $pswd;



mysql_free_result($row);
mysql_close();
      }
echo "over";
echo "<br />";
?>

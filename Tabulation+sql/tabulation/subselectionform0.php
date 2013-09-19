<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
 <HEAD>
  <TITLE> select department </TITLE>
  <META NAME="Generator" CONTENT="EditPlus">
  <META NAME="Author" CONTENT="">
  <META NAME="Keywords" CONTENT="">
  <META NAME="Description" CONTENT="">
 </HEAD>

<BODY >
<!--
<?php
$caller=$_COOKIE['CALLER'];
//echo $caller;
print_r($_COOKIE);
?>

-->
<?php
include 'readsetup.php';
userexist();
$dbarry    = readsetupdb();
$hostname  = $dbarry['host'];
$dbuser    = $dbarry['user'];
$dbuserpwd = $dbarry['paswd'];
$dbname    = $dbarry['dbname'];

//echo $hostname;
//echo $dbname;
//echo $dbuser;
//echo $dbuserpwd;
//echo "caller in cookie is ";
//echo $caller;


mysql_connect($hostname,$dbuser,$dbuserpwd);

$dept=readdept($dbarry,'subselectionform0.php');
?>

<center>
<h1>Department Selection Form </h1>
<br>
<form method="post" action="subselectionform1.php">
<table>

			<?php
		 		
                                echo "<tr>";
				echo "<td>Department</td>";
				echo "<td><SELECT NAME='DEPT'  >";
				echo "<OPTION SELECTED VALUE=''>SELECT...</OPTION>";
				for($i=0; $i<count($dept);$i++)
				{
				echo "<OPTION onclick=\"test1(this,'$d','$s','$n','subselectform1.php')\">$dept[$i]</OPTION>";
				}
                                echo "</td>";
				echo "</SELECT>";
				echo "</tr>";
			?>
		 
</table>
<input type="submit" value="Submit" /input>
</form>
</BODY>
</HTML>

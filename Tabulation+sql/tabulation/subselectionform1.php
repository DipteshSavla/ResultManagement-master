<?PHP
if(session_id()==""){

}else
session_destroy();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
 <HEAD>
  <TITLE> New Document </TITLE>
  <META NAME="Generator" CONTENT="EditPlus">
  <META NAME="Author" CONTENT="">
  <META NAME="Keywords" CONTENT="">
  <META NAME="Description" CONTENT="">
 </HEAD>

<BODY>
<!--
<?php
$caller=$_COOKIE['CALLER'];
//echo $caller;
print_r($_COOKIE);
?>

-->
<?php
//session_start();
include 'readsetup.php';
userexist();
//echo "look here";
//echo $_COOKIE[CALLER];
//echo "look here";

$dept = $_POST['DEPT'];
$_SESSION['DEPT']= $dept;

$dbarry    = readsetupdb();
$hostname  = $dbarry['host'];
$dbuser    = $dbarry['user'];
$dbuserpwd = $dbarry['paswd'];
$dbname    = $dbarry['dbname'];

$rs = readsemnamedept($dbarry,$dept,'subselectionform1.php');
#print_r($rs);
#$printf("%s \n",$rs[2][0]);
for($i=1;$i<$rs[0][0];$i++)
{
$d[$i]=$rs[$i][0];
$s[$i]=$rs[$i][1];
$n[$i]=$rs[$i][2];
}

?>
<center>
<h1>Session-Semester Selection Form </h1>
<br>
<?php // echo $_COOKIE[CALLER];?>
<form method="post" action="<?php echo $_COOKIE['CALLER']?>">
   
<table>

			
		 
		<tr>
                        
		 	<td>Session</td>
		 	<td><input type="text" name="SESSION"/></td>
		 </tr>

		 
 		<?php
		 		
                                echo "<tr>";
				echo "<td>Semester</td>";
				echo "<td><SELECT NAME='SEM_CD'>";
				echo "<OPTION SELECTED >SELECT...</OPTION>";
				for($i=1; $i<count($s);$i++)
				{
                                   
                                    echo "<OPTION VALUE='".$s[$i]."' onclick=\"test1(this,'$d','$s','$n','subselectform1.php')\">$s[$i]  ---$n[$i]</OPTION>";
				}
                                echo "</td>";
				echo "</SELECT>";
				echo "</tr>";
			?>
		 


<!--		<tr>
 			<td>Semester Code</td>
 			<td><input type="text" name="SEM_CODE" /></td>
 		</tr>
                
-->		
	

</table>
<input type="submit" value="Submit"/>
</form>
</BODY>
</HTML>

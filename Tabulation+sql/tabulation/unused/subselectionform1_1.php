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
$caller=$_COOKIE[CALLER];
echo $caller;
print_r($_COOKIE);
?>

-->
<?php
#session_start();
include 'readsetup.php';

$dbarry    = readsetupdb();
$hostname  = $dbarry[host];
$dbuser    = $dbarry[user];;
$dbuserpwd = $dbarry[paswd];
$dbname    = $dbarry[dbname];
$dept=readdept($dbarry,'subselectionform1.php');
#echo count($dept);
#for($i=0;$i<18;$i++)
#{
#printf("%s \n",$dept[$i]);
#}
#$rs = readsemname($dept,$dbarry,'subselectionform1.php');
#echo $rs["DEPT"];
#
function semname1()
{
echo "within semname";
}

?>
<script LANGUAGE="javascript">
function test1(a,b,c)
{

document.write("ok "+a.value+ " "+b);

}
</script>

<center>
<h1>Session-Semester Selection Form </h1>
<br>
<form method="post" action="<? echo $_COOKIE[CALLER];?>">
<table>

			<?php
		 		function semname()
				{
					 echo "within semname";
				}
                                $dbn=$dbarry['dbname'];
				echo "<tr>";
				echo "<td>Department</td>";
				echo "<td><SELECT NAME='DEPT'  >";
				echo "<OPTION SELECTED VALUE=''>SELECT...</OPTION>";
				for($i=0; $i<count($dept);$i++)
				{
				echo "<OPTION onclick=\"test1(this,'$dbn','subselectform1.php')\">$dept[$i]</OPTION>";
				}
                                echo "</td>";
				echo "</SELECT>";
				echo "</tr>";
			?>
		 
		<tr>
                        
		 	<td>Session</td>
		 	<td><input type="text" name="SESSION"/></td>
		 </tr>

		 
 		<tr>
 			<td>Semester Code</td>
 			<td><input type="text" name="SEM_CODE" /></td>
 		</tr>
 
	

</table>
<input type="submit" value="Submit"/>
</form>
</BODY>
</HTML>

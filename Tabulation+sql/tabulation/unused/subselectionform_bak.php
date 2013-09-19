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
$rs = readsemname($dbarry,'subselectionform1.php');
#print_r($rs);
#printf("%s \n",$rs[2][0]);
for($i=0;$i<50;$i++)
{
$d[$i]=$rs[$i][0];

$s[$i]=$rs[$i][1];

$n[$i]=$rs[$i][2];

}
function semname1()

{

echo "within semname";

}

$arr = array(1,2,3,4,5,6,7);
$script = '<script>var newArr = new Array(' . implode(',', $arr) . ');</script>';
echo $script; 

?>

<script LANGUAGE="javascript">
import com.ibm.phpj.xapi.XAPIArray;

XAPIArray dp=runtimeContext.CreateArray();

dp[] = XAPIArray.copyOutArray($d);
document.write("<br> welcome <br>");

function test1(a,d,s,n,c)
{

document.write(a.value);

}
</script>

<center>
<h1>Session-Semester Selection Form </h1>
<br>
<form method="post" action="<? echo $_COOKIE[CALLER];?>">
<table>

			<?php
		 		function test2($a,$b,$c)
				{
					 echo "within semname";
					 sleep(20);
				}
                                $dbr=$rs;
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

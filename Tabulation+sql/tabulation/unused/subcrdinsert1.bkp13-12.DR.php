
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

<center>
<h1>Course Structure: Subject details Form</h1>
<br>

<?php 
session_start();
include 'readsetup.php';

$dbarry    = readsetupdb();
$hostname  = $dbarry[host];
$dbuser    = $dbarry[user];;
$dbuserpwd = $dbarry[paswd];
$dbname    = $dbarry[dbname];


//echo $dbarry[dbname];
//echo "1st";
//echo $dbname; 
//echo "OK";
$objConnect=connection($dbarry,'subcrdinsert1.php');
$db_found=selectdb($dbarry,'subcrdinsert1.php');

$session=$_POST['SESSION'];
$semcode=$_POST['SEM_CODE'];
$evenodd=$_POST['WSMS'];

$_SESSION['SESSION']=$session;
$_SESSION['SEM_CODE']=$semcode;
$_SESSION['WSMS']=$evenodd;


echo $_SESSION['DEPT'];echo "<br>";

#print_r($_SESSION);

?>

<script type="text/javascript">
      jsemcode = <? echo $semcode; ?>;   
      document.cookie = "SEMCODE=" + jsemcode;  
</script>

<?php
if ($db_found)
{
    echo $session;
    echo $semcode;
	$strSQL = "SELECT A.SESSION, A.SEM_CODE, B.SUBJE_ORDE, A.SUBJE_CODE, A.SUBJE_NAME ";
	$strSQL = $strSQL . " FROM esub_mst AS A , ecrd_mst AS B";
        $strSQL = $strSQL . " where A.SESSION = '$session' and A.SEM_CODE='$semcode' ";
	$strSQL = $strSQL . " AND A.SESSION =  B.SESSION AND A.SEM_CODE = B.SEM_CODE ";
	$strSQL = $strSQL . " AND A.SUBJE_CODE = B.SUBJE_CODE ";
	$strSQL = $strSQL . " order by B.SUBJE_ORDE ";
        
	$objQuery = mysqlquery($strSQL,'subcrdinsert1.php');
        $num = mysql_num_rows($objQuery);
	if ($num > 0 )
        {
       
?>
	<form method="post" action="subcrdinsertrecords1.php">
	<table width="600" border="1">
  	<tr>
    		<!--<th width="98"> <div align="center">SESSION </div></th>
    		<th width="198"> <div align="center">SEM_CODE </div></th>
                 -->
    		<th width="59"> <div align="center">CODE</div></th>
                <th width="59"> <div align="center">SUBJE_NAME</div></th>
                <th width="10"> <div align="center">ORDER</div></th>
                <th width="10"> <div align="center">SRP</div></th>
		<th width="10"> <div align="center">GE</div></th>
                <th width="10"> <div align="center">LEC</div></th>
		<th width="10"> <div align="center">THE</div></th>
                <th width="10"> <div align="center">PRA</div></th>
		<th width="10"> <div align="center">WEI</div></th>
                
		
        </tr>
        <?php
        $linecount=1;
        $maxline = 10;
	while($linecount < $maxline )
	{
	?>
  	<tr>
    		<!--<td><input type="text" name="SESSION" value="<? echo $session; ?>"/></td>
    		<td><input type="text" name="SEMCODE" value="<? echo $semcode; ?>"/></td>
		-->
		<!--
		<td><input type="text" name="SESSION" value="<? echo $session; ?>"/></td>
    		<td><input type="text" name="SEMCODE" value="<? echo $semcode; ?>"/></td> 
		-->		

    		<td><input type="text" size="7" name="SUBJECT_CODE[]"/></td>
   		<td><input type="text" size="60" name="SUBJECT_NAME[]"/></td>
                <td><input type="text" size="5" name="SUBJECT_ORDER[]"/></td>
   		<td><input type="text" size="3" name="SUBJECT_SRP[]"/></td>
                <td><input type="text" size="2" name="SUBJECT_GE[]"/></td>
   		<td><input type="text" size="3" name="SUBJECT_LECTURE[]"/></td>
		<td><input type="text" size="3" name="SUBJECT_THEORY[]"/></td>
   		<td><input type="text" size="3" name="SUBJECT_PRACTICAL[]"/></td>
		<td><input type="text" size="3" name="SUBJECT_WEIGHTAGE[]"/></td> 



         </tr>
        <?php
         $linecount = $linecount + 1;
         }  #of while
         ?>
</table>
<!--<input type="checkbox" name="PSETTER5" value="1"/>Papper Setter&nbsp<input type="checkbox" name="PEVALUATOR5" value="2"/>Paper Evaluator&nbsp<input type="checkbox" name="MSUBMISSION5" value="3"/>Marks Submission 
-->
<br>
<br>
<br>
<input type="submit" value="Submit"/>
</form>
<?php
} #of db found
else  #of if num=0
echo "More than 0 records, EDIT THE records";
} #of if num=0


mysql_free_result($objQuery);
mysql_close($objConnect);
?>
</BODY>
</HTML>

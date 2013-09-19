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
<?php

include 'readsetup.php';

$dbarry    = readsetupdb();
$hostname  = $dbarry[host];
$dbuser    = $dbarry[user];
$dbuserpwd = $dbarry[paswd];
$dbname    = $dbarry[dbname];
$objConnect=connection($dbarry,'editsubcrd1.php');
$db_found=selectdb($dbarry,'editsubcrd1.php');

$session=$_POST['SESSION'];
$semcode=$_POST['SEM_CODE'];

if ($db_found)
{

	$strSQL = "SELECT A.SESSION, A.SEM_CODE, B.SUBJE_ORDE, A.SUBJE_CODE, A.SUBJE_NAME ";
	$strSQL = $strSQL . " FROM esub_mst AS A , ecrd_mst AS B";
        $strSQL = $strSQL . " where A.SESSION = '$session' and A.SEM_CODE='$semcode' ";
	$strSQL = $strSQL . " AND A.SESSION =  B.SESSION AND A.SEM_CODE = B.SEM_CODE ";
	$strSQL = $strSQL . " AND A.SUBJE_CODE = B.SUBJE_CODE ";
	$strSQL = $strSQL . " order by B.SUBJE_ORDE ";

	$objQuery = mysqlquery($strSQL,'editsubcrd1.php');
        $num = mysql_num_rows($objQuery);
#        if ($num = 0 )
#        {
?>

<table width="600" border="1">
  <tr>
    <th width="91"> <div align="center">ID </div></th>
    <th width="98"> <div align="center">SESSION </div></th>
    <th width="198"> <div align="center">SEM_CODE </div></th>
    <th width="59"> <div align="center">SUBJE_CODE</div></th>
    <th width="71"> <div align="center">SUB_LINK</div></th>
	<th width="71"> <div align="center">SUBJE_NAME<div></th>
	<th width="71"> <div align="center">TEACHER1</div></th>
	<th width="71"> <div align="center">DEPT1</div></th>
	<th width="71"> <div align="center">PSETTER1</div></th>
	<th width="71"> <div align="center">PEVALUATOR1</div></th>
	<th width="71"> <div align="center">MSUBMISSION1</div></th>
	<th width="71"> <div align="center">TEACHER2</div></th>
	<th width="71"> <div align="center">DEPT2</div></th>
	<th width="71"> <div align="center">PSETTER2</div></th>
	<th width="71"> <div align="center">PEVALUATOR2</div></th>
	<th width="71"> <div align="center">MSUBMISSION2</div></th>
	<th width="71"> <div align="center">TEACHER3</div></th>
	<th width="71"> <div align="center">DEPT3</div></th>
	<th width="71"> <div align="center">PSETTER3</div></th>
	<th width="71"> <div align="center">PEVALUATOR3</div></th>
	<th width="71"> <div align="center">MSUBMISSION3</div></th>
	<th width="71"> <div align="center">TEACHER4</div></th>
	<th width="71"> <div align="center">DEPT4</div></th>
	<th width="71"> <div align="center">PSETTER4</div></th>
	<th width="71"> <div align="center">PEVALUATOR4</div></th>
	<th width="71"> <div align="center">MSUBMISSION4</div></th>
	<th width="71"> <div align="center">TEACHER5</div></th>
	<th width="71"> <div align="center">DEPT5</div></th>
	<th width="71"> <div align="center">PSETTER5</div></th>
	<th width="71"> <div align="center">PEVALUATOR5</div></th>
	<th width="71"> <div align="center">MSUBMISSION5</div></th>
    <th width="30"> <div align="center">Edit </div></th>
  </tr>

<?php
while($objResult = mysql_fetch_array($objQuery))
{
?>

  <tr>
    <td><div align="center"><?=$objResult["ID"];?></div></td>
    <td><?=$objResult["SESSION"];?></td>
    <td><?=$objResult["SEM_CODE"];?></td>
    <td><?=$objResult["SUBJE_CODE"];?></td>
   <!-- <td><?=$objResult["SUB_LINK"];?></td>-->
    <td><?=$objResult["SUBJE_NAME"];?></td>
<!-- <td><?=$objResult["TEACHER1"];?></td>
	<td><?=$objResult["DEPT1"];?></td>
	<td><?=$objResult["PSETTER1"];?></td>
	<td><?=$objResult["PEVALUATOR1"];?></td>
	<td><?=$objResult["MSUBMISSION1"];?></td>

	<td><?=$objResult["TEACHER2"];?></td>
	<td><?=$objResult["DEPT2"];?></td>
	<td><?=$objResult["PSETTER2"];?></td>
	<td><?=$objResult["PEVALUATOR2"];?></td>
	<td><?=$objResult["MSUBMISSION2"];?></td>

	<td><?=$objResult["TEACHER3"];?></td>
	<td><?=$objResult["DEPT3"];?></td>
	<td><?=$objResult["PSETTER3"];?></td>
	<td><?=$objResult["PEVALUATOR3"];?></td>
	<td><?=$objResult["MSUBMISSION3"];?></td>

	<td><?=$objResult["TEACHER4"];?></td>
	<td><?=$objResult["DEPT4"];?></td>
	<td><?=$objResult["PSETTER4"];?></td>
	<td><?=$objResult["PEVALUATOR4"];?></td>
	<td><?=$objResult["MSUBMISSION4"];?></td>

	<td><?=$objResult["TEACHER5"];?></td>
	<td><?=$objResult["DEPT5"];?></td>
	<td><?=$objResult["PSETTER5"];?></td>
	<td><?=$objResult["PEVALUATOR5"];?></td>
	<td><?=$objResult["MSUBMISSION5"];?></td>
-->

    <td align="center"><a href="editsub2.php? ID= <?=$objResult["ID"];?> ">Edit</a></td>
  </tr>
<?php
}	#of while
#}	#of if found
}       #of db found
?>
</table>
<?php
mysql_free_result($objQuery);
mysql_close($objConnect);
?>
</BODY>
</HTML>

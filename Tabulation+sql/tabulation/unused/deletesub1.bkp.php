<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
 <HEAD>
  <TITLE> Delete subjects </TITLE>
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
$dbuser    = $dbarry[user];;
$dbuserpwd = $dbarry[paswd];
$dbname    = $dbarry[dbname];


$objConnect=connection($dbarry,'deletesub1.php');
$db_found=selectdb($dbarry,'deletesub1.php');
$session=$_POST['SESSION'];
$semcode=$_POST['SEM_CD'];

if ($db_found)
{

        $strSQL = "SELECT SUBJE_CODE,SUBJE_NAME ";
        $strSQL = $strSQL . " FROM esub_mst where SESSION = '$session' and SEM_CODE='$semcode' ";
        $strSQL = $strSQL . " order by SUBJE_CODE ";
        $objQuery = mysqlquery($strSQL,'deletesub1.php');
        $num = mysql_num_rows($objQuery);
        if ($num > 0 )
        {
?>
<table width="600" border="1">
  <tr>
 <!-- <th width="91"> <div align="center">ID </div></th>^M
    <th width="98"> <div align="center">SESSION </div></th>
^M
    <th width="198"> <div align="center">SEM_CODE </div></th>
    ^M
    <th width="198"> <div align="center">SUBJE_ORDER</div></th>
    -->
    <th width="59"> <div align="center">SUBJE_CODE</div></th>
    <!-- <th width="71"> <div align="center">SUB_LINK</div></th> -->
        <th width="71"> <div align="center">SUBJE_NAME<div></th>
    <!--<th width="71"> <div align="center">TEACHER1</div></th>^M
        <th width="71"> <div align="center">DEPT1</div></th>^M
        <th width="71"> <div align="center">PSETTER1</div></th>^M
        <th width="71"> <div align="center">PEVALUATOR1</div></th>^M
        <th width="71"> <div align="center">MSUBMISSION1</div></th>^M
        <th width="71"> <div align="center">TEACHER2</div></th>^M
        <th width="71"> <div align="center">DEPT2</div></th>^M
        <th width="71"> <div align="center">PSETTER2</div></th>^M
        <th width="71"> <div align="center">PEVALUATOR2</div></th>^M
        <th width="71"> <div align="center">MSUBMISSION2</div></th>^M
        <th width="71"> <div align="center">TEACHER3</div></th>^M
        <th width="71"> <div align="center">DEPT3</div></th>^M
        <th width="71"> <div align="center">PSETTER3</div></th>^M
 <th width="71"> <div align="center">PEVALUATOR3</div></th>^M
        <th width="71"> <div align="center">MSUBMISSION3</div></th>^M
        <th width="71"> <div align="center">TEACHER4</div></th>^M
        <th width="71"> <div align="center">DEPT4</div></th>^M
        <th width="71"> <div align="center">PSETTER4</div></th>^M
        <th width="71"> <div align="center">PEVALUATOR4</div></th>^M
        <th width="71"> <div align="center">MSUBMISSION4</div></th>^M
        <th width="71"> <div align="center">TEACHER5</div></th>^M
        <th width="71"> <div align="center">DEPT5</div></th>^M
        <th width="71"> <div align="center">PSETTER5</div></th>^M
        <th width="71"> <div align="center">PEVALUATOR5</div></th>^M
        <th width="71"> <div align="center">MSUBMISSION5</div></th>
       -->
  </tr>
<?php
while($objResult = mysql_fetch_array($objQuery))
{
?>
  <tr>
    <!--
    <td><div align="center"><?=$objResult["ID"];?></div></td>^M
    <td><?=$objResult["SESSION"];?></td>^M
 <td><?=$objResult["SEM_CODE"];?></td>
    <td><?=$objResult["SUBJE_ORDER"];?></td>
    -->
    <td><?=$objResult["SUBJE_CODE"];?></td>
    <!-- <td><?=$objResult["SUB_LINK"];?></td>-->

    <td><?=$objResult["SUBJE_NAME"];?></td>
    <!--<td><?=$objResult["TEACHER1"];?></td>^M
        <td><?=$objResult["DEPT1"];?></td>^M
        <td><?=$objResult["PSETTER1"];?></td>^M
        <td><?=$objResult["PEVALUATOR1"];?></td>^M
        <td><?=$objResult["MSUBMISSION1"];?></td>^M
^M
        <td><?=$objResult["TEACHER2"];?></td>^M
        <td><?=$objResult["DEPT2"];?></td>^M
        <td><?=$objResult["PSETTER2"];?></td>^M
        <td><?=$objResult["PEVALUATOR2"];?></td>^M
        <td><?=$objResult["MSUBMISSION2"];?></td>^M
^M
        <td><?=$objResult["TEACHER3"];?></td>^M
        <td><?=$objResult["DEPT3"];?></td>^M
        <td><?=$objResult["PSETTER3"];?></td>^M
        <td><?=$objResult["PEVALUATOR3"];?></td>^M
<td><?=$objResult["MSUBMISSION4"];?></td>^M
^M
        <td><?=$objResult["TEACHER5"];?></td>^M
        <td><?=$objResult["DEPT5"];?></td>^M
        <td><?=$objResult["PSETTER5"];?></td>^M
        <td><?=$objResult["PEVALUATOR5"];?></td>^M
        <td><?=$objResult["MSUBMISSION5"];?></td>
       -->
    <td><a href="deletesub2.php?ID=<?=$objResult["SUBJE_CODE"];?>">Delete</a></td>
        <!-- Comfirm delete button.^M
        <td align="center"><a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='deletecrd2.php?ID=<?=$objResult["SUBJE_CODE"];?>';}">Delete</a></td>^M
        -->
  </tr>
<?
}  #of while
}  # if $num > 0
else
{
   echo "No Record found!";
}
}  # of if found^M
?>
</table>
<?
mysql_free_result($objQuery);
mysql_close($objConnect);
?>
 </BODY>
</HTML>
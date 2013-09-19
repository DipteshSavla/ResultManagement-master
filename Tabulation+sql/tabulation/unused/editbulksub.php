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
  <?
  $user="exmadministrator";
  $pass="project12";
  $db="tabulation";
$objConnect = mysql_connect("172.16.4.19",$user,$pass) or die(mysql_error());
$objDB = mysql_select_db($db);

//*** Update Condition ***//
if($_GET["Action"] == "Save")
{
	for($i=1;$i<=$_POST["hdnLine"];$i++)
	{
		$strSQL = "UPDATE esub_mst SET ";
		$strSQL .="ID = '".$_POST["txtID$i"]."' ";
		$strSQL .=",SESSION = '".$_POST["txtSESSION$i"]."' ";
		$strSQL .=",SEM_CODE = '".$_POST["txtSEM_CODE$i"]."' ";
		$strSQL .=",SUBJE_CODE = '".$_POST["txtSUBJE_CODE$i"]."' ";
		$strSQL .=",SUB_LINK = '".$_POST["txtSUB_LINK$i"]."' ";
		$strSQL .=",SUBJE_NAME = '".$_POST["txtSUBJE_NAME$i"]."' ";
		
		$strSQL .=",TEACHER1 = '".$_POST["txtTEACHER1$i"]."' ";
		$strSQL .=",DEPT1 = '".$_POST["txtDEPT1$i"]."' ";
		$strSQL .=",PSETTER1 = '".$_POST["txtPSETTER1$i"]."' ";
		$strSQL .=",PEVALUATOR1 = '".$_POST["txtPEVALUATOR1$i"]."' ";
		$strSQL .=",MSUBMISSION1 = '".$_POST["txtMSUBMISSION1$i"]."' ";
		
		$strSQL .=",TEACHER2 = '".$_POST["txtTEACHER2$i"]."' ";
		$strSQL .=",DEPT2 = '".$_POST["txtDEPT2$i"]."' ";
		$strSQL .=",PSETTER2 = '".$_POST["txtPSETTER2$i"]."' ";
		$strSQL .=",PEVALUATOR2 = '".$_POST["txtPEVALUATOR2$i"]."' ";
		$strSQL .=",MSUBMISSION2 = '".$_POST["txtMSUBMISSION2$i"]."' ";

		$strSQL .=",TEACHER3 = '".$_POST["txtTEACHER3$i"]."' ";
		$strSQL .=",DEPT3 = '".$_POST["txtDEPT3$i"]."' ";
		$strSQL .=",PSETTER3 = '".$_POST["txtPSETTER3$i"]."' ";
		$strSQL .=",PEVALUATOR3 = '".$_POST["txtPEVALUATOR3$i"]."' ";
		$strSQL .=",MSUBMISSION3 = '".$_POST["txtMSUBMISSION3$i"]."' ";

		$strSQL .=",TEACHER4 = '".$_POST["txtTEACHER4$i"]."' ";
		$strSQL .=",DEPT4 = '".$_POST["txtDEPT4$i"]."' ";
		$strSQL .=",PSETTER4 = '".$_POST["txtPSETTER4$i"]."' ";
		$strSQL .=",PEVALUATOR4 = '".$_POST["txtPEVALUATOR4$i"]."' ";
		$strSQL .=",MSUBMISSION4 = '".$_POST["txtMSUBMISSION4$i"]."' ";

		$strSQL .=",TEACHER5 = '".$_POST["txtTEACHER5$i"]."' ";
		$strSQL .=",DEPT5 = '".$_POST["txtDEPT5$i"]."' ";
		$strSQL .=",PSETTER5 = '".$_POST["txtPSETTER5$i"]."' ";
		$strSQL .=",PEVALUATOR5 = '".$_POST["txtPEVALUATOR5$i"]."' ";
		$strSQL .=",MSUBMISSION5 = '".$_POST["txtMSUBMISSION5$i"]."' ";
		$strSQL .="WHERE ID = '".$_POST["hdnID$i"]."' ";
		$objQuery = mysql_query($strSQL);
	}
	//header("location:$_SERVER[PHP_SELF]");
	//exit();
}

$strSQL = "SELECT * FROM esub_mst ORDER BY ID ASC";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
?>
<form name="frmMain" method="post" action="editbulkcrd.php?Action=Save">
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

  </tr>
<?
$i =0;
while($objResult = mysql_fetch_array($objQuery))
{
	$i = $i + 1;
?>
  <tr>
    <td><div align="center">
	<input type="hidden" name="hdnID<?=$i;?>" size="5" value="<?=$objResult["ID"];?>">
	<input type="text" name="txtID<?=$i;?>" size="5" value="<?=$objResult["ID"];?>">
	</div></td>
    <td><input type="text" name="txtSESSION<?=$i;?>" size="5" value="<?=$objResult["SESSION"];?>"></td>
    <td><input type="text" name="txtSEM_CODE<?=$i;?>" size="5" value="<?=$objResult["SEM_CODE"];?>"></td>
    <td align="right"><input type="text" name="txtSUBJE_CODE<?=$i;?>" size="5" value="<?=$objResult["SUBJE_CODE"];?>"></td>
    <td align="right"><input type="text" name="txtSUB_LINK<?=$i;?>" size="5" value="<?=$objResult["SUB_LINK"];?>"></td>
	<td align="right"><input type="text" name="txtSUBJE_NAME<?=$i;?>" size="15" value="<?=$objResult["SUBJE_NAME"];?>"></td>
	<td align="right"><input type="text" name="txtTEACHER1<?=$i;?>" size="5" value="<?=$objResult["TEACHER1"];?>"></td>
	<td align="right"><input type="text" name="txtDEPT1<?=$i;?>" size="5" value="<?=$objResult["DEPT1"];?>"></td>
	<td align="right"><input type="text" name="txtPSETTER1<?=$i;?>" size="5" value="<?=$objResult["PSETTER1"];?>"></td>
	<td align="right"><input type="text" name="txtPEVALUATOR1<?=$i;?>" size="5" value="<?=$objResult["PEVALUATOR1"];?>"></td>
	<td align="right"><input type="text" name="txtMSUBMISSION1<?=$i;?>" size="5" value="<?=$objResult["MSUBMISSION1"];?>"></td>

<td align="right"><input type="text" name="txtTEACHER2<?=$i;?>" size="5" value="<?=$objResult["TEACHER2"];?>"></td>
	<td align="right"><input type="text" name="txtDEPT2<?=$i;?>" size="5" value="<?=$objResult["DEPT2"];?>"></td>
	<td align="right"><input type="text" name="txtPSETTER2<?=$i;?>" size="5" value="<?=$objResult["PSETTER2"];?>"></td>
	<td align="right"><input type="text" name="txtPEVALUATOR2<?=$i;?>" size="5" value="<?=$objResult["PEVALUATOR2"];?>"></td>
	<td align="right"><input type="text" name="txtMSUBMISSION2<?=$i;?>" size="5" value="<?=$objResult["MSUBMISSION2"];?>"></td>

	<td align="right"><input type="text" name="txtTEACHER3<?=$i;?>" size="5" value="<?=$objResult["TEACHER3"];?>"></td>
	<td align="right"><input type="text" name="txtDEPT3<?=$i;?>" size="5" value="<?=$objResult["DEPT3"];?>"></td>
	<td align="right"><input type="text" name="txtPSETTER3<?=$i;?>" size="5" value="<?=$objResult["PSETTER3"];?>"></td>
	<td align="right"><input type="text" name="txtPEVALUATOR3<?=$i;?>" size="5" value="<?=$objResult["PEVALUATO3"];?>"></td>
	<td align="right"><input type="text" name="txtMSUBMISSION3<?=$i;?>" size="5" value="<?=$objResult["MSUBMISSION3"];?>"></td>

	<td align="right"><input type="text" name="txtTEACHER4<?=$i;?>" size="5" value="<?=$objResult["TEACHER4"];?>"></td>
	<td align="right"><input type="text" name="txtDEPT4<?=$i;?>" size="5" value="<?=$objResult["DEPT4"];?>"></td>
	<td align="right"><input type="text" name="txtPSETTER4<?=$i;?>" size="5" value="<?=$objResult["PSETTER4"];?>"></td>
	<td align="right"><input type="text" name="txtPEVALUATOR4<?=$i;?>" size="5" value="<?=$objResult["PEVALUATOR4"];?>"></td>
	<td align="right"><input type="text" name="txtMSUBMISSION4<?=$i;?>" size="5" value="<?=$objResult["MSUBMISSION4"];?>"></td>

	<td align="right"><input type="text" name="txtTEACHER5<?=$i;?>" size="5" value="<?=$objResult["TEACHER5"];?>"></td>
	<td align="right"><input type="text" name="txtDEPT5<?=$i;?>" size="5" value="<?=$objResult["DEPT5"];?>"></td>
	<td align="right"><input type="text" name="txtPSETTER5<?=$i;?>" size="5" value="<?=$objResult["PSETTER5"];?>"></td>
	<td align="right"><input type="text" name="txtPEVALUATOR5<?=$i;?>" size="5" value="<?=$objResult["PEVALUATOR5"];?>"></td>
	<td align="right"><input type="text" name="txtMSUBMISSION5<?=$i;?>" size="5" value="<?=$objResult["MSUBMISSION5"];?>"></td>
 </tr>
<?
}
?>
</table>
  <input type="submit" name="submit" value="submit">
  <input type="hidden" name="hdnLine" value="<?=$i;?>">
</form>
<?
mysql_close($objConnect);
?>
 </BODY>
</HTML>

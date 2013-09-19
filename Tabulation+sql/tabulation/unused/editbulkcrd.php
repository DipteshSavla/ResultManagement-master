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
		$strSQL = "UPDATE ecrd_mst SET ";
		$strSQL .="ID = '".$_POST["txtID$i"]."' ";
		$strSQL .=",SESSION = '".$_POST["txtSESSION$i"]."' ";
		$strSQL .=",SEM_CODE = '".$_POST["txtSEM_CODE$i"]."' ";
		$strSQL .=",SUBJE_ORDE = '".$_POST["txtSUBJE_ORDE$i"]."' ";
		$strSQL .=",SUBJE_CODE = '".$_POST["txtSUBJE_CODE$i"]."' ";
		$strSQL .=",S_R_P = '".$_POST["txtS_R_P$i"]."' ";
		$strSQL .=",G_E = '".$_POST["txtG_E$i"]."' ";
		$strSQL .=",ENO = '".$_POST["txtENO$i"]."' ";
		$strSQL .=",FLAG = '".$_POST["txtFLAG$i"]."' ";
		$strSQL .=",VALUE = '".$_POST["txtVALUE$i"]."' ";
		$strSQL .=",LECTURE = '".$_POST["txtLECTURE$i"]."' ";
		$strSQL .=",THEORY = '".$_POST["txtTHEORY$i"]."' ";
		$strSQL .=",PRACTICAL = '".$_POST["txtPRACTICAL$i"]."' ";
		$strSQL .=",WEIGHTAGE = '".$_POST["txtWEIGHTAGE$i"]."' ";
		$strSQL .=",OBSOLETE = '".$_POST["txtONSOLETE$i"]."' ";
		$strSQL .="WHERE ID = '".$_POST["hdnID$i"]."' ";
		$objQuery = mysql_query($strSQL);
	}
	//header("location:$_SERVER[PHP_SELF]");
	//exit();
}

$strSQL = "SELECT * FROM ecrd_mst ORDER BY ID ASC";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
?>
<form name="frmMain" method="post" action="editbulkcrd.php?Action=Save">
<table width="600" border="1">
  <tr>
    <th width="91"> <div align="center">ID </div></th>
    <th width="98"> <div align="center">SESSION </div></th>
    <th width="198"> <div align="center">SEM_CODE </div></th>
    <th width="97"> <div align="center">SUBJE_ORDE </div></th>
    <th width="59"> <div align="center">SUBJE_CODE</div></th>
    <th width="71"> <div align="center">S_R_P</div></th>
	<th width="71"> <div align="center">G_E<div></th>
	<th width="71"> <div align="center">ENO</div></th>
	<th width="71"> <div align="center">FLAG</div></th>
	<th width="71"> <div align="center">VALUE</div></th>
	<th width="71"> <div align="center">LECTURE</div></th>
	<th width="71"> <div align="center">THEORY</div></th>
	<th width="71"> <div align="center">PRACTICAL</div></th>
	<th width="71"> <div align="center">WEIGHTAGE</div></th>
	<th width="71"> <div align="center">OBSOLETE</div></th>
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
    <td><div align="center"><input type="text" name="txtSUBJE_ORDE<?=$i;?>" size="2" value="<?=$objResult["SUBJE_ORDE"];?>"></div></td>
    <td align="right"><input type="text" name="txtSUBJE_CODE<?=$i;?>" size="5" value="<?=$objResult["SUBJE_CODE"];?>"></td>
    <td align="right"><input type="text" name="txtS_R_P<?=$i;?>" size="5" value="<?=$objResult["S_R_P"];?>"></td>
	<td align="right"><input type="text" name="txtG_E<?=$i;?>" size="5" value="<?=$objResult["G_E"];?>"></td>
	<td align="right"><input type="text" name="txtENO<?=$i;?>" size="5" value="<?=$objResult["ENO"];?>"></td>
	<td align="right"><input type="text" name="txtFLAG<?=$i;?>" size="5" value="<?=$objResult["FLAG"];?>"></td>
	<td align="right"><input type="text" name="txtVALUE<?=$i;?>" size="5" value="<?=$objResult["VALUE"];?>"></td>
	<td align="right"><input type="text" name="txtLECTURE<?=$i;?>" size="5" value="<?=$objResult["LECTURE"];?>"></td>
	<td align="right"><input type="text" name="txtTHEORY<?=$i;?>" size="5" value="<?=$objResult["THEORY"];?>"></td>
	<td align="right"><input type="text" name="txtPRACTICAL<?=$i;?>" size="5" value="<?=$objResult["PRACTICAL"];?>"></td>
	<td align="right"><input type="text" name="txtWEIGHTAGE<?=$i;?>" size="5" value="<?=$objResult["WEIGHTAGE"];?>"></td>
	<td align="right"><input type="text" name="txtOBSOLETE<?=$i;?>" size="5" value="<?=$objResult["OBSOLETE"];?>"></td>
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

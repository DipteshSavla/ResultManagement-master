<html>
<head>
<title>Edit</title>
</head>
<body>
<form action="editcrd3.php?ID=<?=$_GET["ID"];?>" name="frmEdit" method="post">
<?
$user="exmadministrator";
$pass="project12";
$db="tabulation";
	$objConnect = mysql_connect("172.16.4.19",$user,$pass) or die(mysql_error());
	$objDB = mysql_select_db($db);
	$strSQL = "SELECT * FROM ecrd_mst WHERE ID = '".$_GET["ID"]."' ";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if(!$objResult)
	{
		echo "Not found ID=".$_GET["ID"];
	}
	else
	{
	?>
	<table width="600" border="1">
	  <tr>
		<th width="91"> <div align="center">ID </div></th>
		<th width="30"> <div align="center">Session</div></th>
    <th width="30"> <div align="center">Semester Code</div></th>
    <th width="30"> <div align="center">Subject Order</div></th>
    <th width="30"> <div align="center">Subject Code</div></th>
    <th width="30"> <div align="center">S_R_P</div></th>
    <th width="30"> <div align="center">General/Elective</div></th>
    <th width="30"> <div align="center">Eno</div></th>
	<th width="30"> <div align="center">Flag</div></th>
	<th width="30"> <div align="center">Value</div></th>
	<th width="30"> <div align="center">Lecture</div></th>
	<th width="30"> <div align="center">Theory</div></th>
	<th width="30"> <div align="center">Practical</div></th>
	<th width="30"> <div align="center">Weightage</div></th>
	<th width="30"> <div align="center">Obsolete</div></th>
	  </tr>
	  <tr>
		<td><div align="center"><input type="text" name="txtID" size="5" value="<?=$objResult["ID"];?>"></div></td>
		<td><input type="text" name="txtSESSION" size="20" value="<?=$objResult["SESSION"];?>"></td>
		<td><input type="text" name="txtSEM_CODE" size="20" value="<?=$objResult["SEM_CODE"];?>"></td>
		<td><div align="center"><input type="text" name="txtSUBJE_ORDE" size="2" value="<?=$objResult["SUBJE_ORDE"];?>"></div></td>
		<td><input type="text" name="txtSUBJE_CODE" size="20" value="<?=$objResult["SUBJE_CODE"];?>"></td>
		<td><input type="text" name="txtS_R_P" size="20" value="<?=$objResult["S_R_P"];?>"></td>
		<td><input type="text" name="txtG_E" size="20" value="<?=$objResult["G_E"];?>"></td>
		<td><input type="text" name="txtENO" size="20" value="<?=$objResult["ENO"];?>"></td>
		<td><input type="text" name="txtFLAG" size="20" value="<?=$objResult["FLAG"];?>"></td>
		<td><input type="text" name="txtVALUE" size="20" value="<?=$objResult["VALUE"];?>"></td>
		<td><input type="text" name="txtLECTURE" size="20" value="<?=$objResult["LECTURE"];?>"></td>
		<td><input type="text" name="txtTHEORY" size="20" value="<?=$objResult["THEORY"];?>"></td>
		<td><input type="text" name="txtPRACTICAL" size="20" value="<?=$objResult["PRACTICAL"];?>"></td>
		<td><input type="text" name="txtWEIGHTAGE" size="20" value="<?=$objResult["WEIGHTAGE"];?>"></td>
		<td><input type="text" name="txtOBSOLETE" size="20" value="<?=$objResult["OBSOLETE"];?>"></td>
	  </tr>
	  </table>
	  <input type="submit" name="submit" value="submit">
	  <?
	  }
	  mysql_close($objConnect);
?>
</form>
</body>
</html>

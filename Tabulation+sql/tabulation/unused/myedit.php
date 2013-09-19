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
  <form name="frmSearch" method="get" action="<?=$_SERVER['SCRIPT_NAME'];?>">
  <table width="599" border="1">
    <tr>
      <th>Session
      <input name="SESSION" type="text" id="SESSION" value="<?=$_GET["SESSION"];?>">
      <input type="submit" value="Search"></th>
    </tr>
  </table>
</form>
<?
if($_GET["SESSION"] != "")
	{
		$user="exmadministrator";
		$pass="project12";
		$db="tabulation";
	$objConnect = mysql_connect("172.16.4.19",$user,$pass) or die(mysql_error());
	$objDB = mysql_select_db($db);
	// Search By Session
	$strSQL = "SELECT * FROM ecrd_mst WHERE (SESSION LIKE '%".$_GET["SESSION"]."%')";
	$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
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
    <th width="30"> <div align="center">Edit </div></th>
  </tr>
<?
while($objResult = mysql_fetch_array($objQuery))
{
?>
  <tr>
    <td><div align="center"><?=$objResult["ID"];?></div></td>
    <td><?=$objResult["SESSION"];?></td>
    <td><?=$objResult["SEM_CODE"];?></td>
    <td><?=$objResult["SUBJE_ORDE"];?></td>
    <td><?=$objResult["SUBJE_CODE"];?></td>
    <td><?=$objResult["S_R_P"];?></td>
    <td><?=$objResult["G_E"];?></td>
	<td><?=$objResult["ENO"];?></td>
	<td><?=$objResult["FLAG"];?></td>
	<td><?=$objResult["VALUE"];?></td>
	<td><?=$objResult["LECTURE"];?></td>
	<td><?=$objResult["THEORY"];?></td>
	<td><?=$objResult["PRACTICAL"];?></td>
	<td><?=$objResult["WEIGHTAGE"];?></td>
	<td><?=$objResult["OBSOLETE"];?></td>
    <td align="center"><a href="editcrd2.php?ID=<?=$objResult["ID"];?>">Edit</a></td>
  </tr>
<?
}
?>
</table>
<?
mysql_close($objConnect);
?>
 </BODY>
</HTML>

<html>
<head>
<title>delete</title>
</head>
<body>
<?
$user="exmadministrator";
$pass="project12";
$db="tabulation";
$objConnect = mysql_connect("172.16.4.19",$user,$pass) or die(mysql_error());
$objDB = mysql_select_db($db);

$strSQL = "SELECT * FROM ecrd_mst";
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
	<th width="30"> <div align="center">Delete</div></th>
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
    <td><a href="deletecrd2.php?ID=<?=$objResult["ID"];?>">Delete</a></td>
	<!-- Comfirm delete button.
	<td align="center"><a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='deletecrd2.php?ID=<?=$objResult["ID"];?>';}">Delete</a></td>
	-->
  </tr>
<?
}
?>
</table>
<?
mysql_close($objConnect);
?>
</body>
</html>

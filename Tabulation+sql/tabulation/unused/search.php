<html>
<head>
<title>Search</title>
</head>
<body>
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
	// Search By Name or Email
	$strSQL = "SELECT * FROM esub_mst WHERE (SESSION LIKE '%".$_GET["SESSION"]."%')";
	$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
	?>
	<table width="600" border="1">
	  <tr>
		<th width="91"> <div align="center">Session</div></th>
		<th width="98"> <div align="center">Semester Code</div></th>
		<th width="198"> <div align="center">Subject Name</div></th>
		
	  </tr>
	<?
	while($objResult = mysql_fetch_array($objQuery))
	{
	?>
	  <tr>
		<td><div align="center"><?=$objResult["SESSION"];?></div></td>
		<td><?=$objResult["SEM_CODE"];?></td>
		<td><?=$objResult["SUBJE_NAME"];?></td>
		
	  </tr>
	<?
	}
	?>
	</table>
	<?
	mysql_close($objConnect);
}
?>
</body>
</html>
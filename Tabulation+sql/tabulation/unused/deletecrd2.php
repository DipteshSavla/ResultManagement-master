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
	$strSQL = "DELETE FROM ecrd_mst ";
	$strSQL .="WHERE ID = '".$_GET["ID"]."' ";
	$objQuery = mysql_query($strSQL);
	if($objQuery)
	{
		echo "Record deleted.";
	}
	else
	{
		echo "Error Delete [".$strSQL."]";
	}
	mysql_close($objConnect);
?>
</body>
</html>
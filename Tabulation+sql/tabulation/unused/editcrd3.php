<html>
<head>
<title>Edit</title>
</head>
<body>
<?
$user="exmadministrator";
$pass="project12";
$db="tabulation";
	$objConnect = mysql_connect("172.16.4.19",$user,$pass) or die(mysql_error());
	$objDB = mysql_select_db($db);
	$strSQL = "UPDATE ecrd_mst SET ";
	$strSQL .="ID = '".$_POST["txtID"]."' ";
	$strSQL .=",SESSION = '".$_POST["txtSESSION"]."' ";
	$strSQL .=",SEM_CODE = '".$_POST["txtSEM_CODE"]."' ";
	$strSQL .=",SUBJE_ORDE = '".$_POST["txtSUBJE_ORDE"]."' ";
	$strSQL .=",SUBJE_CODE = '".$_POST["txtSUBJE_CODE"]."' ";
	$strSQL .=",S_R_P = '".$_POST["txtS_R_P"]."' ";
	$strSQL .=",G_E = '".$_POST["txtG_E"]."' ";
	$strSQL .=",ENO = '".$_POST["txtENO"]."' ";
	$strSQL .=",FLAG = '".$_POST["txtFLAG"]."' ";
	$strSQL .=",VALUE = '".$_POST["txtVALUE"]."' ";
	$strSQL .=",LECTURE = '".$_POST["txtLECTURE"]."' ";
	$strSQL .=",THEORY = '".$_POST["txtTHEORY"]."' ";
	$strSQL .=",PRACTICAL = '".$_POST["txtPRACTICAL"]."' ";
	$strSQL .=",WEIGHTAGE = '".$_POST["txtWEIGHTAGE"]."' ";
	$strSQL .=",OBSOLETE = '".$_POST["txtOBSOLETE"]."' ";
	$strSQL .="WHERE ID = '".$_GET["ID"]."' ";
	$objQuery = mysql_query($strSQL);
	if($objQuery)
	{
		echo "Save completed.";
	}
	else
	{
		echo "Error Save [".$strSQL."]";
	}
	mysql_close($objConnect);
?>
</body>
</html>
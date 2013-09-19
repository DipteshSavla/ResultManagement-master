
<HTML>
 <HEAD>
  <TITLE> Delete subject2 </TITLE>
  <META NAME="Generator" CONTENT="EditPlus">
  <META NAME="Author" CONTENT="">
  <META NAME="Keywords" CONTENT="">
  <META NAME="Description" CONTENT="">
 </HEAD>

 <BODY>
  <?php
  include_once 'readsetup.php';
  userexist();
  $dbarray= readsetupdb();
  
  
	$objConnect = mysql_connect($dbarray[host],$dbarray[user],$dbarray[paswd]) or die(mysql_error());
	$objDB = mysql_select_db($dbarray[dbname])or die("error in db selection");
	$strSQL = "DELETE FROM esub_mst ";
	$strSQL .="WHERE SUBJE_CODE = '".$_GET["SUBJE_CODE"]."' and SESSION='".$_GET["SESSION"]."' ";
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
 </BODY>
</HTML>

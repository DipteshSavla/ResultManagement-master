<?php
include "connection.php";
if (isset($_POST[SESSION]))
{
 $sql="INSERT INTO ecrd_mst VALUES('','$_POST[SESSION]','$_POST[SEM_CODE]','$_POST[SUBJE_ORDE]','$_POST[SUBJE_CODE]','$_POST[S_R_P]','$_POST[G_E]','$_POST[ENO]','$_POST[FLAG]','$_POST[VALUE]','$_POST[LECTURE]','$_POST[THEORY]','$_POST[PRACTICAL]','$_POST[WEIGHTAGE]','$_POST[OBSOLETE]')";
 $objquery=mysql_query($sql);
if($objquery)
{
	echo "1 record Inserted.";
}
else
	{
echo "Error Inserting [".$sql."]";
}
header("insertcrd.php");
}
?>
 
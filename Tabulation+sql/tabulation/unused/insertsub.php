<?php
include "ssconnection.php";
if (isset($_POST[SESSION]))
{

$sql=" INSERT INTO esub_mst VALUES('','$_POST[SESSION]','$_POST[SEM_CODE]','$_POST[SUBJE_CODE]','$_POST[SUB_LINK]','$_POST[SUBJE_NAME]','$_POST[TEACHER1]','$_POST[DEPT1]','$_POST[PSETTER1]','$_POST[PEVALUATOR1]','$_POST[MSUBMISSION1]','$_POST[TEACHER2]','$_POST[DEPT2]','$_POST[PSETTER2]','$_POST[PEVALUATOR2]','$_POST[MSUBMISSION]','$_POST[TEACHER3]','$_POST[DEPT3]','$_POST[PSETTER3]','$_POST[PEVALUATOR3]','$_POST[MSUBMISSION3]','$_POST[TEACHER4]','$_POST[DEPT4]','$_POST[PSETTER4]','$_POST[PEVALUATOR4]','$_POST[MSUBMISSION4]','$_POST[TEACHER5]','$_POST[DEPT5]','$_POST[PSETTER5]','$_POST[PEVALUATOR5]','$_POST[MSUBMISSION5]')";
$objquery=mysql_query($sql);
if($objquery)
{
	echo "1 record Inserted.";
}
else
{
echo "Error Inserting [".$sql."]";
}
header ("insertsub.php");
}
?>

<?php 
include "ssconnection.php";

$sql="DELETE FROM `esub_mst` WHERE `ID`='$_GET[ID]'";
mysql_query($sql);
header("location:tablesub.php");
?>
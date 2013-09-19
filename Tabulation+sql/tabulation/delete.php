<?php
//delete.php
include "connection.php";

$sql="DELETE FROM `ecrd_mst` WHERE `ID`=isset('$_GET[ID]')";
mysql_query($sql);

Header("Location:crdtable.php");
?>
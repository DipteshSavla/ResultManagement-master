<?php

 include "ssconnection.php";
 if ($_POST[Name])
 {
 $sql="INSERT INTO esub_mst VALUES('','$_POST[Name]','$_POST[Email]','$_POST[Contact]')";

mysql_query($sql);
//Header("Location:select.php");

 }
 ?>
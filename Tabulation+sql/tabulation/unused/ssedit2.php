<?php
//edit2.php
  $user = "exmadministrator";
$pass = "project12";
$db = "tabulation";
 $db_link = mysql_connect("172.16.4.19",$user,$pass) or die ("could not connect to the server\n");
 mysql_select_db($db) or die ("could not select database\n");
$sql="UPDATE `ecrd_mst` SET `SESSION`= '$_POST[SESSION]',`SEM_CODE`= '$_POST[SEM_CODE]',`SUBJE_ORDE`='$_POST[SUBJE_ORDE]',`SUBJE_CODE`='$_POST[SUBJE_CODE]',`S_R_P`='$_POST[S_R_P]',`G_E`='$_POST[G_E]',`ENO`='$_POST[ENO]',`FLAG`='$_POST[FLAG]',`VALUE`='$_POST[VALUE]',`LECTURE`='$_POST[LECTURE]',`THEORY`='$_POST[THEORY]',`PRACTICAL`='$_POST[PRACTICAL]',`WEIGHTAGE`='$_POST[WEIGHTAGE]',`OBSOLETE`='$_POST[OBSOLETE]' WHERE `ID`='$_POST[eid];";

mysql_query($sql);

Header("Location: creditform.php");
?>
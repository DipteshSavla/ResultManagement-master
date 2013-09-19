<?php
//edit2.php
  include "connection.php";
$sql="UPDATE `ecrd_mst` SET `SESSION`= '$_POST[SESSION]',`SEM_CODE`= '$_POST[SEM_CODE]',`SUBJE_ORDE`='$_POST[SUBJE_ORDE]',`SUBJE_CODE`='$_POST[SUBJE_CODE]',`S_R_P`='$_POST[S_R_P]',`G_E`='$_POST[G_E]',`ENO`='$_POST[ENO]',`FLAG`='$_POST[FLAG]',`VALUE`='$_POST[VALUE]',`LECTURE`='$_POST[LECTURE]',`THEORY`='$_POST[THEORY]',`PRACTICAL`='$_POST[PRACTICAL]',`WEIGHTAGE`='$_POST[WEIGHTAGE]',`OBSOLETE`='$_POST[OBSOLETE]' WHERE `ID`=isset('$_POST[eid]')";

mysql_query($sql);

Header("Location:crdtable.php");
?>
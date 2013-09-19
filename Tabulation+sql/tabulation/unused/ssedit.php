<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
 <HEAD>
  <TITLE> New Document </TITLE>
  <META NAME="Generator" CONTENT="EditPlus">
  <META NAME="Author" CONTENT="">
  <META NAME="Keywords" CONTENT="">
  <META NAME="Description" CONTENT="">
 </HEAD>

 <BODY>
  <?php
  $user = "exmadministrator";
$pass = "project12";
$db = "tabulation";
 $db_link = mysql_connect("172.16.4.19",$user,$pass) or die ("could not connect to the server\n");
 mysql_select_db($db) or die ("could not select database\n");
  $sql = "SELECT  * FROM `ecrd_mst` WHERE `ID` = '$_GET[ID]'";
  $res = mysql_query ($sql);
  $row = mysql_fetch_array($res);
  ?>
  <center>
  <form method = post action = "ssedit2.php">
  <input type = "hidden" name = "eid" value="<?php print $_GET[ID];?>">
  <table>
  <tr>
  <td>SESSION</td>
  <td><input type="text" name="SESSION" value ="<?php print $row['SESSION'];?>"></td>
  </tr>
  <tr>
  <td>SEMESTER CODE</td>
  <td><input type="text" name="SEM_CODE" value="<?php print $row['SEM_CODE'];?>"></td>
  </tr>
  <tr>
  <td>SUBJECT ORDER</td>
  <td><input type="text" name="SUBJE_ORDE" value="<?php print $row['SUBJE_ORDE'];?>"></td>
  </tr>
  <TR>
  <TD>SUBJECT CODE</TD>
  <td><input type="text" name="SUBJE_CODE" value ="<?php print $row['SUBJE_CODE'];?>"></td>
</TR>

<TR>
<TD>S_R_P</TD>
<td><input type="text" name="S_R_P" value ="<?php print $row['S_R_P'];?>"></td>
</TR>

<TR>
<TD>G_E</TD>
<td><input type="text" name="G_E" value ="<?php print $row['G_E'];?>"></td>
</TR>

<TR>
<TD>ENO</TD>
<td><input type="text" name="ENO" value ="<?php print $row['ENO'];?>"></td>
</TR>

<TR>
<TD>FLAG</TD>
<td><input type="text" name="FLAG" value ="<?php print $row['FLAG'];?>"></td>
</TR>

<TR>
<TD>VALUE</TD>
<td><input type="text" name="VALUE" value ="<?php print $row['VALUE'];?>"></td>
</TR>

<TR>
<TD>LECTURE</TD>
<td><input type="text" name="LECTURE" value ="<?php print $row['LECTURE'];?>"></td>
</TR>

<TR>
<TD>THEORY</TD>
<td><input type="text" name="THEORY" value ="<?php print $row['THEORY'];?>"></td>
</TR>

<TR>
<TD>PRACTICAL</TD>
<td><input type="text" name="PRACTICAL" value ="<?php print $row['PRACTICAL'];?>"></td>
</TR>

<TR>
<TD>WEIGHTAGE</TD>
<td><input type="text" name="WEIGHTAGE" value ="<?php print $row['WEIGHTAGE'];?>"></td>
</TR>

<TR>
<TD>OBSOLETE</TD>
<td><input type="text" name="OBSOLETE" value ="<?php print $row['OBSOLETE'];?>"></td>
</TR>
  <tr>
  <td></td>
  <td><input type="Submit" value "update"></td>
  </tr>
  </table>
  </form>
 </BODY>
</HTML>

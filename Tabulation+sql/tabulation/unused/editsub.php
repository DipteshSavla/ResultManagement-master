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
include "ssconnection.php";

$sql = "SELECT  * FROM `esub_mst` WHERE `ID` = '$_GET[ID]'";
  $res = mysql_query ($sql);
  $row = mysql_fetch_array($res);
  ?>
  <center>
  <form method = post action = "edit2sub.php">
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
  <td>SUBJECT CODE</td>
  <td><input type="text" name="SUBJE_CODE" value="<?php print $row['SUBJE_CODE'];?>"></td>
  </tr>
  <TR>
  <TD>SUBJECT lINK</TD>
  <td><input type="text" name="SUB_LINK" value ="<?php print $row['SUB_LINK'];?>"></td>
</TR>

<TR>
<TD>TEACHER 1</TD>
<td><input type="text" name="TEACHER1" value ="<?php print $row['TEACHER1'];?>"></td>
</TR>

<TR>
<TD>DEPARTMENT 1</TD>
<td><input type="text" name="DEPT1" value ="<?php print $row['DEPT1'];?>"></td>
</TR>

<TR>
<TD>PSETTER1</TD>
<td><input type="checkbox" name="PSETTER1" value ="<?php print $row['1'];?>"></td>
</TR>

<TR>
<TD>PEVALUATOR1</TD>
<td><input type="checkbox" name="PEVALUATOR1" value ="<?php print $row['2'];?>"></td>
</TR>

<TR>
<TD>MSUBMISSION1</TD>
<td><input type="checkbox" name="MSUBMISSION1" value ="<?php print $row['3'];?>"></td>
</TR>

<TR>
<TD>TEACHER 2</TD>
<td><input type="text" name="TEACHER2" value ="<?php print $row['TEACHER2'];?>"></td>
</TR>

<TR>
<TD>DEPARTMENT 2</TD>
<td><input type="text" name="DEPT2" value ="<?php print $row['DEPT2'];?>"></td>
</TR>

<TR>
<TD>PSETTER2</TD>
<td><input type="checkbox" name="PSETTER2" value ="<?php print $row['1'];?>"></td>
</TR>

<TR>
<TD>PEVALUATOR2</TD>
<td><input type="checkbox" name="PEVALUATOR2" value ="<?php print $row['2'];?>"></td>
</TR>

<TR>
<TD>MSUBMISSION2</TD>
<td><input type="checkbox" name="MSUBMISSION2" value ="<?php print $row['3'];?>"></td>
</TR>

<TR>
<TD>TEACHER 3</TD>
<td><input type="text" name="TEACHER3" value ="<?php print $row['TEACHER3'];?>"></td>
</TR>

<TR>
<TD>DEPARTMENT 3</TD>
<td><input type="text" name="DEPT3" value ="<?php print $row['DEPT3'];?>"></td>
</TR>

<TR>
<TD>PSETTER3</TD>
<td><input type="checkbox" name="PSETTER3" value ="<?php print $row['1'];?>"></td>
</TR>

<TR>
<TD>PEVALUATOR3</TD>
<td><input type="checkbox" name="PEVALUATOR3" value ="<?php print $row['2'];?>"></td>
</TR>

<TR>
<TD>MSUBMISSION3</TD>
<td><input type="checkbox" name="MSUBMISSION3" value ="<?php print $row['3'];?>"></td>
</TR>

<TR>
<TD>TEACHER 4</TD>
<td><input type="text" name="TEACHER4" value ="<?php print $row['TEACHER4'];?>"></td>
</TR>

<TR>
<TD>DEPARTMENT 4</TD>
<td><input type="text" name="DEPT4" value ="<?php print $row['DEPT4'];?>"></td>
</TR>

<TR>
<TD>PSETTER4</TD>
<td><input type="checkbox" name="PSETTER4" value ="<?php print $row['1'];?>"></td>
</TR>

<TR>
<TD>PEVALUATOR4</TD>
<td><input type="checkbox" name="PEVALUATOR4" value ="<?php print $row['2'];?>"></td>
</TR>

<TR>
<TD>MSUBMISSION4</TD>
<td><input type="checkbox" name="MSUBMISSION4" value ="<?php print $row['3'];?>"></td>
</TR>

<TR>
<TD>TEACHER 5</TD>
<td><input type="text" name="TEACHER5" value ="<?php print $row['TEACHER5'];?>"></td>
</TR>

<TR>
<TD>DEPARTMENT 5</TD>
<td><input type="text" name="DEPT5" value ="<?php print $row['DEPT5'];?>"></td>
</TR>

<TR>
<TD>PSETTER5</TD>
<td><input type="checkbox" name="PSETTER5" value ="<?php print $row['1'];?>"></td>
</TR>

<TR>
<TD>PEVALUATOR5</TD>
<td><input type="checkbox" name="PEVALUATOR5" value ="<?php print $row['2'];?>"></td>
</TR>

<TR>
<TD>MSUBMISSION5</TD>
<td><input type="checkbox" name="MSUBMISSION5" value ="<?php print $row['3'];?>"></td>
</TR>
  <tr>
  <td></td>
  <td><input type="Submit" value "update"></td>
  </tr>
  </table>
  </form>

 </BODY>
</HTML>

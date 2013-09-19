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
 mysql_close($db_link);
 ?>
<form action="page1.php" method="post">
  <center>
  <b>Paper Submittion</b>
  <br>
  <form>
  <table>
  <tr>
  <td>session</td>
<td><select>
<option> -select-</option>
<option>2009-2010</option>
<option>2010-2011</option>
<option>2010-2011</option>
<option>2011-2012</option>
<option>2012-2013</option>
</td>
</select>
<br>
<tr>
	<td>semester code</td>
	<td><input type="text" name="semestercode"></td>
</tr>
<tr>
	<td>subject code</td>
	<td><input type="text" name="subjectcode"></td>
</tr>
<tr>
	<td>subject name</td>
	<td><input type="text" name="subjectname"></td>
</tr>
<tr>
	<td>subject offered</td>
	<td><input type="text" name="subjectoffered"></td>
</tr>
</table>
<tr>
	<td>Teacher 1</td>
	<td><input type="text" name="teacher1"></td>
</tr>
<tr>
	<td>Department 1</td>
	<td><input type="text" name="department1"></td>
</tr>
<br><br>
<tr>
	<td>Teacher 2</td>
	<td><input type="text" name="teacher2"></td>
</tr>
<tr>
	<td>Department 2</td>
	<td><input type="text" name="department2"></td>
</tr>
<br><br>
<tr>
	<td>Teacher 3</td>
	<td><input type="text" name="teacher3"></td>
</tr>
<tr>
	<td>Department 3</td>
	<td><input type="text" name="department3"></td>
</tr>
<br><br>
<tr>
	<td>Teacher 4</td>
	<td><input type="text" name="teacher4"></td>
</tr>
<tr>
	<td>Department 4</td>
	<td><input type="text" name="department4"></td>
</tr>
<br><br>
<tr>
	<td>Teacher 5</td>
	<td><input type="text" name="teacher5"></td>
</tr>
<tr>
	<td>Department 5</td>
	<td><input type="text" name="department5"></td>
</tr>
<br>
<br>
</table>
</form>

<input type="submit" value="Submit"/>&nbsp<input type="reset" value="Reset"/>&nbsp<input type="button" value="Edit"/>&nbsp<input type="button" value="Update"/>
<br><br>
 </BODY>
</HTML>

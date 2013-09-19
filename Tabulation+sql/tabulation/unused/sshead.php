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
 <script language="JavaScript">
 function validation()
 {
	 if(document.head.session.selectedIndex==0)
	 {
		 alert("Please Select the Session");
		 document.head.session.focus();
		 return false;
	 }
	 var a= document.head.semestercode.value;
	 if(a=="")
	 {
		 alert("Enter Semester Code");
		 document.head.semestercode.focus();
		 return false;
	 }
	 return true;
 }
 </script>
  <center><font color="blue"><h1>Course Management System</h1></font></center>
  <form name="head" method="post" action="page1.php" onsubmit ="return validation()">
  <center>
  <table>
  <tr>
	<td>Session</td>
	<td>
	<select name="session">
	<option value="" SELECTED>-select-</option>
	<option value="2009">2009-2010</option>
	<option value="2010">2010-2011</option>
	<option value="2011">2011-2012</option>
	<option value="2012">2012-2013</option>
	<option value="2013">2013-2014</option>
	</select>
	</td>
</tr>

<tr>
<td>Semester Code</td>
<td><input type="text" name="semestercode"/></td>
</tr>
</table>
<br>
<input type="submit" name="submit" value="Enter"/>
 </center>
 </BODY>
</HTML>

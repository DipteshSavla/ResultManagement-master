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
 $sql="INSERT INTO ecrd_mst VALUES('','$_POST[SESSION]','$_POST[SEM_CODE]','$_POST[SUBJE_ORDE]','$_POST[SUBJE_CODE]','$_POST[S_R_P]','$_POST[G_E]','$_POST[ENO]','$_POST[FLAG]','$_POST[VALUE]','$_POST[LECTURE]','$_POST[THEORY]','$_POST[PRACTICAL]','$_POST[WEIGHTAGE]','$_POST[OBSOLETE]')";
 if(!mysql_query($sql,$db_link))
 {
	 die ('Error:'. mysql_error());
 }
 echo "1 Record Added";

 $result = mysql_query("SELECT * FROM ecrd_mst");

echo "<table border='1'>
<tr>
<th>ID</th>
<th>SESSION</th>
<th>SEMESTER CODE</th>
<TH>SUBJECT ORDER</TH>
<TH>SUBJECT CODE</TH>
<TH>S_R_P</TH>
<TH>G_E</TH>
<TH>ENO</TH>
<TH>FLAG</TH>
<TH>VALUE</TH>
<TH>LECTURE</TH>
<TH>THEORY</TH>
<TH>PRACTICAL</TH>
<TH>WEIGHTAGE</TH>
<TH>OBSOLETE</TH>

</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['ID'] . "</td>";
  echo "<td>" . $row['SESSION'] . "</td>";
  echo "<td>" . $row['SEM_CODE'] ."</td>";
  echo "<td>" . $row['SUBJE_ORDE'] . "</td>";
  echo "<td>" . $row['SUBJE_CODE'] . "</td>";
  echo "<td>" . $row['S_R_P'] . "</td>";
  echo "<td>" . $row['G_E'] . "</td>";
  echo "<td>" . $row['ENO'] . "</td>";
  echo "<td>" . $row['FLAG'] . "</td>";
  echo "<td>" . $row['VALUE'] . "</td>";
  echo "<td>" . $row['LECTURE'] . "</td>";
  echo "<td>" . $row['THEORY'] . "</td>";
  echo "<td>" . $row['PRACTICAL'] . "</td>";
  echo "<td>" . $row['WEIGHTAGE'] . "</td>";
  echo "<td>" . $row['OBSOLETE'] . "</td>";
  echo "<td><a href=\"ssedit.php? ID = $row[ID]\">Edit</a></td>";
  echo "<td><a href=\"ssdelete.php?ID=$row\" onclick = \"javascript:return confirm('Are you sure you want to delete?');\">Delete</a></td>";
  echo "</tr>";
  }
echo "</table>";

mysql_close($con);
?>
  <CENTER>
  <H1>CREDIT ENTRY FORM</H1>
  <BR>
  <FORM METHOD="POST" ACTION="creditform.php">
  <TABLE>
  <TR>
	<TD>SESSION:</TD>
	<TD><INPUT TYPE="TEXT" NAME="SESSION"/></TD>
</TR>

<TR>
<TD>SEMESTER CODE:</TD>
<TD><INPUT TYPE="TEXT" NAME="SEM_CODE"/></TD>
</TR>

<TR>
<TD>SUBJECT ORDER</TD>
<TD><INPUT TYPE="TEXT" NAME="SUBJE_ORDE"/></TD>
</TR>

<TR>
<TD>SUBJECT CODE</TD>
<TD><INPUT TYPE="TEXT" NAME="SUBJE_CODE"/></TD>
</TR>

<TR>
<TD>S_R_P</TD>
<TD><INPUT TYPE="TEXT" NAME="S_R_P"/></TD>
</TR>

<TR>
<TD>G_E</TD>
<TD><INPUT TYPE="TEXT" NAME="G_E"/></TD>
</TR>

<TR>
<TD>E NO.</TD>
<TD><INPUT TYPE="TEXT" NAME="ENO"/></TD>
</TR>

<TR>
<TD>FLAG</TD>
<TD><INPUT TYPE="TEXT" NAME="FLAG"/></TD>
</TR>

<TR>
<TD>VALUE</TD>
<TD><INPUT TYPE="TEXT" NAME="VALUE"/></TD>
</TR>

<TR>
<TD>LECTURE</TD>
<TD><INPUT TYPE="TEXT" NAME="LECTURE"/></TD>
</TR>

<TR>
<TD>THEORY</TD>
<TD><INPUT TYPE="TEXT" NAME="THEORY"/></TD>
</TR>

<TR>
<TD>PRACTICAL</TD>
<TD><INPUT TYPE="TEXT" NAME="PRACTICAL"/></TD>
</TR>

<TR>
<TD>WEIGHTAGE</TD>
<TD><INPUT TYPE="TEXT" NAME="WEIGHTAGE"/></TD>
</TR>

<TR>
<TD>OBSOLETE</TD>
<TD><INPUT TYPE="TEXT" NAME="OBSOLETE"/></TD>
</TR>

</TABLE>
<BR>
<INPUT TYPE="SUBMIT" VALUE="SUBMIT"/>
</FORM>
 </BODY>
</HTML>

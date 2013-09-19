<?php
include "connection.php";

print "<table align = center cellpadding = 10 border = 1 bordercolor = \"red\">
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
<th>EDIT</th>
<th>DELETE</th>

</tr>";

$sql = "select * from ecrd_mst";
$res = mysql_query($sql);
$counter=0;
while ($row = mysql_fetch_array($res))
{
	$counter++;
	print "
	<tr>
		<td>$counter</td>
		<td>$row[SESSION]</td>
		<td>$row[SEM_CODE]</td>
		<td>$row[SUBJE_ORDE]</td>
		<td>$row[SUBJE_CODE]</td>
		<td>$row[S_R_P]</td>
		<td>$row[G_E]</td>
		<td>$row[ENO]</td>
		<td>$row[FLAG]</td>
		<td>$row[VALUE]</td>
		<td>$row[LECTURE]</td>
		<td>$row[THEORY]</td>
		<td>$row[PRACTICAL]</td>
		<td>$row[WEIGHTAGE]</td>
		<td>$row[OBSOLETE]</td>
		<td><a href = \"edit.php? ID = $row[ID]\">EDIT</a></td>
		<td><a href = \"delete.php? ID = $row\" onclick = \" javascript:return confirm('Are you sure want to delete?');\">DELETE</a></td>
	</tr>
	";
}
	print "</table>";
	?>
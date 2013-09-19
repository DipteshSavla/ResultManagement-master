<?php
include "connection.php";

 $sql = mysql_query("SELECT * FROM ecrd_mst");
 $res = mysql_query($sql);
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

while($row = mysql_fetch_array($res))
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
  echo "<td><a href=\"edit.php? ID = $row[ID]\">Edit</a></td>";
  echo "<td><a href=\"delete.php?ID=$row\" onclick = \"javascript:return confirm('Are you sure you want to delete?');\">Delete</a></td>";
  echo "</tr>";
  }
echo "</table>";

mysql_close($con);
?>
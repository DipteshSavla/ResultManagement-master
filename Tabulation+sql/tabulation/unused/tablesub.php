<?php
include "ssconnection.php";
$result = mysql_query("SELECT * FROM esub_mst");
 echo "<table border='1'>
<tr>
<th>ID</th>
<th>SESSION</th>
<th>SEMESTER CODE</th>
<TH>SUBJECT CODE</TH>
<TH>SUBJECT LINK</TH>
<TH>SUBJECT NAME</TH>
<TH>TEACHER1</TH>
<TH>DEPARTMENT1</TH>
<TH>PSETTER1</TH>
<TH>PEVALUATOR1</TH>
<TH>MSUBMISSION1</TH>
<TH>TEACHER2</TH>
<TH>DEPARTMENT2</TH>
<TH>PSETTER2</TH>
<TH>PEVALUATOR2</TH>
<TH>MSUBMISSION2</TH>
<TH>TEACHER3</TH>
<TH>DEPARTMENT3</TH>
<TH>PSETTER3</TH>
<TH>PEVALUATOR3</TH>
<TH>MSUBMISSION3</TH>
<TH>TEACHER4</TH>
<TH>DEPARTMENT4</TH>
<TH>PSETTER4</TH>
<TH>PEVALUATOR4</TH>
<TH>MSUBMISSION4</TH>
<TH>TEACHER5</TH>
<TH>DEPARTMENT5</TH>
<TH>PSETTER5</TH>
<TH>PEVALUATOR5</TH>
<TH>MSUBMISSION5</TH>
</tr>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['ID'] . "</td>";
  echo "<td>" . $row['SESSION'] . "</td>";
  echo "<td>" . $row['SEM_CODE'] ."</td>";
  echo "<td>" . $row['SUBJE_CODE'] . "</td>";
  echo "<td>" . $row['SUB_LINK'] . "</td>";
  echo "<td>" . $row['SUBJE_NAME'] . "</td>";
  echo "<td>" . $row['TEACHER1'] . "</td>";
  echo "<td>" . $row['DEPT1'] . "</td>";
  echo "<td>" . $row['PSETTER1'] . "</td>";
  echo "<td>" . $row['PEVALUATOR1'] . "</td>";
  echo "<td>" . $row['MSUBMISSION1'] . "</td>";
    echo "<td>" . $row['TEACHER2'] . "</td>";
  echo "<td>" . $row['DEPT2'] . "</td>";
  echo "<td>" . $row['PSETTER2'] . "</td>";
  echo "<td>" . $row['PEVALUATOR2'] . "</td>";
  echo "<td>" . $row['MSUBMISSION2'] . "</td>";
    echo "<td>" . $row['TEACHER3'] . "</td>";
  echo "<td>" . $row['DEPT3'] . "</td>";
  echo "<td>" . $row['PSETTER3'] . "</td>";
  echo "<td>" . $row['PEVALUATOR3'] . "</td>";
  echo "<td>" . $row['MSUBMISSION3'] . "</td>";
    echo "<td>" . $row['TEACHER4'] . "</td>";
  echo "<td>" . $row['DEPT4'] . "</td>";
  echo "<td>" . $row['PSETTER4'] . "</td>";
  echo "<td>" . $row['PEVALUATOR4'] . "</td>";
  echo "<td>" . $row['MSUBMISSION4'] . "</td>";
    echo "<td>" . $row['TEACHER5'] . "</td>";
  echo "<td>" . $row['DEPT5'] . "</td>";
  echo "<td>" . $row['PSETTER5'] . "</td>";
  echo "<td>" . $row['PEVALUATOR5'] . "</td>";
  echo "<td>" . $row['MSUBMISSION5'] . "</td>";
  echo "<td><a href=\"editsub.php? ID = $row[ID]\">Edit</a></td>";
  echo "<td><a href=\"deletesub.php?ID=$row\" onclick = \"javascript:return confirm('Are you sure you want to delete?');\">Delete</a></td>";
  echo "</tr>";
  }
echo "</table>";
?>
<center><a href="sssubform.php">Insert another detail</a></center>
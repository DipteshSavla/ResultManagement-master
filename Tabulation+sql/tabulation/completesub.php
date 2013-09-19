<body bgcolor='#00ABCD'>
<?php
session_start();
include 'readsetup.php';
userexist();
$session=$_GET["SESSION"];
$semcode=$_GET["SEM_CODE"];

$dbarray=readsetupdb();
$dept=readdept($dbarray,'completesub.php');
echo "<table width=100% align='center' bgcolor='#F0F0F0'><tr><td><table align='center'><tr><td>SESSION = ".$session."</td></tr></table></td> &nbsp &nbsp &nbsp &nbsp <td><table align='center'><tr><td>SEMESTER CODE=".$semcode."</td></tr></table></td></tr></table>";
mysql_connect($dbarray['host'],$dbarray['user'],$dbarray['paswd']);
mysql_select_db($dbarray['dbname']);
$sql = "SELECT * FROM ESUB_MST WHERE (SESSION='".$session."' AND SEM_CODE='".$semcode."') AND (TEACHER1 is NULL OR TEACHER2 is NULL OR TEACHER3 is NULL or TEACHER4 is NULL OR TEACHER5 is NULL)";
$result = mysql_query($sql)or die("query execution problem");

$num=mysql_num_rows($result);


echo "<form action='completesubinsert.php?SESSION=".$session."&SEM_CODE=".$semcode."' method='post'>";

$k=0;

while($object=mysql_fetch_array($result)){
    
    $_SESSION["subcode".$k]=$object["SUBJE_CODE"];
    $_SESSION["subname".$k]=$object["SUBJE_NAME"];
    $k++;
    echo "<table border='1'>";
    echo "<tr>";
    echo "<td width='100'>".$object["SUBJE_CODE"]."</td><td width='350'>".$object["SUBJE_NAME"]."</td>";
    echo "<td><table>";
    
    
    echo "<tr><td>Teacher1 &nbsp <input type='text' name='teacher1[]'/></td>";
                        echo  "<td>&nbsp&nbspDepartment&nbsp<SELECT NAME='dept1[]'>";
                         echo "<OPTION SELECTED VALUE=''>SELECT...</OPTION>";  
				for($i=0; $i<count($dept);$i++)
				{
				echo "<OPTION value='".$dept[$i]."'>$dept[$i]</OPTION>";
				}
                                echo "</td>";
                                echo "<td> &nbsp&nbsp&nbsp Paper Setter <input type='checkbox' name='psetter1[]'/></td>";
                                echo "<td> &nbsp&nbsp&nbsp Marks Submitter <input type='checkbox' name='msubmitter1[]'/></td>";
                                echo "<td> &nbsp&nbsp&nbsp Paper Evaluator <input type='checkbox' name='pevaluator1[]'/></td>";
                                echo "</tr>";
    
    
    echo "<tr><td>Teacher2 &nbsp <input type='text' name='teacher2[]'</td>";
                        echo  "<td>&nbsp&nbspDepartment&nbsp<SELECT NAME='dept2[]'>";
                         echo "<OPTION SELECTED VALUE=''>SELECT...</OPTION>";  
				for($i=0; $i<count($dept);$i++)
				{
				echo "<OPTION>$dept[$i]</OPTION>";
				}
                                echo "</td>";
                                echo "<td> &nbsp&nbsp&nbsp Paper Setter <input type='checkbox' name='psetter2[]'/></td>";
                                echo "<td> &nbsp&nbsp&nbsp Marks Submitter <input type='checkbox' name='msubmitter2[]'/></td>";
                                echo "<td> &nbsp&nbsp&nbsp Paper Evaluator <input type='checkbox' name='pevaluator2[]'/></td>";
                                echo "</tr>";
    
    
    
    echo "<tr><td>Teacher3 &nbsp <input type='text' name='teacher3[]'/></td>";
                        echo  "<td>&nbsp&nbspDepartment&nbsp<SELECT NAME='dept3[]'>";
                         echo "<OPTION SELECTED VALUE=''>SELECT...</OPTION>";  
				for($i=0; $i<count($dept);$i++)
				{
				echo "<OPTION>$dept[$i]</OPTION>";
				}
                                echo "</td>";
                                echo "<td> &nbsp&nbsp&nbsp Paper Setter <input type='checkbox' name='psetter3[]'/></td>";
                                echo "<td> &nbsp&nbsp&nbsp Marks Submitter <input type='checkbox' name='msubmitter3[]'/></td>";
                                echo "<td> &nbsp&nbsp&nbsp Paper Evaluator <input type='checkbox' name='pevaluator3[]'/></td>";
                                echo "</tr>";
    
    
    
    echo "<tr><td>Teacher4 &nbsp <input type='text' name='teacher4[]'</td>";
                        echo  "<td>&nbsp&nbspDepartment&nbsp<SELECT NAME='dept4[]'>";
                         echo "<OPTION SELECTED VALUE=''>SELECT...</OPTION>";  
				for($i=0; $i<count($dept);$i++)
				{
				echo "<OPTION>$dept[$i]</OPTION>";
				}
                                echo "</td>";
                                echo "<td> &nbsp&nbsp&nbsp Paper Setter <input type='checkbox' name='psetter4[]'/></td>";
                                echo "<td> &nbsp&nbsp&nbsp Marks Submitter <input type='checkbox' name='msubmitter4[]'/></td>";
                                echo "<td> &nbsp&nbsp&nbsp Paper Evaluator <input type='checkbox' name='pevaluator4[]'/></td>";
                                echo "</tr>";
    
    
    echo "<tr><td>Teacher5 &nbsp <input type='text' name='teacher5[]'/></td>";
                        echo  "<td>&nbsp&nbspDepartment&nbsp<SELECT NAME='dept5[]'>";
                         echo "<OPTION SELECTED VALUE=''>SELECT...</OPTION>";  
				for($i=0; $i<count($dept);$i++)
				{
				echo "<OPTION>$dept[$i]</OPTION>";
				}
                                echo "</td>";
                                echo "<td> &nbsp&nbsp&nbsp Paper Setter <input type='checkbox' name='psetter5[]'/></td>";
                                echo "<td> &nbsp&nbsp&nbsp Marks Submitter <input type='checkbox' name='msubmitter5[]'/></td>";
                                echo "<td> &nbsp&nbsp&nbsp Paper Evaluator <input type='checkbox' name='pevaluator5[]'/></td>";
                                echo "</tr>";
    
    
    
    echo "</table></td>";
    echo "</tr>";
    echo "</table>";
    
}
echo "<table align='center'><tr><td><input type='submit' value='Submit'/></td></tr></table>";
echo "</form>";
?>
</body>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
 <HEAD>
  <TITLE> insert subjects-1 </TITLE>
  <META NAME="Generator" CONTENT="EditPlus">
  <META NAME="Author" CONTENT="">
  <META NAME="Keywords" CONTENT="">
  <META NAME="Description" CONTENT="">
 </HEAD>

<BODY>

<center>
<h1>Course Structure: Subject details Form</h1>

<?php 
session_start();
include 'readsetup.php';
userexist();
$dbarry    = readsetupdb();
$hostname  = $dbarry['host'];
$dbuser    = $dbarry['user'];;
$dbuserpwd = $dbarry['paswd'];
$dbname    = $dbarry['dbname'];



$objConnect=connection($dbarry,'subcrdinsert1.php');
$db_found=selectdb($dbarry,'subcrdinsert1.php');

if($_POST['SESSION'])
    $session=$_POST['SESSION'];
else {
    $session=$_GET['SESSION'];
}
if($_POST['SEM_CD'])
    $semcode=$_POST['SEM_CD'];
else {
        $semcode=$_GET['SEM_CODE'];
}

if(isset($_POST['WSMS']) && $_POST['WSMS'])
    $evenodd=$_POST['WSMS'];
else {
    if(isset($_SESSION['WSMS']))
    $evenodd=$_SESSION['WSMS'];
}



$_SESSION['SESSION']=$session;
$_SESSION['SEM_CODE']=$semcode;

if(isset($_SESSION['WSMS']) && !$_SESSION['WSMS'])
    $_SESSION['WSMS']=$evenodd;


#echo $_SESSION['DEPT'];echo "<br>";

#print_r($_SESSION);

?>

<script type="text/javascript">
      jsemcode = <?php echo $semcode; ?>;   
      document.cookie = "SEMCODE=" + jsemcode;  
</script>

<?php
if ($db_found and $session)
{
        
	$strSQL = "SELECT distinct A.SESSION, A.SEM_CODE, B.SUBJE_ORDE, A.SUBJE_CODE, A.SUBJE_NAME ";
	$strSQL = $strSQL . " FROM esub_mst AS A , ecrd_mst AS B";
        $strSQL = $strSQL . " where A.SESSION = '$session' and A.SEM_CODE='$semcode' ";
	$strSQL = $strSQL . " AND A.SESSION =  B.SESSION AND A.SEM_CODE = B.SEM_CODE ";
	$strSQL = $strSQL . " AND A.SUBJE_CODE = B.SUBJE_CODE ";
	$strSQL = $strSQL . " order by B.SUBJE_ORDE ";
        
                
        
	$objQuery = mysqlquery($strSQL,'subcrdinsert1.php');
        
        $num = mysql_num_rows($objQuery);
        
        echo "<b>SESSION</b>:".$session."  &nbsp   <b>SEMESTER CODE</b>:".$semcode."";
        
        
        if($num>0){
            echo "<table><tr><td>";
            echo "<table border='1'>";
            echo "<br>The Subjects already entered are:";// show previously inserted records
        ?>
        <tr>
    		<!--<th width="98"> <div align="center">SESSION </div></th>
    		<th width="198"> <div align="center">SEM_CODE </div></th>
                 -->
    		<th width="59"> <div align="center">SUBJECT CODE</div></th>
                <th width="59"> <div align="center">SUBJECT NAME</div></th>
                <th width="10"> <div align="center">ORDER</div></th>
                <th width="10"> <div align="center">SRP</div></th>
		<th width="10"> <div align="center">GE</div></th>
                <th width="10"> <div align="center">LEC</div></th>
		<th width="10"> <div align="center">THE</div></th>
                <th width="10"> <div align="center">PRA</div></th>
		<th width="10"> <div align="center">WEIGHT</div></th>
                
		
        </tr>
        <?php
        }
        else{
            echo "<br>No Subject is entered earlier. ";
        }
        
        while($obj=mysql_fetch_array($objQuery)){
       ?> 
                <tr>
                <td width="60"> <div align="center"><?php if(isset($obj["SUBJE_CODE"]))echo $obj["SUBJE_CODE"];?></div></td>
                <td width="450"> <div align="center"><?php if(isset($obj["SUBJE_NAME"])) echo $obj["SUBJE_NAME"];?></div></td>
                <td width="10"> <div align="center"><?php if(isset($obj["SUBJE_ORDE"])) echo $obj["SUBJE_ORDE"];?></div></td>
                <td width="10"> <div align="center"><?php if(isset($obj["S_R_P"])) echo $obj["S_R_P"];?></div></td>
		<td width="10"> <div align="center"><?php if(isset($obj["G_E"])) echo $obj["G_E"];?></div></td>
                <td width="10"> <div align="center"><?php if(isset($obj["LECTURE"])) echo $obj["LECTURE"];?></div></td>
		<td width="10"> <div align="center"><?php if(isset($obj["THEORY"])) echo $obj["THEORY"];?></div></td>
                <td width="10"> <div align="center"><?php if(isset($obj["PRACTICAL"])) echo $obj["PRACTICAL"];?></div></td>
		<td width="10"> <div align="center"><?php if(isset($obj["WEIGHTAGE"])) echo $obj["WEIGHTAGE"];?></div></td>
                </tr>
        <?php
        }
        
        
        echo "</table>";
        echo "</td><td>";
        if($num > 0){
        echo "<form action='completesub.php?SESSION=".$session."&SEM_CODE=".$semcode."' method='post'>";
        echo "<input type='submit' value='Complete the details of entered subjects '/> ";
        echo "</form>";
        }
        echo "</td></tr></table>";
        
        
	if ( 1 )
        {
            echo "<br>Enter the remaining subjects details<br>";
?>
               
	<form method="post" action="subcrdinsertrecords1.php">
            <table> <tr><td>
	<table width="600" border="1">
  	<tr>
    		<!--<th width="98"> <div align="center">SESSION </div></th>
    		<th width="198"> <div align="center">SEM_CODE </div></th>
                 -->
    		<th width="60"> <div align="center">SUBJECT CODE</div></th>
                <th width="450"> <div align="center">SUBJECT NAME</div></th>
                <th width="10"> <div align="center">ORDER</div></th>
                <th width="10"> <div align="center">SRP</div></th>
		<th width="10"> <div align="center">GE</div></th>
                <th width="10"> <div align="center">LEC</div></th>
		<th width="10"> <div align="center">THE</div></th>
                <th width="10"> <div align="center">PRA</div></th>
		<th width="10"> <div align="center">WEIGHT</div></th>
                
		
        </tr>
        <?php
        $linecount=0;
        $maxline = 10;
	while($linecount < $maxline )
	{
	?>
  	<tr>
    		<!--<td><input type="text" name="SESSION" value="<? echo $session; ?>"/></td>
    		<td><input type="text" name="SEMCODE" value="<? echo $semcode; ?>"/></td>
		-->
		<!--
		<td><input type="text" name="SESSION" value="<? echo $session; ?>"/></td>
    		<td><input type="text" name="SEMCODE" value="<? echo $semcode; ?>"/></td> 
		-->		

    		<td><input type="text" size="7" name="SUBJECT_CODE[]" value=""/></td>
   		<td><input type="text" size="60" name="SUBJECT_NAME[]" value=""/></td>
                <td><input type="text" size="5" name="SUBJECT_ORDER[]" value=""/></td>
   		<td><input type="text" size="3" name="SUBJECT_SRP[]" value=""/></td>
                <td><input type="text" size="2" name="SUBJECT_GE[]" value=""/></td>
   		<td><input type="text" size="3" name="SUBJECT_LECTURE[]" value=""/></td>
		<td><input type="text" size="3" name="SUBJECT_THEORY[]" value=""/></td>
   		<td><input type="text" size="3" name="SUBJECT_PRACTICAL[]" value=""/></td>
		<td><input type="text" size="4" name="SUBJECT_WEIGHTAGE[]" value=""/></td> 



         </tr>
        <?php
         $linecount = $linecount + 1;
         }  #of while
         ?>
        </table></td>
        <td>
            <input type="submit" value="Submit"/>
        </td>
                </tr></table>
<!--<input type="checkbox" name="PSETTER5" value="1"/>Papper Setter&nbsp<input type="checkbox" name="PEVALUATOR5" value="2"/>Paper Evaluator&nbsp<input type="checkbox" name="MSUBMISSION5" value="3"/>Marks Submission 
-->


</form>
<?php
} #of db found
else  #of if num=0
echo "All 10 records entered, EDIT or DELETE the records";
} #of if num=0


mysql_free_result($objQuery);
mysql_close($objConnect);
?>
</BODY>
</HTML>

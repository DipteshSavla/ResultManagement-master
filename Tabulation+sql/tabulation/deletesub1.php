<HTML>
 <HEAD>
  <TITLE> Delete subjects </TITLE>
  <META NAME="Generator" CONTENT="EditPlus">
  <META NAME="Author" CONTENT="">
  <META NAME="Keywords" CONTENT="">
  <META NAME="Description" CONTENT="">
 </HEAD>

 <BODY>
<?php

include 'readsetup.php';
userexist();
$dbarry    = readsetupdb();
$hostname  = $dbarry['host'];
$dbuser    = $dbarry['user'];;
$dbuserpwd = $dbarry['paswd'];
$dbname    = $dbarry['dbname'];
//echo $hostname;

$objConnect=connection($dbarry,'deletesub1.php');
$db_found=selectdb($dbarry,'deletesub1.php');
if(isset($_POST['SESSION']) && $_POST['SESSION'])
$session=$_POST['SESSION'];
else {
 $session=$_GET['SESSION'];
}

if(isset($_POST['SEM_CD']) && $_POST['SEM_CD'])
$semcode=$_POST['SEM_CD'];
else
$semcode=$_GET['SEM_CODE'];

//echo $session;
//echo $semcode;
if ($db_found)
{

        $strSQL = "SELECT * ";
        $strSQL = $strSQL . " FROM esub_mst where SESSION = '$session' and SEM_CODE='$semcode' ";
        $strSQL = $strSQL . " order by SUBJE_CODE ";
        $objQuery = mysqlquery($strSQL,'deletesub1.php');
        $num = mysql_num_rows($objQuery);
        
        echo $num." records are listed....<br>";
        
        if ($num > 0 )
        {
?>
     <form action="deletemulti.php?SESSION=<?php echo $session; ?>&SEM_CODE=<?php echo $semcode; ?>" method="post">
<table >
    <tr><td><table border="1">
  <tr>
    <th width="91"> <div align="center">ID </div></th>
    <th width="98"> <div align="center">SESSION </div></th>

    <th width="198"> <div align="center">SEM_CODE </div></th>

    <!--th width="198"> <div align="center">SUBJE_ORDER</div></th>
    -->
    <th width="59"> <div align="center">SUBJE_CODE</div></th>
    <!-- <th width="71"> <div align="center">SUB_LINK</div></th> -->
        <th width="300"> <div align="center">SUBJE_NAME</div></th>
                <th ><div align="center">Individual delete</div></th>
                <th ><div align="center">Multiple Delete</div></th>
    <!--<th width="71"> <div align="center">TEACHER1</div></th>^M
        <th width="71"> <div align="center">DEPT1</div></th>^M
        <th width="71"> <div align="center">PSETTER1</div></th>^M
        <th width="71"> <div align="center">PEVALUATOR1</div></th>^M
        <th width="71"> <div align="center">MSUBMISSION1</div></th>^M
        <th width="71"> <div align="center">TEACHER2</div></th>^M
        <th width="71"> <div align="center">DEPT2</div></th>^M
        <th width="71"> <div align="center">PSETTER2</div></th>^M
        <th width="71"> <div align="center">PEVALUATOR2</div></th>^M
        <th width="71"> <div align="center">MSUBMISSION2</div></th>^M
        <th width="71"> <div align="center">TEACHER3</div></th>^M
        <th width="71"> <div align="center">DEPT3</div></th>^M
        <th width="71"> <div align="center">PSETTER3</div></th>^M
 <th width="71"> <div align="center">PEVALUATOR3</div></th>^M
        <th width="71"> <div align="center">MSUBMISSION3</div></th>^M
        <th width="71"> <div align="center">TEACHER4</div></th>^M
        <th width="71"> <div align="center">DEPT4</div></th>^M
        <th width="71"> <div align="center">PSETTER4</div></th>^M
        <th width="71"> <div align="center">PEVALUATOR4</div></th>^M
        <th width="71"> <div align="center">MSUBMISSION4</div></th>^M
        <th width="71"> <div align="center">TEACHER5</div></th>^M
        <th width="71"> <div align="center">DEPT5</div></th>^M
        <th width="71"> <div align="center">PSETTER5</div></th>^M
        <th width="71"> <div align="center">PEVALUATOR5</div></th>^M
        <th width="71"> <div align="center">MSUBMISSION5</div></th>
       -->
  </tr>
<?php
while($objResult = mysql_fetch_array($objQuery))
{

?>
  <tr>
    
     <td><div align="center"><?php echo $objResult["ID"];?></div></td>
     <td><div align="center"><?php echo $objResult["SESSION"];?></div></td>
     <td><div align="center"><?php echo $objResult["SEM_CODE"];?></div></td>
    <!--td><?php echo $objResult["SUBJE_ORDER"];?></td>
    -->
    <td><?php echo $objResult["SUBJE_CODE"];?></td>
    <!-- <td><?php echo $objResult["SUB_LINK"];?></td>-->

    <td width="300"><?php echo $objResult["SUBJE_NAME"];?></td>
    <!--<td><?php echo $objResult["TEACHER1"];?></td>^M
        <td><?php echo $objResult["DEPT1"];?></td>^M
        <td><?php echo $objResult["PSETTER1"];?></td>^M
        <td><?php echo $objResult["PEVALUATOR1"];?></td>^M
        <td><?php echo $objResult["MSUBMISSION1"];?></td>^M
^M
        <td><?php echo $objResult["TEACHER2"];?></td>^M
        <td><?php echo $objResult["DEPT2"];?></td>^M
        <td><?php echo $objResult["PSETTER2"];?></td>^M
        <td><?php echo $objResult["PEVALUATOR2"];?></td>^M
        <td><?php echo $objResult["MSUBMISSION2"];?></td>^M
^M
        <td><?php echo $objResult["TEACHER3"];?></td>^M
        <td><?php echo $objResult["DEPT3"];?></td>^M
        <td><?php echo $objResult["PSETTER3"];?></td>^M
        <td><?php echo $objResult["PEVALUATOR3"];?></td>^M
        <td><?php echo $objResult["MSUBMISSION4"];?></td>^M
^M
        <td><?php echo $objResult["TEACHER5"];?></td>^M
        <td><?php echo $objResult["DEPT5"];?></td>^M
        <td><?php echo $objResult["PSETTER5"];?></td>^M
        <td><?php echo $objResult["PEVALUATOR5"];?></td>^M
        <td><?php echo $objResult["MSUBMISSION5"];?></td>
       -->
    <td><a href="deletesub2.php?SUBJE_CODE=<?php echo $objResult["SUBJE_CODE"];?>&SESSION=<?php echo $session; ?>">Delete</a></td>
        <!-- Comfirm delete button.^M
        <td align="center"><a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='deletecrd2.php?ID=<?php echo $objResult["SUBJE_CODE"];?>';}">Delete</a></td>^M
        -->
        <td>
            <input type="checkbox" name="<?php echo $objResult["ID"];?>" />
        </td>
  </tr>
<?php
}  #of while
}  # if $num > 0
else
{
   echo "No Record found!";
}
?>
    </TABLE></td>
<?php 
if($num > 0){
    ?>

 <td>
    <INPUT type="submit" name="submit" value="Delete checked"/>
</td>
</tr></table>
         </form>
<?php 
}
}  # of if found^M
?>

<?php
mysql_free_result($objQuery);
mysql_close($objConnect);
?>
 </BODY>
</HTML>
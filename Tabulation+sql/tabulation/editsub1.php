<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<?php include 'readsetup.php'; 
 userexist();
?>
<HTML>
 <HEAD>
  <TITLE> Edit list </TITLE>
  <META NAME="Generator" CONTENT="EditPlus">
  <META NAME="Author" CONTENT="">
  <META NAME="Keywords" CONTENT="">
  <META NAME="Description" CONTENT="">
 </HEAD>

 <BODY bgcolor="#00abcd">
  <?php
  $dbarray=  readsetupdb();
$host=$dbarray['host'];
$user=$dbarray['user'];
$pass=$dbarray['paswd'];
$db=$dbarray['dbname'];
$objConnect = mysql_connect($host,$user,$pass) or die(mysql_error());
$objDB = mysql_select_db($db);

if(isset($_POST["SESSION"]) )
$session=$_POST["SESSION"];
else if(isset($_GET["SESSION"]))
$session=$_GET["SESSION"];

if(isset($_POST["SEM_CD"]) && $_POST["SEM_CD"])
    $semcode=$_POST["SEM_CD"];
else if(isset($_GET["SEM_CODE"]))
    $semcode=$_GET["SEM_CODE"];



$strSQL = "SELECT * FROM esub_mst where session='".$session."' and sem_code='".$semcode."' order by ID";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
?>
<table  bgcolor="#00ABCE" width="600" border="1">
  <tr>
    <th width="91"> <div align="center">ID </div></th>
    <th width="98"> <div align="center">SESSION </div></th>
    <th width="198"> <div align="center">SEM_CODE </div></th>
    <th width="59"> <div align="center">SUBJE_CODE</div></th>
    <!--th width="71"> <div align="center">SUB_LINK</div></th-->
	<th width="71"> <div align="center">SUBJE_NAME<div></th>
       
                        
        <td><table border="1"><tr>
                    
        <td><table width="200"><tr>
        <th width="71"> <div align="center">TEACHER</div></th>
                </tr></table></td>
                
        <td><table width="200"><tr>
	<th width="71"> <div align="center">DEPT</div></th>
        </tr></table></td>
        
        <td><table width="100"><tr>
	<th width="71"> <div align="center">PSETTER</div></th>
        </tr></table></td>
        
        <td><table width="120"><tr>
	<th width="71"> <div align="center">PEVALUATOR</div></th>
        </tr></table></td>

        <td><table width="130"><tr>
	<th width="71"> <div align="center">MSUBMISSION</div></th>
        </tr></table></td>
        
                </tr></table></td>
	<!--th width="71"> <div align="center">TEACHER2</div></th>
	<th width="71"> <div align="center">DEPT2</div></th>
	<th width="71"> <div align="center">PSETTER2</div></th>
	<th width="71"> <div align="center">PEVALUATOR2</div></th>
	<th width="71"> <div align="center">MSUBMISSION2</div></th>
	<th width="71"> <div align="center">TEACHER3</div></th>
	<th width="71"> <div align="center">DEPT3</div></th>
	<th width="71"> <div align="center">PSETTER3</div></th>
	<th width="71"> <div align="center">PEVALUATOR3</div></th>
	<th width="71"> <div align="center">MSUBMISSION3</div></th>
	<th width="71"> <div align="center">TEACHER4</div></th>
	<th width="71"> <div align="center">DEPT4</div></th>
	<th width="71"> <div align="center">PSETTER4</div></th>
	<th width="71"> <div align="center">PEVALUATOR4</div></th>
	<th width="71"> <div align="center">MSUBMISSION4</div></th>
	<th width="71"> <div align="center">TEACHER5</div></th>
	<th width="71"> <div align="center">DEPT5</div></th>
	<th width="71"> <div align="center">PSETTER5</div></th>
	<th width="71"> <div align="center">PEVALUATOR5</div></th>
	<th width="71"> <div align="center">MSUBMISSION5</div></th-->
    <td><table><tr>
        <th width="30"> <div align="center">Edit </div></th>
            </tr></table></td>
              
    
  </tr>
<?php

while($objResult = mysql_fetch_array($objQuery))
{

?>
  <tr>
    <td><div align="center"><?php echo $objResult["ID"];?></div></td>
    <td><div align="center"><?php echo $objResult["SESSION"];?></div></td>
    <td><div align="center"><?php echo $objResult["SEM_CODE"];?></div></td>
    <td><div align="center"><?php echo $objResult["SUBJE_CODE"];?></div></td>
    <!--td><div align="center"><?php echo $objResult["SUB_LINK"];?></div></td-->
    <td><div align="center"><?php echo $objResult["SUBJE_NAME"];?></div></td>
    
    <td><table border='1'><tr>
    
    <td><table width="200"><tr>
                <td>
                    <tr><td><?php echo "Teacher1 :".$objResult["TEACHER1"]?></td></tr>
                    <tr><td><?php echo "Teacher2 :".$objResult["TEACHER2"]?></td></tr>
                    <tr><td><?php echo "Teacher3 :".$objResult["TEACHER3"]?></td></tr>
                    <tr><td><?php echo "Teacher4 :".$objResult["TEACHER4"]?></td></tr>
                    <tr><td><?php echo "Teacher5 :".$objResult["TEACHER5"]?></td></tr>
                </td>
    </tr></table></td>
    
    
     <td><table width="200"><tr>
                <td>
                        <tr><td><?php echo "Department1 :".$objResult["DEPT1"]?></td></tr>
                        <tr><td><?php echo "Department2 :".$objResult["DEPT2"]?></td></tr>
                        <tr><td><?php echo "Department3 :".$objResult["DEPT3"]?></td></tr>
                        <tr><td><?php echo "Department4 :".$objResult["DEPT4"]?></td></tr>
                        <tr><td><?php echo "Department5 :".$objResult["DEPT5"]?></td></tr>
                 </td>
    </tr></table></td>
    
     <td><table width="100"><tr>
                <td>
                    <tr><td><?php 
                                if($objResult["PSETTER1"])
                                    echo "yes";
                                else
                                    echo "No";
                        ?></td></tr>
                    
                    <tr><td><?php 
                                if($objResult["PSETTER2"])
                                    echo "yes";
                                else
                                    echo "No";
                        ?></td></tr>
                    
                    <tr><td><?php 
                                if($objResult["PSETTER3"])
                                    echo "yes";
                                else
                                    echo "No";
                        ?></td></tr>
                    
                    <tr><td><?php 
                                if($objResult["PSETTER4"])
                                    echo "yes";
                                else
                                    echo "No";
                        ?></td></tr>
                    
                    <tr><td><?php 
                                if($objResult["PSETTER5"])
                                    echo "yes";
                                else
                                    echo "No";
                        ?></td></tr>
                    
                </td>
        </tr></table></td>
        
        
        
         <td><table width="120"><tr>
                <td>
                    <tr><td><?php 
                                if($objResult["PEVALUATOR1"])
                                    echo "yes";
                                else
                                    echo "No";
                        ?></td></tr>
                    
                    <tr><td><?php 
                                if($objResult["PEVALUATOR2"])
                                    echo "yes";
                                else
                                    echo "No";
                        ?></td></tr>
                    
                    <tr><td><?php 
                                if($objResult["PEVALUATOR3"])
                                    echo "yes";
                                else
                                    echo "No";
                        ?></td></tr>
                    
                    <tr><td><?php 
                                if($objResult["PEVALUATOR4"])
                                    echo "yes";
                                else
                                    echo "No";
                        ?></td></tr>
                    
                    <tr><td><?php 
                                if($objResult["PEVALUATOR5"])
                                    echo "yes";
                                else
                                    echo "No";
                        ?></td></tr>
                    
                </td>
        </tr></table></td>
        
        
        
         <td><table width="130"><tr>
                <td>
                    <tr><td><?php 
                                if($objResult["MSUBMISSION1"])
                                    echo "yes";
                                else
                                    echo "No";
                        ?></td></tr>
                    
                    <tr><td><?php 
                                if($objResult["MSUBMISSION2"])
                                    echo "yes";
                                else
                                    echo "No";
                        ?></td></tr>
                    
                    <tr><td><?php 
                                if($objResult["MSUBMISSION3"])
                                    echo "yes";
                                else
                                    echo "No";
                        ?></td></tr>
                    
                    <tr><td><?php 
                                if($objResult["MSUBMISSION4"])
                                    echo "yes";
                                else
                                    echo "No";
                        ?></td></tr>
                    
                    <tr><td><?php 
                                if($objResult["MSUBMISSION5"])
                                    echo "yes";
                                else
                                    echo "No";
                        ?></td></tr>
                    
                </td>
        </tr></table></td>
                
            </tr></table></td>
        <!--td><div align="center"><?php echo $objResult["TEACHER1"];?></div></td>
	<td><div align="center"><?php echo $objResult["DEPT1"];?></div></td>
	<td><div align="center"><?php echo $objResult["PSETTER1"];?></div></td>
	<td><div align="center"><?php echo $objResult["PEVALUATOR1"];?></div></td>
	<td><div align="center"><?php echo $objResult["MSUBMISSION1"];?></div></td>

	<td><div align="center"><?php echo $objResult["TEACHER2"];?></div></td>
	<td><div align="center"><?php echo $objResult["DEPT2"];?></div></td>
	<td><div align="center"><?php echo $objResult["PSETTER2"];?></div></td>
	<td><div align="center"><?php echo $objResult["PEVALUATOR2"];?></div></td>
	<td><div align="center"><?php echo $objResult["MSUBMISSION2"];?></div></td>

	<td><div align="center"><?php echo $objResult["TEACHER3"];?></div></td>
	<td><div align="center"><?php echo $objResult["DEPT3"];?></div></td>
	<td><div align="center"><?php echo $objResult["PSETTER3"];?></div></td>
	<td><div align="center"><?php echo $objResult["PEVALUATOR3"];?></div></td>
	<td><div align="center"><?php echo $objResult["MSUBMISSION3"];?></div></td>

	<td><div align="center"><?php echo $objResult["TEACHER4"];?></div></td>
	<td><div align="center"><?php echo $objResult["DEPT4"];?></div></td>
	<td><div align="center"><?php echo $objResult["PSETTER4"];?></div></td>
	<td><div align="center"><?php echo $objResult["PEVALUATOR4"];?></div></td>
	<td><div align="center"><?php echo $objResult["MSUBMISSION4"];?></div></td>

	<td><div align="center"><?php echo $objResult["TEACHER5"];?></td>
	<td><div align="center"><?php echo $objResult["DEPT5"];?></div></td>
	<td><div align="center"><?php echo $objResult["PSETTER5"];?></div></td>
	<td><div align="center"><?php echo $objResult["PEVALUATOR5"];?></div></td>
	<td><div align="center"><?php echo $objResult["MSUBMISSION5"];?></div></td>
        </td-->
    <td align="center"><a href="editsub2.php?ID=<?php echo $objResult["ID"];?>&SESSION=<?php echo $objResult["SESSION"];?>&SEM_CODE=<?php echo $objResult["SEM_CODE"]?>">Edit</a></td>
  </tr>
<?php
}
?>
</table>
<?php
mysql_close($objConnect);
?>
 </BODY>
</HTML>

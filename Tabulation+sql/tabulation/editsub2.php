<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<?php include 'readsetup.php';
 userexist();
?>
<HTML>
 <HEAD>
  <TITLE> Edit list2 </TITLE>
  <META NAME="Generator" CONTENT="EditPlus">
  <META NAME="Author" CONTENT="">
  <META NAME="Keywords" CONTENT="">
  <META NAME="Description" CONTENT="">
 </HEAD>

 <BODY>
  

<?php
$dbarray =  readsetupdb();

$host=$dbarray['host'];
$user=$dbarray['user'];
$pass=$dbarray['paswd'];
$db=$dbarray['dbname'];


//echo $_GET["ID"];
//echo $_GET["SESSION"];
//echo $_GET["SEM_CODE"];

$objConnect = mysql_connect($host,$user,$pass) or die(mysql_error());

	mysql_select_db($db) or die("error in db selection");
        
	$strSQL = "SELECT * FROM ESUB_MST WHERE ID='".$_GET["ID"]."' and SESSION='".$_GET["SESSION"]."' and SEM_CODE='".$_GET["SEM_CODE"]."' ";
        
	$objQuery = mysql_query($strSQL) or die("error in query");
        
        
        $dept=readdept($dbarray,'completesub.php');
        
        ?>

<table width="600" border="1">
  <tr>
    <th width="91"> <div align="center">ID </div></th>
    <th width="98"> <div align="center">SESSION </div></th>
    <th width="198"> <div align="center">SEM_CODE </div></th>
    <th width="59"> <div align="center">SUBJE_CODE</div></th>
    <!--th width="71"> <div align="center">SUB_LINK</div></th-->
	<th width="150"> <div align="center">SUBJE_NAME<div></th>
       
                        
        <td><table border="1"><tr>
                    
        <td><table width="250"><tr>
        <th width="71"> <div align="center">TEACHER</div></th>
                </tr></table></td>
                
        <td><table width="100"><tr>
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
                
    
              
    
  </tr>
<?php
if($objResult = mysql_fetch_array($objQuery))
{
?>
<form action="editsub3.php?ID=<?php echo $objResult["ID"];?>&SESSION=<?php echo $objResult["SESSION"];?>&SEM_CODE=<?php echo $objResult["SEM_CODE"]?>" method="post">
  
  <tr>
    <td><div align="center"><?php echo $objResult["ID"];?></div></td>
    <td><div align="center"><?php echo $objResult["SESSION"];?></div></td>
    <td><div align="center"><?php echo $objResult["SEM_CODE"];?></div></td>
    <td><div align="center"><?php echo $objResult["SUBJE_CODE"];?></div></td>
    <!--td><div align="center"><?php echo $objResult["SUB_LINK"];?></div></td-->
    <!--td width="150"><?php echo "<input type='text' cols='10' rows='4' name='subname' value='".$objResult["SUBJE_NAME"]."'/> ";?></td-->
    <td width="150"><?php echo "<textarea cols='20' rows='1' name='sub_name' wrap>".$objResult["SUBJE_NAME"]."</textarea> ";?></td>
    <td><table border='1'><tr>
    
    <td><table width="250"><tr>
                <td>
                    <tr><td><?php echo "Teacher1 :<input type='text' name='teacher1' value='".$objResult["TEACHER1"]."'"?></td></tr>
                    <tr><td><?php echo "Teacher2 :<input type='text' name='teacher2' value='".$objResult["TEACHER2"]."'"?></td></tr>
                    <tr><td><?php echo "Teacher3 :<input type='text' name='teacher3' value='".$objResult["TEACHER3"]."'"?></td></tr>
                    <tr><td><?php echo "Teacher4 :<input type='text' name='teacher4' value='".$objResult["TEACHER4"]."'"?></td></tr>
                    <tr><td><?php echo "Teacher5 :<input type='text' name='teacher5' value='".$objResult["TEACHER5"]."'"?></td></tr>
                </td>
    </tr></table></td>
    
    
     <td><table width="100"><tr>
                <td>
                        <tr>
                        <td>
                        <SELECT NAME='dept1'>
                         <OPTION SELECTED VALUE='<?php echo $objResult["DEPT1"]; ?>' ><?php echo $objResult["DEPT1"]; ?></OPTION>
			<?php 
                                for($i=0; $i<count($dept);$i++)
				{
				echo "<OPTION value='".$dept[$i]."'>$dept[$i]</OPTION>";
				}
                               ?>
                         
                        </td>
                        </tr>
                        
                        <tr><td>
                                <SELECT NAME='dept2'>
                         <OPTION SELECTED VALUE='<?php echo $objResult["DEPT2"];?>'><?php echo $objResult["DEPT2"]; ?></OPTION>
			<?php 
                                for($i=0; $i<count($dept);$i++)
				{
				echo "<OPTION value='".$dept[$i]."'>$dept[$i]</OPTION>";
				}
                               ?>
                            </td></tr>

                                
                        <tr><td>
                                <SELECT NAME='dept3'>
                         <OPTION SELECTED VALUE='<?php echo $objResult["DEPT3"];?>'><?php echo $objResult["DEPT3"]; ?></OPTION>
			<?php 
                                for($i=0; $i<count($dept);$i++)
				{
				echo "<OPTION value='".$dept[$i]."'>$dept[$i]</OPTION>";
				}
                               ?>
                            </td></tr>

                                
                                <tr><td>
                                        
                                        <SELECT NAME='dept4'>
                         <OPTION SELECTED VALUE='<?php echo $objResult["DEPT4"];?>'><?php echo $objResult["DEPT4"]; ?></OPTION>
			<?php 
                                for($i=0; $i<count($dept);$i++)
				{
				echo "<OPTION value='".$dept[$i]."'>$dept[$i]</OPTION>";
				}
                               ?>

                                        
                                    </td></tr>
                                        
                        <tr><td>
                                
                                <SELECT NAME='dept5'>
                         <OPTION SELECTED VALUE='<?php echo $objResult["DEPT5"];?>'><?php echo $objResult["DEPT5"]; ?></OPTION>
			<?php 
                                for($i=0; $i<count($dept);$i++)
				{
				echo "<OPTION value='".$dept[$i]."'>$dept[$i]</OPTION>";
				}
                               ?>

                            </td></tr>
                 </td>
    </tr></table></td>
    
     <td><table width="100"><tr>
                <td>
                    <tr><td><?php echo "<input type='checkbox' name='psetter1' ";
                                if($objResult["PSETTER1"])
                                    echo "checked='checked' />";
                                else
                                    echo "/>";
                        ?></td></tr>
                    
                    <tr><td><?php echo "<input type='checkbox' name='psetter2' ";
                                if($objResult["PSETTER2"])
                                    echo "checked='checked' />";
                                else
                                    echo "/>";
                        ?></td></tr>
                    
                    <tr><td><?php echo "<input type='checkbox' name='psetter3' ";
                                if($objResult["PSETTER3"])
                                    echo "checked='checked' />";
                                else
                                    echo "/>";
                        ?></td></tr>
                    
                    <tr><td><?php echo "<input type='checkbox' name='psetter4' ";
                                if($objResult["PSETTER4"])
                                    echo "checked='checked' />";
                                else
                                    echo "/>";
                        ?></td></tr>
                    
                    <tr><td><?php echo "<input type='checkbox' name='psetter5' ";
                                if($objResult["PSETTER5"])
                                    echo "checked='checked' />";
                                else
                                    echo "/>";
                        ?></td></tr>
                    
                </td>
        </tr></table></td>
        
        
        
         <td><table width="120"><tr>
                <td>
                    <tr><td><?php echo "<input type='checkbox' name='pevaluator1' ";
                                if($objResult["PEVALUATOR1"])
                                    echo "checked='checked' />";
                                else
                                    echo "/>";
                        ?></td></tr>
                    
                    <tr><td><?php echo "<input type='checkbox' name='pevaluator2' ";
                                if($objResult["PEVALUATOR2"])
                                    echo "checked='checked' />";
                                else
                                    echo "/>";
                        ?></td></tr>
                    
                    <tr><td><?php echo "<input type='checkbox' name='pevaluator3' ";
                                if($objResult["PEVALUATOR3"])
                                    echo "checked='checked' />";
                                else
                                    echo "/>";
                        ?></td></tr>
                    
                    <tr><td><?php echo "<input type='checkbox' name='pevaluator4' ";
                                if($objResult["PEVALUATOR4"])
                                    echo "checked='checked' />";
                                else
                                    echo "/>";
                        ?></td></tr>
                    
                    <tr><td><?php echo "<input type='checkbox' name='pevaluator5' ";
                                if($objResult["PEVALUATOR5"])
                                    echo "checked='checked' />";
                                else
                                    echo "/>";
                        ?></td></tr>
                    
                </td>
        </tr></table></td>
        
        
        
         <td><table width="130"><tr>
                <td>
                    <tr><td><?php echo "<input type='checkbox' name='msubmission1' ";
                                if($objResult["MSUBMISSION1"])
                                    echo "checked='checked' />";
                                else
                                    echo "/>";
                        ?></td></tr>
                    
                    <tr><td><?php echo "<input type='checkbox' name='msubmission2' ";
                                if($objResult["MSUBMISSION2"])
                                    echo "checked='checked' />";
                                else
                                    echo "/>";
                        ?></td></tr>
                    
                    <tr><td><?php echo "<input type='checkbox' name='msubmission3' ";
                                if($objResult["MSUBMISSION3"])
                                    echo "checked='checked' />";
                                else
                                    echo "/>";
                        ?></td></tr>
                    
                    <tr><td><?php echo "<input type='checkbox' name='msubmission4' ";
                                if($objResult["MSUBMISSION4"])
                                    echo "checked='checked' />";
                                else
                                    echo "/>";
                        ?></td></tr>
                    
                    <tr><td><?php echo "<input type='checkbox' name='msubmission5' ";
                                if($objResult["MSUBMISSION5"])
                                    echo "checked='checked' />";
                                else
                                    echo "/>";
                        ?></td></tr>
                    
                </td>
        </tr></table></td>
                
            </tr></table></td>
</tr>
            <?php
}
?>
            
</table>     

     
     
         <INPUT type="submit" name="update" value="Update"/>
  
 </form>
     
<?php
	  mysql_close($objConnect);
?>
          </table>
 </BODY>
</HTML>

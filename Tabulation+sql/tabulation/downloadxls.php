<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<?php include 'readsetup.php';
userexist();
?> 
<HTML>
 <HEAD>
  <TITLE> view list </TITLE>
  <META NAME="Generator" CONTENT="EditPlus">
  <META NAME="Author" CONTENT="">
  <META NAME="Keywords" CONTENT="">
  <META NAME="Description" CONTENT="">
 </HEAD>

 <BODY>
    <!--
  <form name="frmSearch" method="get" action="<?=$_SERVER['SCRIPT_NAME'];?>">
  <table width="599" border="1">
    <tr>
      <th>Session
      <input name="SESSION" type="text" id="SESSION" value="<?=$_GET["SESSION"];?>">
      <input type="submit" value="Search"></th>
    </tr>
  </table>
</form>
  -->
<?php

//echo $_GET["SESSION"];
//echo $_POST["SESSION"];
//echo "look";
//echo $_POST["SEM_CODE"];
//echo "look";

if($_GET["SESSION"])
    $sessn=$_GET["SESSION"];
else
    $sessn=$_POST["SESSION"];
if($sessn){
    
    $dbarray = readsetupdb();    
    //$dbarry=connection($dbarray,"searchsub.php");
		$host=$dbarray['host'];
                $user=$dbarray['user'];
		$pass=$dbarray['paswd'];
		$db=$dbarray['dbname'];
                
                
                
    /*
    echo $dbarray[host];
    echo $dbarray[user];
    echo $dbarray[paswd];
    echo $dbarray[dbname];
    echo "ssp";
     */
                
                
                
	$objConnect = mysql_connect($host,$user,$pass) or die(mysql_error());
        //echo "connected to db";
	$objDB = mysql_select_db($db) or die("database  selection error");
	// Search By Name or Email
        //echo "selected db <BR>";
	//$strSQL = "SELECT * FROM esub_mst WHERE (SESSION LIKE '%".$sessn."%')";
        //echo $_POST["SEM_CD"];
        if($_GET["SEM_CD"])
            $semcd=$_GET["SEM_CD"];
        else
            $semcd=$_POST["SEM_CD"];
        $strSQL="SELECT * FROM ESUB_MST WHERE SESSION='".$sessn."'";
        $strSQL=$strSQL." and SEM_CODE='".$semcd."'";
        
        //$strSQL="SELECT * FROM ESUB_MST WHERE SEM_CODE='".$semcd."'";
        //$strSQL=$strSQL." order by SEM_CODE";
        //$objQuery=mysql_query("select * from esub_mst where session='1112'") or die("hello");
        //echo "executed";
        //mysql_query($strSQL) or die("sql error");
	$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
	?>
	<table width="600" align="center" border="1">
	  <tr>
		<th width="191"> <div align="center">Session</div></th>
		<th width="198"> <div align="center">Semester Code</div></th>
		<th width="898"> <div align="center">Subject Name</div></th>
		
	  </tr>
	<?php
	while($objResult = mysql_fetch_array($objQuery))
	{
	?>
	  <tr>
		<td><div align="center"><?=$objResult["SESSION"];?></div></td>
		<td><?=$objResult["SEM_CODE"];?></td>
		<td><?=$objResult["SUBJE_NAME"];?></td>
		
	  </tr>
	<?php
	}
        $fp=fopen('empty.txt','r');
        if($_GET["xls"]==="y"){
header("Content-Type:application/xls");
header("Content-Disposition:attachment;filename=search.xls");
// Notice we changed the file name and type
header("Content-Transfer-Encoding:binary");
fpassthru($fp);
        }
	?>
	</table>
	
	<?php
	mysql_close($objConnect);
}

?>
        
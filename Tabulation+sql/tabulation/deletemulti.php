<?php
include_once 'readsetup.php';
userexist();  
        $session=$_GET["SESSION"];
        $semcode=$_GET["SEM_CODE"];


        $dbarry= readsetupdb();
  
  
	$objConnect = mysql_connect($dbarry['host'],$dbarry['user'],$dbarry['paswd']) or die(mysql_error());
        connection($dbarry, "deletemulti.php");
	$objDB = mysql_select_db($dbarry['dbname']) or die("error in db selection");
        
        $strSQL = "SELECT * ";
        $strSQL = $strSQL . "FROM esub_mst WHERE SESSION = '".$session."' and SEM_CODE='".$semcode."' ";
        $strSQL = $strSQL . "order by SUBJE_CODE ";
        
        $objQuery = mysql_query($strSQL)or die("error in selection query");
        //$objQuery = mysqlquery($strSQL,'deletemulti.php');
        $rec=0;
        while($objResult =  mysql_fetch_array($objQuery)){
            if(isset($_POST[$objResult["ID"]]) && $_POST[$objResult["ID"]]){                
                $sql="DELETE FROM ESUB_MST WHERE SESSION='".$session."' and SEM_CODE='".$semcode."' and ID='".$objResult["ID"]."'";
                mysql_query($sql) or die("error in delete query");
                $num=  mysql_affected_rows();
                $rec=$rec+$num;
            }            
         }
         if(isset($num) && $num >0)
         echo $rec." records deleted.....";
         
         mysql_free_result($objQuery);
         mysql_close($objConnect);
?>

<form action="deletesub1.php?SESSION=<?php echo $session; ?>&SEM_CODE=<?php echo $semcode; ?>" method="post">
    <input type="submit" name="submit" value="Back to Delete list"/>
</form>
<?php
include "readsetup.php";
userexist();
$dbarry    = readsetupdb();
$hostname  = $dbarry[host];
$dbuser    = $dbarry[user];;
$dbuserpwd = $dbarry[paswd];
$dbname    = $dbarry[dbname];

$objConnect=connection($dbarry,'subcrdinsertrecords1.php');
$db_found=selectdb($dbarry,'subcrdinsertrecords1.php');

if ($db_found)
{
session_start();
#$session=$_COOKIE[SESSION]; #$_POST['SESSION'];
#$semcode=$_COOKIE[SEMCODE]; #$_POST['SEMCODE'];
$subcode=$_POST['SUBJECT_CODE'];
$subname=$_POST['SUBJECT_NAME'];
$suborder=$_POST['SUBJECT_ORDER'];
$srp 	 =$_POST['SUBJECT_SRP'];
$ge  	 =$_POST['SUBJECT_GE'];
$lecture =$_POST['SUBJECT_LECTURE'];
$theory  =$_POST['SUBJECT_THEORY'];
$practical=$_POST['SUBJECT_PRACTICAL'];
$weightage=$_POST['SUBJECT_WEIGHTAGE'];
$maxcount=count($subcode);
$linecount=0;
$session=$_SESSION['SESSION'];
$semcode=$_SESSION['SEM_CODE'];
#print_r($_COOKIE);

//echo $session;
//echo $semcode;
//echo $lecture;
//echo $theory;
//echo $maxcount;

while($linecount < $maxcount)
{
    $testQuery="SELECT * FROM ESUB_MST WHERE ID='$linecount' or (SUBJE_CODE='$subcode' AND SUBJE_NAME='$subname') or SUBJE_ORDE='$suborder'";
    
    if($subcode[$linecount]!="" and $subname["$linecount"]!=""){
        if(mysql_num_rows($testQuery)===0){
     
	$sql=" INSERT INTO esub_mst (ID,SESSION,SEM_CODE,SUBJE_CODE,SUBJE_NAME) "; 
        $sql = $sql . " VALUES('$linecount','$session','$semcode','$subcode[$linecount]', ";
        $sql = $sql . " '$subname[$linecount]') ";
	#echo $subcode[$linecount]; 
	#echo $subname[$linecount];       
	#echo $sql;	
	$objquery=mysqlinsert($sql,'subcrdinsertrecords1.php');

	$sql=" INSERT INTO ecrd_mst (ID,SESSION,SEM_CODE,SUBJE_CODE,SUBJE_ORDE,"; 
        $sql = $sql . "S_R_P, G_E,LECTURE,THEORY,PRACTICAL,WEIGHTAGE) "; 
        $sql = $sql . " VALUES('$linecount','$session','$semcode','$subcode[$linecount]', ";
        $sql = $sql . " '$suborder[$linecount]', ";
        $sql = $sql . " '$srp[$linecount]', '$ge[$linecount]','$lecture[$linecount]', ";
        $sql = $sql . " '$theory[$linecount]', '$practical[$linecount]', ";
        $sql = $sql . " '$weightage[$linecount]') ";
	#echo $subcode[$linecount]; 
	#echo $subname[$linecount];       
	#echo $sql;	
	$objquery=mysqlinsert($sql,'subcrdinsertrecords1.php');

	echo "Record at ".$linecount." is entered successfully<br>";
        }
        else{
               echo "Info at record ".$linecount." is not valid. Make sure either ID or (SUBJE_CODE and SUBJECT NAME) or SUBJECT ORDER are VALID AND NOT MATCHED with existing records<BR>";
               }
    }  
    else{
            echo "Info at record ".$linecount." is not sufficient. Make sure ID,SUBJE_CODE and SEM NAME are VALID OR NOT REPEATED AND ENTERED.<BR>";
    }
   
    $linecount = $linecount + 1;
} #of while loop
} #db found
?>

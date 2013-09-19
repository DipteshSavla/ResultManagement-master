<?php
session_start();
include "readsetup.php";
include "strlibrary.php";
$dbarry    = readsetupdb();
$hostname  = $dbarry[host];
$dbuser    = $dbarry[user];;
$dbuserpwd = $dbarry[paswd];
$dbname    = $dbarry[dbname];

$objConnect=connection($dbarry,'subcrdinsertrecords1.php');
$db_found=selectdb($dbarry,'subcrdinsertrecords1.php');
//echo "2nd";
if ($db_found)
{
#session_start();
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
//print_r($subcode);
//#echo $session;
//echo $semcode;
//#echo $lecture;
//echo "Max count  ";
//echo sizeof($subcode);
//echo "Line count  ";
//echo $linecount;
$reccount = 0;
while($linecount < $maxcount)
{

	//echo "  just before if";
        //echo $subcode[$linecount];
       
        if (strlen(trim($subcode[$linecount]))) {
	$reccount = $reccount + 1;
	$sql=" INSERT INTO esub_mst (SESSION,SEM_CODE,SUBJE_CODE,SUBJE_NAME) "; 
        $sql = $sql . " VALUES('$session','$semcode','$subcode[$linecount]', ";
        $sql = $sql . " '$subname[$linecount]') ";
	#echo $subcode[$linecount]; 
	#echo $subname[$linecount];       
	//echo $sql;	
	$objquery=mysqlinsert($dbarry,$sql,'subcrdinsertrecords1.php');

	$sql=" INSERT INTO ecrd_mst (SESSION,SEM_CODE,SUBJE_CODE,SUBJE_ORDE,"; 
        $sql = $sql . "S_R_P, G_E,LECTURE,THEORY,PRACTICAL,WEIGHTAGE) "; 
        $sql = $sql . " VALUES('$session','$semcode','$subcode[$linecount]', ";
        $sql = $sql . " '$suborder[$linecount]', ";
        $sql = $sql . " '$srp[$linecount]', '$ge[$linecount]','$lecture[$linecount]', ";
        $sql = $sql . " '$theory[$linecount]', '$practical[$linecount]', ";
        $sql = $sql . " '$weightage[$linecount]') ";
	#echo $subcode[$linecount]; 
	#echo $subname[$linecount];       
	echo $sql;	
	$objquery=mysqlinsert($dbarry,$sql,'subcrdinsertrecords1.php');
        } #of if !isempty() block
	$linecount = $linecount + 1;


} #of while loop
		echo "Successful insertion of " . strval($reccount). " records to subject & credit master files";
} #db found
?>

<?php
include 'readsetup.php';
session_start();
userexist();
//$i=0;

$session=$_GET["SESSION"];
$semcode=$_GET["SEM_CODE"];

//echo $session;
//echo $semcode;



$subcode=$_SESSION["subcode".$i];
$subname=$_SESSION["subname".$i];


$teacher1=$_POST["teacher1"];
$teacher2=$_POST["teacher2"];
$teacher3=$_POST["teacher3"];
$teacher4=$_POST["teacher4"];
$teacher5=$_POST["teacher5"];

$dept1= $_POST["dept1"];
$dept2= $_POST["dept2"];
$dept3= $_POST["dept3"];
$dept4= $_POST["dept4"];
$dept5= $_POST["dept5"];

$psetter1=$_POST["psetter1"];
$psetter2=$_POST["psetter2"];
$psetter3=$_POST["psetter3"];
$psetter4=$_POST["psetter4"];
$psetter5=$_POST["psetter5"];

$msubmitter1=$_POST["msubmitter1"];
$msubmitter2=$_POST["msubmitter2"];
$msubmitter3=$_POST["msubmitter3"];
$msubmitter4=$_POST["msubmitter4"];
$msubmitter5=$_POST["msubmitter5"];


$pevaluator1=$_POST["pevaluator1"];
$pevaluator2=$_POST["pevaluator2"];
$pevaluator3=$_POST["pevaluator3"];
$pevaluator4=$_POST["pevaluator4"];
$pevaluator5=$_POST["pevaluator5"];

$i=0;

while($teacher1[$i] != null  and $dept1[$i] != null){
    $temp='y';
        $subcode=$_SESSION["subcode".$i];
        $subname=$_SESSION["subname".$i];
        //echo $i."<br>";
        //echo $session."<br>";
        //echo $semcode."<br>";
        //echo $subcode."<br>";
        //echo $subname."<br>";
        //echo $teacher1[$i]."<br>";
        
        $sql="UPDATE ESUB_MST SET ";
        $sql=$sql."teacher1='".$teacher1[$i]."', teacher2='".$teacher2[$i]."' , teacher3='".$teacher3[$i]."' , teacher4='".$teacher4[$i]."' , teacher5='".$teacher5[$i]."' ";
        $sql=$sql.", dept1='".$dept1[$i]."' , dept2='".$dept2[$i]."' , dept3='".$dept3[$i]."' , dept4='".$dept4[$i]."' , dept5='".$dept5[$i]."'";
        
        
        if($psetter1[$i])
            $sql=$sql.", psetter1='1'";
        if($psetter2[$i])
            $sql=$sql.", psetter2='1'";
        if($psetter3[$i])
            $sql=$sql.", psetter3='1'";
        if($psetter4[$i])
            $sql=$sql.", psetter4='1'";
        if($psetter5[$i])
            $sql=$sql.", psetter5='1'";
        
        
        if($msubmitter1[$i])
            $sql=$sql.", MSUBMISSION1='1'";
        if($msubmitter2[$i])
            $sql=$sql.", MSUBMISSION2='1'";
        if($msubmitter3[$i])
            $sql=$sql.", MSUBMISSION3='1'";
        if($msubmitter4[$i])
            $sql=$sql.", MSUBMISSION4='1'";
        if($msubmitter5[$i])
            $sql=$sql.", MSUBMISSION5='1'";
        
        if($pevaluator1[$i])
            $sql=$sql.", PEVALUATOR1='1'";
        if($pevaluator2[$i])
            $sql=$sql.", PEVALUATOR2='1'";
        if($pevaluator3[$i])
            $sql=$sql.", PEVALUATOR3='1'";
        if($pevaluator4[$i])
            $sql=$sql.", PEVALUATOR4='1'";
        if($pevaluator5[$i])
            $sql=$sql.", PEVALUATOR5='1'";
        
        $sql=$sql." WHERE SESSION='".$session."' AND SEM_CODE='".$semcode."' AND SUBJE_CODE='".$subcode."' AND SUBJE_NAME='".$subname."'";
        
        $dbarray=  readsetupdb();
        connection($dbarray,"completesubinsert.php");
        mysql_select_db($dbarray[dbname]) or die("db error");
        
                
        $result =  mysql_query($sql);
        if($n=mysql_affected_rows()){
            echo $n." record";
            if($n>1)
            echo "s";
        echo " updated successfully.......!";
            }
            
            
        //echo "<br>no. of rows affected is ".mysql_affected_rows();        
$i++;        

}

if(temp!='y'){
            echo "No valid input<br><br>";
            }
echo "<table>";
echo "<form action='subcrdinsert1.php?SESSION=".$session."&SEM_CODE=".$semcode."' method='post'>";
echo "<input type='submit' name='submit' value='return' />";
echo "</form>";
echo "</table>";

?>

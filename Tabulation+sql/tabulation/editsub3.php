<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
 <HEAD>
  <TITLE> update page </TITLE>
  <META NAME="Generator" CONTENT="EditPlus">
  <META NAME="Author" CONTENT="">
  <META NAME="Keywords" CONTENT="">
  <META NAME="Description" CONTENT="">
 </HEAD>

 <BODY>
  <?php
  include_once 'readsetup.php';
  userexist();
  $dbarray=  readsetupdb();
 $host=$dbarray['host'];
$user=$dbarray['user'];
$pass=$dbarray['paswd'];
$db=$dbarray['dbname'];

$id=$_GET["ID"];
$session=$_GET["SESSION"];
$semcode=$_GET["SEM_CODE"];


	$objConnect = mysql_connect($host,$user,$pass) or die(mysql_error());
	$objDB = mysql_select_db($db);

        

        
        
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



if(isset($_POST["psetter1"])) $psetter1=$_POST["psetter1"];
if(isset($_POST["psetter2"])) $psetter2=$_POST["psetter2"];
if(isset($_POST["psetter3"])) $psetter3=$_POST["psetter3"];
if(isset($_POST["psetter4"])) $psetter4=$_POST["psetter4"];
if(isset($_POST["psetter5"])) $psetter5=$_POST["psetter5"];

if(isset($_POST["msubmission1"])) $msubmitter1=$_POST["msubmission1"];
if(isset($_POST["msubmission2"])) $msubmitter2=$_POST["msubmission2"];
if(isset($_POST["msubmission3"])) $msubmitter3=$_POST["msubmission3"];
if(isset($_POST["msubmission4"])) $msubmitter4=$_POST["msubmission4"];
if(isset($_POST["msubmission5"])) $msubmitter5=$_POST["msubmission5"];


if(isset($_POST["pevaluator1"])) $pevaluator1=$_POST["pevaluator1"];
if(isset($_POST["pevaluator2"])) $pevaluator2=$_POST["pevaluator2"];
if(isset($_POST["pevaluator3"])) $pevaluator3=$_POST["pevaluator3"];
if(isset($_POST["pevaluator4"])) $pevaluator4=$_POST["pevaluator4"];
if(isset($_POST["pevaluator5"])) $pevaluator5=$_POST["pevaluator5"];


if($teacher1 != null  and $dept1 != null){

        
        
        $sql="UPDATE ESUB_MST SET ";
        $sql=$sql."teacher1='".$teacher1."', teacher2='".$teacher2."' , teacher3='".$teacher3."' , teacher4='".$teacher4."' , teacher5='".$teacher5."' ";
        $sql=$sql.", dept1='".$dept1."' , dept2='".$dept2."' , dept3='".$dept3."' , dept4='".$dept4."' , dept5='".$dept5."'";
        
        
        if(isset($psetter1) && $psetter1)
            $sql=$sql.", psetter1='1'";
        if(isset($psetter2) && $psetter2)
            $sql=$sql.", psetter2='1'";
        if(isset($psetter3) && $psetter3)
            $sql=$sql.", psetter3='1'";
        if(isset($psetter4) && $psetter4)
            $sql=$sql.", psetter4='1'";
        if(isset($psetter5) && $psetter5)
            $sql=$sql.", psetter5='1'";
        
        
        if(isset($msubmitter1) && $msubmitter1)
            $sql=$sql.", MSUBMISSION1='1'";
        if(isset($msubmitter2) && $msubmitter2)
            $sql=$sql.", MSUBMISSION2='1'";
        if(isset($msubmitter3) && $msubmitter3)
            $sql=$sql.", MSUBMISSION3='1'";
        if(isset($msubmitter4) && $msubmitter4)
            $sql=$sql.", MSUBMISSION4='1'";
        if(isset($msubmitter5) && $msubmitter5)
            $sql=$sql.", MSUBMISSION5='1'";
        
        if(isset($pevaluator1) && $pevaluator1)
            $sql=$sql.", PEVALUATOR1='1'";
        if(isset($pevaluator2) && $pevaluator2)
            $sql=$sql.", PEVALUATOR2='1'";
        if(isset($pevaluator3) && $pevaluator3)
            $sql=$sql.", PEVALUATOR3='1'";
        if(isset($pevaluator4) && $pevaluator4)
            $sql=$sql.", PEVALUATOR4='1'";
        if(isset($pevaluator5) && $pevaluator5)
            $sql=$sql.", PEVALUATOR5='1'";
        
        $sql=$sql." WHERE SESSION='".$session."' AND SEM_CODE='".$semcode."' AND ID='".$id."'";
        
        
        //echo $sql;
	$objQuery = mysql_query($sql) or die("error in update query");
        $num=  mysql_affected_rows();
        //echo "count is ".$num;
}
	if($objQuery)
	{
                echo "<br>".$num." record updated successfully.....!<br>";
		echo "Save completed.";
	}
	else
	{
		echo "Error Save [".$str."]";
	}
	mysql_close($objConnect);
        
        echo "<form action='editsub1.php?SESSION=".$session."&SEM_CODE=".$semcode."' method='post'>";
        echo "<input type='submit' name='submit' value='return to edit page'/>";
        echo "</form>";
?>

 </body>
</html>

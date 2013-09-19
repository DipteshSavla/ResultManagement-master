<?php 
include_once 'readsetup.php';
userexist();


if(!isset($_GET['exist']) && isset($_SESSION['type']) && $_SESSION['type']=='m'){
echo "<form action='master_useradd.php?exist=1' method='post'><br/><br/>
<table>
<tr><td>Username&nbsp</td><td><input type='text' name='user' /><br/></td></tr>
<tr><td>Password&nbsp</td><td><input type='password' name='pwd'/><br/></td></tr>
<tr><td>Phone&nbsp</td><td><input type='text' name='phone'/><br/></tr>
<tr><td>Security Question&nbsp</td><td><input type='text' name='sq' />[ you can change the security question ]<br/></tr>
<tr><td>Answer&nbsp</td><td><input type='answer' name='ans'/></tr>
<tr><td><input type='submit' value='Submit'/></td></tr>
</form>

";
}
else{
$dbarray=  readsetupdb();
mysql_connect($dbarray['host'],$dbarray['user'],$dbarray['paswd']) or die('not copnnected');
mysql_select_db($dbarray['db_login']) or die('not selected db');
$user=$_POST['user'];
//echo $user;
$pwd=$_POST['pwd'];
$pwd=hash('md5',$pwd);
//echo $pwd;
//echo '<br/>';
$phone=$_POST['phone'];
//echo $phone;
$sq=$_POST['sq'];
//echo $sq;
$ans=$_POST['ans'];
$ans=  strtolower($ans);
$ans=hash('md5',$ans);
//echo $ans;

$type='a';
//echo $type;
$query="insert into logdetails values('$user','$pwd','$type','$phone','$sq','$ans')";
//$query="describe logdetails";
//echo $query;
$result=mysql_query($query) or die('not successful insertion');
//$result=mysql_query('insert into logdetails values("sspjhh","ssp","m","876756","sq","sa")') or die('not successful insertion');
//echo mysql_num_rows($result);
echo "successfully registered<br/>";
echo '<br/><a href="login.php">Goto login page</a>';
}
?>

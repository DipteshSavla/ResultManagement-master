<?php
include_once 'connection.php';
echo "forwarded to test login <br />";

$uname=$_POST['uname'];
$pwd=$_POST['pwd'];
echo $uname;
echo "<br />";
echo $pwd;
echo "<br />";
//fgets(STDIN);
//$query="select * from login where username='$uname' and passwd='$pwd'";
//$query = "select * from login";
//$result = mysql_query($query); //or die('Could not set query..'. mysql_error());
//$rexist = mysql_fetch_row($result));
//echo "username= " . $rexist[0] . "<br />";
//$num = mysql_num_rows($result);
//echo "Number of records: ";
//echo $num;
//if(mysql_num_rows($result) == 1){
//    session_start();
//    echo "logged in";
//    $_SESSION['user'] = $uname;
	// header("Location: teacher_home.php");
//}
//else{
//    $_SESSION['loginerror'] = "login or password";
//    //header("Location: login.php");
//}


?>

<?php
function getinput($msg)
   fwrite(STDIN, "msg:");
    $varin = trim(fgets(STDIN));
    return $varin;
}
?>

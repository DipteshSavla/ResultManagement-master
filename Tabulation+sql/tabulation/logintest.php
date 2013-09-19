
<?php
include 'readsetup.php';

$dbarry = readsetupdb();
$hostname  = $dbarry['host'];
$dbuser    = $dbarry['user'];;
$dbuserpwd = $dbarry['paswd'];
$dbname    = $dbarry['dbname'];
$caller    = 'logintest.php';
#echo $hostname;
#echo $dbuser;
#echo $dbuserpwd;
#echo $dbname;

#$include_once 'connection.php';
$objConnect=connection($dbarry,'logintest.php');
#echo "forwarded to test login";

$uname=$_POST['uname'];
echo $uname;
$pwd=$_POST['pwd'];
$pwd=hash('md5',$pwd);
echo $pwd;
#echo $uname;
#echo $pwd;
//$db_found=selectdb($dbarry,'logintest.php'); //mysql_select_db($dbname) or die ("could not select database\n");
$db_found=mysql_select_db('login');
if ($db_found)
{
        
	$query="select user,pwd,type from logdetails where user='$uname' and pwd='$pwd'";
        echo $query;
        $result = mysql_query($query) or die('no result');
	$num = mysql_num_rows($result);
	if ($num > 0 )
        {
            
        while ($row = mysql_fetch_assoc($result)) {
    		//echo $row["username"];
    		//echo $row["first_nm"];
    		//echo $row["last_nm"];
                //echo $row["type"];
		//echo $row["admin_level"];
                $t=$row["type"];
       }	//of while 
       session_start();
       
       $_SESSION['user']=$uname;
       $_SESSION['type']=$t;
	switch ($t) {
    	case "m":
        	//echo "i equals 0";
                header("Location: master_login_input.php");
        	break;
    	case "a":
        	//echo "i equals 1";
                header("Location: subcrdmaster.php");
        	break;
    	case "t":
		header("Location: subcrdmaster.php");
        	//echo "i equals 2";
        	break;
	}

        
?>
	<html>        
	<head>

        <h1>LOGIN SUCCESSFUL</h1>
        </head>
	<body>
        
	
	
        
	<!--//$result=mysql_query($query) or die('Could not set query results..'.mysql_error());
	//while($db_field = mysql_fetch_assoc($result))
        //{
	//	print $db_field['username']. "<br>";
        //    	print $db_field['passwd'].   "<br>";
        //}
	//$exist=  mysql_fetch_array($result);
	//$rexist = mysql_fetch_row($result);

	//echo " username= ". $rexist[1] . "<br />";

	//$num=mysql_num_rows($result);
	//echo "hello";
	//echo $num;
	//if(mysql_num_rows($result)==1){
    	//session_start();
        --->
	</body>
        </html>
<?php
	//echo "logged in";
    	//$_SESSION['user']=$uname;
        mysql_free_result($result);
	mysql_close($objConnect);
        //header("Location: teacher_home.php");
        } //end of if
	
}
else{
       $_SESSION['loginerror']="login or password";
       header("Location: login.php");
}

?>

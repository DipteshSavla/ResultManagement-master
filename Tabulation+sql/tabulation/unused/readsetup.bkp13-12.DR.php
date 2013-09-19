<?php
function readsetupdb()
{
$handle = fopen("setupdb.ini","r") or die("Could no open setupdb.ini");
$getarec = fscanf($handle,"%s %s %s\n");
      list($h1,$h2,$hostname) = $getarec;
$getarec = fscanf($handle,"%s %s %s\n");
      list($h1,$h2,$username) = $getarec;
$getarec = fscanf($handle,"%s %s %s\n");
      list($h1,$h2,$passwd) = $getarec;
$getarec = fscanf($handle,"%s %s %s\n");
      list($h1,$h2,$dbname) = $getarec;
      $dbarray[host]   = $hostname;
      $dbarray[user]   = $username;
      $dbarray[paswd]  = $passwd;
      $dbarray[dbname] = $dbname;
/*
echo $dbarray[host];
echo $dbarray[user];
echo $dbarray[paswd];
echo $dbarray[dbanem];
*/
return $dbarray;
fclose($handle);
}

function connection($dbarry,$caller) 
{
$user = $dbarry[user];
$pass = $dbarry[paswd];
$db   = $dbarry[dbname];


$db_link = mysql_connect($dbarry[host],$user,$pass) or die ("Caller: ".$caller.

"<br> Called: ". "readsetup.php->connection".
"<br>hostname: ".$dbarry[host].
"<br>user: ".    $dbarry[user].
"<br>database: ". $dbarry[dbname].
"<br>could not connect to the server <br>");

return $db_link;
}
function selectdb($dbarry,$caller)
{
//echo $dbarry[dbname];
$db_found=mysql_select_db($dbarry[dbname]) or die ("Caller: ".$caller.
"<br> Called: ". "readsetup.php->selectdb".
"<br> Database: ".$dbarry[dbname].
"<br> Could not select database");
return $db_found;
}
function mysqlquery($strSQL,$caller)
{
$result=mysql_query($strSQL) or die("Caller: ".$caller.
"<br> Called: ". "readsetup.php->mysqlquery".
"<br>hostname: ".$dbarry[host].
"<br>user: ".    $dbarry[user].
"<br>database: ". $dbarry[dbname].
"<br>query string: ". $strSQL.
"<br>could not find the query string.<br>");
return $result;
}

function mysqlinsert($dbarry,$strSQL,$caller)
{
#echo $caller;
$result=mysql_query($strSQL) or die("Caller: ".$caller.
"<br> Called: ". "readsetup.php->mysqlinsert".
"<br>hostname: ".$dbarry[host].
"<br>user: ".    $dbarry[user].
"<br>database: ". $dbarry[dbname].
"<br>query string: ". $strSQL.
"<br>could not insert the query string.<br>");
return $result;
}
function mysql_fetch_all_assoc($res,$caller) {
   while($row=mysql_fetch_assoc($res)) {
       $return[] = $row;
   }
   return $return;
}

function readsemnamedept($dbarry,$dept,$caller)
{
#echo "welcome: " . $dept . "<br>";
$objConnect=connection($dbarry,$caller);
$db_found=selectdb($dbarry,$caller);

if ($db_found)
{
	#echo "within db found";
	$strSQL = "SELECT A.SEM_CODE, A.SEM_NAME, A.DEPT";
	$strSQL = $strSQL . " FROM esem_mst AS A";
        $strSQL = $strSQL . " where A.DEPT = '$dept' ";
        #and A.OBSOLATE = FALSE ";
	$strSQL = $strSQL . " order by A.DEPT, A.SEM_CODE";
        #echo "after num ". $strSQL;
	$objQuery = mysqlquery($strSQL,$caller);
        $num = mysql_num_rows($objQuery);
       
	#echo "after num ". $num;

	if ($num != 0 )
        {
        $deptsem[0][0]=$num;
        $i=1;
        while ($result=mysql_fetch_assoc($objQuery)) 
        {
        $deptsem[$i][0]=$result['DEPT'];
        $deptsem[$i][1]=$result['SEM_CODE']; 
        $deptsem[$i][2]=$result['SEM_NAME'];
        #      $semcode[]=$result['SEM_CODE'];
        #      $semname[]=$result['SEM_NAME'];
        #      $dept[]=$result['DEPT'];
	#echo "within while loop<br>";
        #echo $deptsem[$i][0]."<br>";
	#echo $deptsem[$i][1]."<br>";
	#echo $deptsem[$i][2]."<br>";
        $i=$i+1;
        }
        return $deptsem;
} #of num
return 0;        
} #of db_found
return 0;
} #of function read_semname

function readdept($dbarry,$caller)
{


$objConnect=connection($dbarry,$caller);
$db_found=selectdb($dbarry,$caller);


if ($db_found)
{
	
	$strSQL = "SELECT DISTINCT A.DEPT";
	$strSQL = $strSQL . " FROM esem_mst AS A";
        $strSQL = $strSQL . " order by A.DEPT";
        
	$objQuery = mysqlquery($strSQL,$caller);
        $num = mysql_num_rows($objQuery);
	
        if ($num != 0 )
        {
        $i=0;
        while ($result=mysql_fetch_array($objQuery,MYSQL_NUM))
	{
        
	$dept[$i]=$result[0]; 
        
        #printf("Dept = %s\n",$dept[$i]);
        $i=$i+1;
        }
        
        return $dept;
} #of $num
} #OF db_found       
} # of readdept
function test()
{
echo "<br> within test <br>";
}
?>

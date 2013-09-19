<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login</title>
</head>
<?php
//echo $_SERVER['HTTP_REFERER'];
session_start();
if(isset($_SESSION['user']) && isset($_SESSION['type']) && $_SESSION['type']='m'){
        header("Location:master_login_input.php");    
}
?>
<body bgcolor="#3399FF">
   
<table width="100%" bgcolor="#CCCCCC" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    
    <td width="418" valign="top"><table width="100%" bgcolor="#3399FF" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="273" height="76">&nbsp;</td>
        <td colspan="2" align="left" valign="top"><font color="#990000"  size="+5" style="font-family:Geneva, Arial, Helvetica, sans-serif" face="Geneva, Arial, Helvetica, sans-serif">INDIAN SCHOOL OF MINES, DHANBAD </font></td>
        <td width="26">&nbsp;</td>
      </tr>
      <tr>
        <td height="74">&nbsp;</td>
        <td width="132">&nbsp;</td>
        <td width="920" align="left" valign="top"><font color="#990000"  size="+5" style="font-family:Geneva, Arial, Helvetica, sans-serif" face="Geneva, Arial, Helvetica, sans-serif">Student Result Management  </font> </td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
   
    <td valign="top"><table width="100%" bgcolor="#99CCFF" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="350" height="250" valign="top"><table width="350" bgcolor="#99CCFF" border="0" cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr>
            <td width="100" height="250">&nbsp;</td>
          </tr>
        </table>        </td>
        <td width="1">&nbsp;</td>
        <td width="300" valign="top">
             
            <table width="300" bgcolor="#99CCFF" border="0" cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr height="50">
            <td width="71" height="19"></td>
              
           
             
           
              <td width="74">&nbsp;</td>
              <td width="134">&nbsp;</td>
              <td width="10">&nbsp;</td>
              <td width="11">&nbsp;</td>
              </tr>
          <form  method="post" action="./logintest.php">
          <tr>
            <td height="40"></td>
              <td valign="top"><label><font size="+1">Username</font></label> </td>
              
            <td colspan="2" valign="top">
                <input type="text" name="uname" value="" /></td>
              <td>&nbsp;</td>
            </tr>
          <tr>
            <td height="20"></td>
             
            <td></td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              </tr>
          <tr>
            <td height="26"></td>
              <td valign="top"><label><font size="+1">Password</font></label></td>
              
            <td colspan="2" valign="top"> <input type="password" name="pwd" value="" /></td>
                <td>&nbsp;</td>
              </tr>
          <tr height="20">
            <td height="0"></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      <td></td>
		      </tr>
          <tr>
            <td height="34"></td>
              <td><?php 
              if(isset($_SESSION['loginerror']))
            echo $_SESSION['loginerror'];
          ?></td>
			  
              <td valign="top"><input type="submit" value="Login"/>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              </tr>
                </form>
          <tr>
            <td height="22"></td>
            <td></td>
            <td valign="top"><a href="password_reset.php"><font color="#0000FF">Password Recovery</font></a></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td height="29"></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td height="33"></td>
            <td>&nbsp;</td>
            <!--td valign="top"><a href="teacher_register.php"><font color="#0000FF">Register</font></a></td-->
            <td></td>
            <td></td>
          </tr>
          
          
          </table>
           
        </td>
		</tr>
    </table>
    </td>
  </tr>
  
  <tr>
    <td height="58" colspan="2" valign="top"><table width="100%" bgcolor="#3399CC" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable--> 
      <tr>
        <td width="628" height="58">&nbsp;</td>
        </tr>
    </table></td>
  </tr>
</table>

</body>
</html>

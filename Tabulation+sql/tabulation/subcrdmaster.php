<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
 <HEAD>
  <TITLE> Menu </TITLE>
  <META NAME="Generator" CONTENT="EditPlus">
  <META NAME="Author" CONTENT="">
  <META NAME="Keywords" CONTENT="">
  <META NAME="Description" CONTENT="">
 </HEAD>

 
<?php
include_once 'readsetup.php';
userexist();
?>
 
 <BODY >
<SCRIPT type="text/javascript">
function semcodeselection(callprog)
{
var caller,date, expires;
//document.write(callprog);
caller = callprog; //"deletesub1.php";
//document.write(caller);
/*
if (days) {
   date = new Date();
   date.setTime(date.getTime()+(days*24*60*60*1000));
   expires = "; expires=" + date.toGMTString();
          }else{
   expires = "";
  }
*/
document.cookie = "CALLER=" + caller;
//+ expires + "; path=/";

//writeCookie('CALLER=', caller,3);

//1'=,/jdocument.write(caller);

window.location='subselectionform0.php';
}
</SCRIPT>


<div id="container" style="width:100%px;height=100%px">
<div id="header" style="background-color:#FFA500;">
<h1 style="margin-bottom:0;"><center>Course Management System</center></h1></div>
<div id="menu" style="background-color:#FFD700;height:400px;width:100px;float:left;">
<b>Menu</b><br />
<input type="button" onclick="semcodeselection('subcrdinsert1.php')" value="Insert" style="width:100px"><br />
<input type="button" onclick="semcodeselection('editsub1.php')" value="Edit" style="width:100px"><br />
<!--<input type="button" onclick="parent.location='editbulksub.php'" value="Bulk Edit" style="width:100px"><br/> -->
<input type="button" onclick="semcodeselection('searchsub.php')" value="Display" style="width:100px"><br/>
<input type="button" onclick="semcodeselection('deletesub1.php')" value="Delete" style="width:100px"></div>

<div id="content" style="background-color:#EEEEEE;height:400px;width:100%px;float:top;">
<center><h2>Subject and Credit Master</h2></center></div>
<br>
<a href="subcrdmaster.php">Home</a>

<div id="footer" style="background-color:#FFA500;clear:both;text-align:center;">
Copyright � 2012 www.ismdhanbad.ac.in</div>

</div>
 </BODY>
</HTML>

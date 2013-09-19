


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
 <HEAD>
  <TITLE> New Document </TITLE>
  <META NAME="Generator" CONTENT="EditPlus">
  <META NAME="Author" CONTENT="">
  <META NAME="Keywords" CONTENT="">
  <META NAME="Description" CONTENT="">

<SCRIPT type="text/javascript">
function call_deletesub1(callprog)
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

window.location='subselectionform1.php';
}
</SCRIPT>
 </HEAD>
<BODY>



<div id="container" style="width:1000px;height=400px">

<div id="header" style="background-color:#FFA500;">
<h1 style="margin-bottom:0;"><center>Course Management System</center></h1></div>
  <div id="menu" style="background-color:#FFD700;height:400px;width:100px;float:left;">
<b>Menu</b><br />
<input type="button" onclick="call_deletesub1('sssubform.php')" value="Insert"><br />
<input type="button" onclick="call_deletesub1('editsub1.php')" value="Int Edit"><br />
<input type="button" onclick="call_deletesub1('editsubcrd1.php')" value="Int Edit"><br />
<input type="button" onclick="call_deletesub1('editbulksub.php')" value="Bulk Edit"><br/>
<input type="button" onclick="call_deletesub1('searchsub.php')" value="Display"><br/>
<!--<input type="button" onclick="'subselectionform1.php'" value="Delete" ></div>
-->
<input type="button" onclick="call_deletesub1('deletesub1.php')" value="Delete"></div>
<div id="content" style="background-color:#EEEEEE;height:400px;width:800px;float:top;">
<center><h2>Subject Master</h2></center></div>
<br>
<a href="index.php">Home</a>

<div id="footer" style="background-color:#FFA500;clear:both;text-align:center;">
Copyright © 2012 www.ismdhanbad.ac.in</div>

</div>

</BODY>
</HTML>

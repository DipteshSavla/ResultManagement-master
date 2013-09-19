<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
 <HEAD>
  <TITLE> New Document </TITLE>
  <META NAME="Generator" CONTENT="EditPlus">
  <META NAME="Author" CONTENT="">
  <META NAME="Keywords" CONTENT="">
  <META NAME="Description" CONTENT="">
 </HEAD>

 <BODY>
  <form name="view" method="post" action="<?=$_SERVER['SCRIPT_NAME'];?>">
  <table>
  <tr>
  <td>Session</td>
  <td><input name="SESSION" type="text" id="SESSION" value="<?= $_GET["SESSION"];?>"></td>
  </tr>

  <tr>
  <td>Semester Code</td>
  <td><input name="SEM_CODE" type="text" id="SEM_CODE" value="<?= $_GET["SEM_CODE"];?>"></td>
  </tr>
  </table>
  <input type="submit" value="Submit">
  </form>
  <? if(($_GET["SESSION"]!="") && ($_GET["SEM_CODE"]!=""))
  {
	  $user="exmadministrator";
	  $pass="project12";
	  $db="tabulation";
	  $objconnect=mysql_connect("172.26.4.19",$user,$pass) or die (mysql_error());
	  $objdb=mysql_select_db($db);
	  //search using sesion and sem_code
	  $strsql="SELECT * FROM ecrd_mst WHERE(SESSION LIKE '%".$_GET["SESSION"]."%' AND SEM_CODE LIKE '%".$_GET["SEM_CODE"]."%')";
	  $objquery=mysql_query($strsql) or die ("Error Query[".$strsql."]");
	  ?>
	  <table>
	  <tr>
	  <th><div align="center">Session</div></th>
	  <th><div align="center">Semester Code</div></th>
	  <th><div align="center">Lecture</div></th>
	  <th><div align="center">Theory</div></th>
	  <th><div align="center">Practical</div></th>
	  </tr>
	  <? 
		  while($objresult=mysql_fetch_array($objquery))
	  {
		  ?>
		  <tr>
		  <td><div align="center"><?=$objresult["SESSION"];?></div></td>
		  <td><div align="center"><?=$objresult["SEM_CODE"];?></div></td>
		  <td><div align="center"><?=$objresult["LECTURE"];?></div></td>
		  <td><div align="center"><?=$objresult["THEORY"];?></div></td>
		  <td><div align="center"><?=$objresult["PRACTICAL"];?></div></td>
		  </tr>
		  <?
	  }
		  ?>
		  </table>
		  <?
			  mysql_close($objconnect);
  }
		  ?>
 </BODY>
</HTML>

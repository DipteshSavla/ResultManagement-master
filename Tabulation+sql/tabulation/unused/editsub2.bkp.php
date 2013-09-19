<?php include 'readsetup.php';?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
 <HEAD>
  <TITLE> Edit list2 </TITLE>
  <META NAME="Generator" CONTENT="EditPlus">
  <META NAME="Author" CONTENT="">
  <META NAME="Keywords" CONTENT="">
  <META NAME="Description" CONTENT="">
 </HEAD>

 <BODY>
  <form action="editsub3.php?ID=<?php echo $_GET["ID"];?>" name="frmEdit" method="post">

<?php 
$dbarray =  readsetupdb();

$host=$dbarray[host];
$user=$dbarray[user];
$pass=$dbarray[paswd];
$db=$dbarray[dbname];
	$objConnect = mysql_connect($host,$user,$pass) or die(mysql_error());
	$objDB = mysql_select_db($db) or die("error in db choose");
	$strSQL = "SELECT * FROM esub_mst WHERE ID = '".$_GET["ID"]."' ";
	$objQuery = mysql_query($strSQL) or die("error in query");
	$objResult = mysql_fetch_array($objQuery);
        //echo "hello";
        echo $mysql_num_rows($objResult);
	if(!$objResult)
	{
		echo "Not found ID=".$_GET["ID"];
	}
	else
	{
             
	?>
	<table width="600" border="1">
	  <tr>
		<th width="91"> <div align="center">ID </div></th>
		<th width="98"> <div align="center">SESSION </div></th>
    <th width="198"> <div align="center">SEM_CODE </div></th>
    <th width="59"> <div align="center">SUBJE_CODE</div></th>
    <th width="71"> <div align="center">SUB_LINK</div></th>
	<th width="71"> <div align="center">SUBJE_NAME<div></th>
	<th width="71"> <div align="center">TEACHER1</div></th>
	<th width="71"> <div align="center">DEPT1</div></th>
	<th width="71"> <div align="center">PSETTER1</div></th>
	<th width="71"> <div align="center">PEVALUATOR1</div></th>
	<th width="71"> <div align="center">MSUBMISSION1</div></th>
	<th width="71"> <div align="center">TEACHER2</div></th>
	<th width="71"> <div align="center">DEPT2</div></th>
	<th width="71"> <div align="center">PSETTER2</div></th>
	<th width="71"> <div align="center">PEVALUATOR2</div></th>
	<th width="71"> <div align="center">MSUBMISSION2</div></th>
	<th width="71"> <div align="center">TEACHER3</div></th>
	<th width="71"> <div align="center">DEPT3</div></th>
	<th width="71"> <div align="center">PSETTER3</div></th>
	<th width="71"> <div align="center">PEVALUATOR3</div></th>
	<th width="71"> <div align="center">MSUBMISSION3</div></th>
	<th width="71"> <div align="center">TEACHER4</div></th>
	<th width="71"> <div align="center">DEPT4</div></th>
	<th width="71"> <div align="center">PSETTER4</div></th>
	<th width="71"> <div align="center">PEVALUATOR4</div></th>
	<th width="71"> <div align="center">MSUBMISSION4</div></th>
	<th width="71"> <div align="center">TEACHER5</div></th>
	<th width="71"> <div align="center">DEPT5</div></th>
	<th width="71"> <div align="center">PSETTER5</div></th>
	<th width="71"> <div align="center">PEVALUATOR5</div></th>
	<th width="71"> <div align="center">MSUBMISSION5</div></th>
	  </tr>
          
	  <tr>
		<td><div align="center"><input type="text" name="txtID" size="5" value="<?php echo $objResult["ID"];?>"></div></td>
		<td><input type="text" name="txtSESSION<?php echo $i;?>" size="5" value="<?php echo $objResult["SESSION"];?>"></td>
    <td><input type="text" name="txtSEM_CODE<?php echo $i;?>" size="5" value="<?php echo $objResult["SEM_CODE"];?>"></td>
    <td align="right"><input type="text" name="txtSUBJE_CODE<?php echo $i;?>" size="5" value="<?php echo $objResult["SUBJE_CODE"];?>"></td>
    <td align="right"><input type="text" name="txtSUB_LINK<?php echo $i;?>" size="5" value="<?php echo $objResult["SUB_LINK"];?>"></td>
	<td align="right"><input type="text" name="txtSUBJE_NAME<?php echo $i;?>" size="15" value="<?php echo $objResult["SUBJE_NAME"];?>"></td>
	<td align="right"><input type="text" name="txtTEACHER1<?php echo $i;?>" size="5" value="<?php echo $objResult["TEACHER1"];?>"></td>
	<td align="right"><input type="text" name="txtDEPT1<?php echo $i;?>" size="5" value="<?php echo $objResult["DEPT1"];?>"></td>
	<td align="right"><input type="text" name="txtPSETTER1<?php echo $i;?>" size="5" value="<?php echo $objResult["PSETTER1"];?>"></td>
	<td align="right"><input type="text" name="txtPEVALUATOR1<?php echo $i;?>" size="5" value="<?php echo $objResult["PEVALUATOR1"];?>"></td>
	<td align="right"><input type="text" name="txtMSUBMISSION1<?php echo $i;?>" size="5" value="<?php echo $objResult["MSUBMISSION1"];?>"></td>

<td align="right"><input type="text" name="txtTEACHER2<?php echo $i;?>" size="5" value="<?php echo $objResult["TEACHER2"];?>"></td>
	<td align="right"><input type="text" name="txtDEPT2<?php echo $i;?>" size="5" value="<?php echo $objResult["DEPT2"];?>"></td>
	<td align="right"><input type="text" name="txtPSETTER2<?php echo $i;?>" size="5" value="<?php echo $objResult["PSETTER2"];?>"></td>
	<td align="right"><input type="text" name="txtPEVALUATOR2<?php echo $i;?>" size="5" value="<?php echo $objResult["PEVALUATOR2"];?>"></td>
	<td align="right"><input type="text" name="txtMSUBMISSION2<?php echo $i;?>" size="5" value="<?php echo $objResult["MSUBMISSION2"];?>"></td>

	<td align="right"><input type="text" name="txtTEACHER3<?php echo $i;?>" size="5" value="<?php echo $objResult["TEACHER3"];?>"></td>
	<td align="right"><input type="text" name="txtDEPT3<?php echo $i;?>" size="5" value="<?php echo $objResult["DEPT3"];?>"></td>
	<td align="right"><input type="text" name="txtPSETTER3<?php echo $i;?>" size="5" value="<?php echo $objResult["PSETTER3"];?>"></td>
	<td align="right"><input type="text" name="txtPEVALUATOR3<?php echo $i;?>" size="5" value="<?php echo $objResult["PEVALUATO3"];?>"></td>
	<td align="right"><input type="text" name="txtMSUBMISSION3<?php echo $i;?>" size="5" value="<?php echo $objResult["MSUBMISSION3"];?>"></td>

	<td align="right"><input type="text" name="txtTEACHER4<?php echo $i;?>" size="5" value="<?php echo $objResult["TEACHER4"];?>"></td>
	<td align="right"><input type="text" name="txtDEPT4<?php echo $i;?>" size="5" value="<?php echo $objResult["DEPT4"];?>"></td>
	<td align="right"><input type="text" name="txtPSETTER4<?php echo $i;?>" size="5" value="<?php echo $objResult["PSETTER4"];?>"></td>
	<td align="right"><input type="text" name="txtPEVALUATOR4<?php echo $i;?>" size="5" value="<?php echo $objResult["PEVALUATOR4"];?>"></td>
	<td align="right"><input type="text" name="txtMSUBMISSION4<?php echo $i;?>" size="5" value="<?php echo $objResult["MSUBMISSION4"];?>"></td>

	<td align="right"><input type="text" name="txtTEACHER5<?php echo $i;?>" size="5" value="<?php echo $objResult["TEACHER5"];?>"></td>
	<td align="right"><input type="text" name="txtDEPT5<?php echo $i;?>" size="5" value="<?php echo $objResult["DEPT5"];?>"></td>
	<td align="right"><input type="text" name="txtPSETTER5<?php echo $i;?>" size="5" value="<?php echo $objResult["PSETTER5"];?>"></td>
	<td align="right"><input type="text" name="txtPEVALUATOR5<?php echo $i;?>" size="5" value="<?php echo $objResult["PEVALUATOR5"];?>"></td>
	<td align="right"><input type="text" name="txtMSUBMISSION5<?php echo $i;?>" size="5" value="<?php echo $objResult["MSUBMISSION5"];?>"></td>
	  </tr>
	  </table>
	  <input type="submit" name="submit" value="submit">
	  <?php
	  }
	  mysql_close($objConnect);
?>
</form>
 </BODY>
</HTML>

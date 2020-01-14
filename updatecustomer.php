<html>
<head><title>update</title></head>
<body>
<?php
if(isset($_POST['update']))
{
$conn=mysql_connect("localhost","root","");
if(!$conn)
{
   die('could not connect');
}
$c_id=$_POST['c_id'];
$a_id=$_POST['a_id'];
$sql="update customer set a_id='$a_id' where c_id='$c_id'";
mysql_select_db('gasagency');
$ret=mysql_query($sql,$conn);
if(!$ret)
{
  die('could not update data:');
  }
  
 echo "updated successfully\n";
 echo "<a href='viewcustomer.php'>view record</a>";
 
 mysql_close($conn);
 }
 else
 {
 ?>
 <form method="post" action="">
 <table width "400" border="0" cellspacing="1" cellpadding="2">
 <tr>
 <td width="100">c_id</td>
 <td><input name="c_id" type="text" id="c_id"</td>
 </tr>
 <tr>
 <td width="100">a_id</td>
 <td><input name="a_id" type="text" id="a_id"</td>
</tr>
<tr>
<td width="100"></td>
<td></td>
</tr>
<td width="100"></td>
<td>
<input name="update" type="submit" id="update" value="UPDATE">
</td>
</tr>
</table>
</form>
<?php
}
?>
</body>
</html>
<html>
<body>
<?php
	$dbh=mysqli_connect('localhost','root','','power_plant') or die(mysqli_error($dbh));
	mysqli_select_db($dbh,'power_plant') or die (mysqli_error($dbh));

	
	$p_id=$_REQUEST['p_id'];
	$p_amount=$_REQUEST['p_amount'];
	$p_date=$_REQUEST['p_date'];
	$c_id=$_REQUEST['c_id'];

	$query1="INSERT INTO payment VALUES('$p_id','$p_amount','$p_date','$c_id')";
	$result=mysqli_query($dbh,$query1) or die(mysqli_error($dbh));
	echo "data inserted successfully!!!!";


	$var=mysqli_query($dbh,"SELECT * from payment");
	echo"<table border size=1>";
	echo"<tr><th>p_id</th> <th>p_amount</th> <th>p_date</th> <th>c_id</th></tr>";
	while ($arr=mysqli_fetch_row($var))
	{
		echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2] </td> <td>$arr[3] </td> </tr>";
	}
	echo"</table>";
?>
<a href="first.html" >Home</a>

</form>
</body>
</html>
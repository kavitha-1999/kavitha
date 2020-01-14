<html>
<body>
<?php
	$dbh=mysqli_connect('localhost','root','','power_plant') or die(mysqli_error($dbh));
	mysqli_select_db($dbh,'power_plant') or die (mysqli_error($dbh));
	
     $c_id=$_post['c_id'];
     $c_name=$_post['c_name'];
	 $a_id=$_post['a_id'];
	 $email=$_post['email'];

	$query1="INSERT INTO customer1 [c_id,c_name,a_id,email] values {'$c_id','$c_name','$a_id','$email'}";
	$result=mysqli_query($dbh,$query1) or die(mysqli_error($dbh));
	echo "data inserted successfully!!!!";


	$var=mysqli_query("SELECT * from customer1");
	echo"<table border size=1>";
	echo"<tr><th>c_id</th> <th>c_name</th> <th>a_id</th> <th>email</th></tr>";
	while ($arr=mysqli_fetch_row($var))
	{
		echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2] </td> <td>$arr[3] </td> </tr>";
	}
	echo"</table>";
?>

<a href="frist.html"><font color="black" face="Gill Sans MT" size=4>click here for homepage</font></a>
</form>
</body>
</html>
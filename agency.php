<html>
<head>
	<title>petrol Management System</title>
	<link rel="stylesheet" type="text/css" href="style11.css">
</head>
<body style="background-image:url('paymphp.jpg')" >

<?php
	$dbh=mysqli_connect('localhost','root','','power_plant') or die(mysqli_error($dbh));
	mysqli_select_db($dbh,'power_plant') or die (mysqli_error($dbh));

	$a_id=$_REQUEST['a_id'];
	$a_name=$_REQUEST['a_name'];
	$email=$_REQUEST['email'];
	$location=$_REQUEST['location'];

	$query1="INSERT INTO agency VALUES('$a_id','$a_name','$email','$location')";
	$result=mysqli_query($dbh,$query1) or die(mysqli_error($dbh));
	echo "data inserted successfully!!!!";


	$var=mysqli_query($dbh,"SELECT * from agency");
	echo"<table border size=1>";
	echo"<tr><th>a_id</th> <th>o_name</th> <th>email</th> <th>location</th></tr>";
	while ($arr=mysqli_fetch_row($var))
	{
		echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2] </td> <td>$arr[3] </td> </tr>";
	}
	echo"</table>";
?>
<br>
<br>
<a href="first.html" >Home</a>
</form>
</body>
</html>
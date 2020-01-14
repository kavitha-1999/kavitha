<html>
<body >

<?php
	$dbh=mysqli_connect('localhost','root','','power_plant') or die(mysqli_error($dbh));
	mysqli_select_db($dbh,'power_plant') or die (mysqli_error($dbh));

	$a_id=$_REQUEST['a_id'];
	$a_name=$_REQUEST['a_name'];
	$email=$_REQUEST['email'];
	$location=$_REQUEST['location'];
	

	$result1=mysqli_query($dbh,"SELECT a_id from agency where a_id=$a_id");
	$row1= mysqli_fetch_array($result1);

	if($row1!=0){
	$query1="update agency set a_id='$a_id',a_name='$a_name',email='$email',location='$location' where a_id='$a_id'";
	$result=mysqli_query($dbh,$query1) or die(mysqli_error($dbh));
	echo "data updated successfully!!!!";

	$var=mysqli_query($dbh,"SELECT * from agency");
	echo"<table border size=1>";
	echo"<tr><th>a_id</th> <th> a_name</th> <th>email</th> <th>location</th></tr>";
	while ($arr=mysqli_fetch_row($var))
	{
		echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td></tr>";
	}
	echo"</table>";	
	}else{
	echo "CANNOT UPDATE !!!!";
	}
?>
<br>
<a href="first.html" >home
</body>
</html>
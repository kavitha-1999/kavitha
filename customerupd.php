<html>
<body >

<?php
	$dbh=mysqli_connect('localhost','root','','power_plant') or die(mysqli_error($dbh));
	mysqli_select_db($dbh,'power_plant') or die (mysqli_error($dbh));

	$c_id=$_REQUEST['c_id'];
	$c_name=$_REQUEST['c_name'];
	$a_id=$_REQUEST['a_id'];
	$email=$_REQUEST['email'];
	

	$result1=mysqli_query($dbh,"SELECT c_id from customer1 where c_id=$c_id");
	$row1= mysqli_fetch_array($result1);

	if($row1!=0){
	$query1="update customer1 set c_id='$c_id',c_name='$c_name',a_id='$a_id',email='$email' where c_id='$c_id'";
	$result=mysqli_query($dbh,$query1) or die(mysqli_error($dbh));
	echo "data updated successfully!!!!";

	$var=mysqli_query($dbh,"SELECT * from customer1");
	echo"<table border size=1>";
	echo"<tr><th>c_id</th> <th> c_name</th> <th>a_id</th> <th>email</th></tr>";
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
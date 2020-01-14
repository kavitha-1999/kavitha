<html>
<body >

<?php
	$dbh=mysqli_connect('localhost','root','','power_plant') or die(mysqli_error($dbh));
	mysqli_select_db($dbh,'power_plant') or die (mysqli_error($dbh));

	$o_id=$_REQUEST['o_id'];
	$o_name=$_REQUEST['o_name'];
	$a_id=$_REQUEST['a_id'];
	$address=$_REQUEST['address'];
	

	$result1=mysqli_query($dbh,"SELECT o_id from owner where o_id=$o_id");
	$row1= mysqli_fetch_array($result1);

	if($row1!=0){
	$query1="update owner set o_id='$o_id',o_name='$o_name',a_id='$a_id',address='$address' where o_id='$o_id'";
	$result=mysqli_query($dbh,$query1) or die(mysqli_error($dbh));
	echo "data updated successfully!!!!";

	$var=mysqli_query($dbh,"SELECT * from owner");
	echo"<table border size=1>";
	echo"<tr><th>o_id</th> <th> o_name</th> <th>a_id</th> <th>address</th></tr>";
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
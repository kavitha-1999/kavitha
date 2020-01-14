<html>
<body >

<?php
	$dbh=mysqli_connect('localhost','root','','power_plant') or die(mysqli_error($dbh));
	mysqli_select_db($dbh,'power_plant') or die (mysqli_error($dbh));

	$p_id=$_REQUEST['p_id'];
	$p_amount=$_REQUEST['p_amount'];
	$p_date=$_REQUEST['p_date'];
	$c_id=$_REQUEST['c_id'];
	

	$result1=mysqli_query($dbh,"SELECT p_id from payment where p_id=$p_id");
	$row1= mysqli_fetch_array($result1);

	if($row1!=0){
	$query1="update payment set p_id='$p_id',p_amount='$p_amount',p_date='$p_date',c_id='$c_id' where p_id='$p_id'";
	$result=mysqli_query($dbh,$query1) or die(mysqli_error($dbh));
	echo "data updated successfully!!!!";

	$var=mysqli_query($dbh,"SELECT * from payment");
	echo"<table border size=1>";
	echo"<tr><th>p_id</th> <th> p_amount</th> <th>p_date</th> <th>c_id</th></tr>";
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
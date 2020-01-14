<html>
<body >

<?php
	$dbh=mysqli_connect('localhost','root','','power_plant') or die(mysqli_error($dbh));
	mysqli_select_db($dbh,'power_plant') or die (mysqli_error($dbh));

	$b_id=$_REQUEST['b_id'];
	$c_id=$_REQUEST['c_id'];
	$amount=$_REQUEST['amount'];
	$balance=$_REQUEST['balance'];

	

	$result1=mysqli_query($dbh,"SELECT b_id from booking where b_id=$b_id");
	$row1= mysqli_fetch_array($result1);

	if($row1!=0){
	$query1="update booking set b_id='$b_id',c_id='$c_id',amount='$amount',balance='$balance' where b_id='$b_id'";
	$result=mysqli_query($dbh,$query1) or die(mysqli_error($dbh));
	echo "data updated successfully!!!!";

	$var=mysqli_query($dbh,"SELECT * from booking");
	echo"<table border size=1>";
	echo"<tr><th>b_id</th> <th> c_id</th> <th>amount</th> <th>balance</th></tr>";
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
<html>
<head>
	<title>Power Plant Management System</title>
	<link rel="stylesheet" type="text/css" href="style11.css">
</head>
<body style="background-image:url('paymphp.png')" >

<?php
$dbh=mysqli_connect('localhost','root','','power_plant') or die(mysqli_error());
mysqli_select_db($dbh,'power_plant') or die (mysqli_error());

$paytrans_num=$_REQUEST['p_id'];

$result1=mysqli_query($dbh,"SELECT  p_id from payment where p_id='$paytrans_num'");
$row1=mysqli_fetch_array($result1);

if($row1!=0){

$query="delete from payment where p_id='$paytrans_num'";
$result=mysqli_query($dbh,$query) or die(mysqli_error());
echo "data deleted successfully!!!!";

$var=mysqli_query($dbh,"SELECT * from payment");
echo"<table border size=2>";
echo"<tr> <th> p_id</th> <th>p_amount</th> <th>p_date</th> <th>c_id<th> </tr>";
while ($arr=mysqli_fetch_row($var))
{
	echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td><td>$arr[3]</td></tr>";
}
echo"</table>";
}else{
echo "Invalid Transaction Number  !!!!";

}

?>
<br>
<br>
<ul>
<li><a href="first.html" >Home</a></li>
</ul>
</body>
</html>
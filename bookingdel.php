<html>
<head>
	<title> power plant Management System</title>
	<link rel="stylesheet" type="text/css" href="style11.css">
</head>
<body style="background-image:url('diaphp.jpg')" >
<?php
$dbh=mysqli_connect('localhost','root','','power_plant') or die(mysqli_error($dbh));
mysqli_select_db($dbh,'power_plant') or die (mysqli_error($dbh));

$b_id=$_REQUEST['b_id'];

$result1=mysqli_query($dbh,"SELECT b_id from booking where b_id='$b_id'");
$row1=mysqli_fetch_array($result1);

if($row1!=0){

$query="delete from booking where b_id='$b_id'";
$result=mysqli_query($dbh,$query) or die(mysqli_error($dbh));
echo "data deleted successfully!!!!";


$var=mysqli_query($dbh,"SELECT * from booking");
echo"<table border size=2>";
echo"<tr><th>b_id</th> <th>c_id</th> <th>amount</th> <th>balance</th> </tr>";
while ($arr=mysqli_fetch_row($var))
{
	echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> </tr>";
}
echo"</table>";
}else{

echo "Invalid  ID !!!!";

}

?>
<br>
<br>
<ul>
<li><a href="first.html" >Home</a></li>
</ul>

</body>
</html>
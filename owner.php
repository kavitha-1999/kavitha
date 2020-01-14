<html>
<head>
	<title> Management System</title>
	<link rel="stylesheet" type="text/css" href="style11.css">
</head>
<body style="background-image:url('docphp.jpg')" >
<?php
$dbh=mysqli_connect('localhost','root','','power_plant') or die(mysqli_error($dbh));
mysqli_select_db($dbh,'power_plant') or die (mysqli_error($dbh));

$o_id=$_REQUEST['o_id'];
$o_name=$_REQUEST['o_name'];
$a_id=$_REQUEST['a_id'];
$address=$_REQUEST['address'];


$query="INSERT INTO owner VALUES('$o_id','$o_name','$a_id','$address')";
$result=mysqli_query($dbh,$query) or die(mysqli_error($dbh));
echo "data inserted successfully!!!!";

$var=mysqli_query($dbh,"SELECT * from owner");

echo"<table border size=1>";
echo"<tr><th>o_id</th> <th> o_name</th> <th>a_id</th> <th>address</th> </tr>";
while ($arr=mysqli_fetch_row($var))
{
	echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td><td>$arr[3]</td> </tr>";
}
echo"</table>";

?>
<br>
<br>
<ul>
<li><a href="first.html" >Home</a></li>
</ul>
</body>
</html>
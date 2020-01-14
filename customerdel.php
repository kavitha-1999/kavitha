<html>
<body >
<?php
$dbh=mysqli_connect('localhost','root','','power_plant') or die(mysqli_error());
mysqli_select_db($dbh,'power_plant') or die (mysqli_error());

$c_id=$_REQUEST['c_id'];



$query="delete from customer1 where c_id='$c_id'";
$result=mysqli_query($dbh,$query) or die(mysqli_error($dbh));
echo "data deleted successfully!!!!";

$var=mysqli_query($dbh,"SELECT * from customer1");
echo"<table border size=1>";
echo"<tr><th>c_id</th> <th>c_name</th> <th>email</th> <th>a_id</th> </tr>";
while ($arr=mysqli_fetch_row($var))
{
	echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> </tr>";
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
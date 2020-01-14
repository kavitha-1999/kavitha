<html>
<body >
<?php
$dbh=mysqli_connect('localhost','root','','power_plant') or die(mysqli_error());
mysqli_select_db($dbh,'power_plant') or die (mysqli_error());

$o_id=$_REQUEST['o_id'];



$query="delete from owner where o_id='$o_id'";
$result=mysqli_query($dbh,$query) or die(mysqli_error());
echo "data deleted successfully!!!!";

$var=mysqli_query($dbh,"SELECT * from owner");
echo"<table border size=1>";
echo"<tr><th>o_id</th> <th>o_name</th> <th>a_id</th> </tr>";
while ($arr=mysqli_fetch_row($var))
{
	echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> </tr>";
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
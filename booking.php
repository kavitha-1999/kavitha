<?php								 
    
    $dbh = mysqli_connect('localhost', 'root', '','power_plant') or die(mysql_error());
    mysqli_select_db($dbh,'power_plant') or die(mysqli_error($dbh));

    $b_id=$_REQUEST['b_id'];
    $c_id=$_REQUEST['c_id'];
     $amount=$_REQUEST['amount'];
    $balance=$_REQUEST['balance']; 
	$on_discount=null;

    $query = "INSERT INTO booking VALUES ('$b_id','$c_id','$amount','$balance','$on_discount')";
    $result = mysqli_query($dbh,$query) or die(mysqli_error($dbh));

    echo "Data Inserted Successfully!!!";

 $var=mysqli_query($dbh,"SELECT * FROM booking");

 echo"<table border size=1>";
 echo"<tr><th>b_id</th> <th>c_id</th> <th>amount</th> <th>balance</th> <th>on_discount</th></tr>";
  
 while ($arr=mysqli_fetch_row($var))
 { 
    echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td><td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td> </tr>";
 } 

echo"</table>";

$p0=mysqli_query($dbh,"call total (@out);");
$rs=mysqli_query($dbh,'SELECT @out');
while($arr=mysqli_fetch_row($rs))
{
	  echo "<br><br>";
	  echo "<tr><td><font size =5 color =black>total = $arr[0]</font></td></tr>";
}

echo "<br>";
 echo "<a href='first.html'> home </a>";
echo "<br>";
 
?>


</form>
</body>
</html>
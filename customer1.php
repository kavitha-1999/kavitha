<html>
<body>

<?php								 
    
    $dbh = mysqli_connect('localhost', 'root', '','power_plant') or die(mysqli_error($dbh));
    mysqli_select_db($dbh,'power_plant') or die(mysqli_error($dbh));

    $c_id=$_REQUEST['c_id'];
    $c_name=$_REQUEST['c_name'];
    $email=$_REQUEST['email'];
    $a_id=$_REQUEST['a_id'];

    $query = "INSERT INTO customer1 VALUES ('$c_id', '$c_name','$email','$a_id')";
    $result = mysqli_query($dbh,$query) or die(mysqli_error($dbh));

    echo "Data Inserted Successfully!!!";

 $var=mysqli_query($dbh,"SELECT * FROM customer1");

 echo"<table border size=1>";
 echo"<tr><th>c_id</th> <th>c_name</th><th>email</th><th>a_id</th> </tr>";
  
 while ($arr=mysqli_fetch_row($var))
 { 
    echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td><td>$arr[2]</td><td>$arr[3]</td> </tr>";
 } 
 echo"</table>";

?>
<a href="first.html" >Home</a>
</body>
</html>
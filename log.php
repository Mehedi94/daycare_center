<?php
 include_once "header.php";

 ?>
<?php
$username=$_POST['user'];
$password=md5($_POST['pass']);


$db['hostname']="localhost";
$db['username']="root";
$db['password']="";
$db['database']="daycare";

$con=mysqli_connect($db['hostname'], $db['username'], $db['password'], $db['database']);


$username=stripcslashes($username);
$password=stripcslashes($password);
$username=mysqli_real_escape_string($con,$username);
$password=mysqli_real_escape_string($con,$password);


$result=mysqli_query($con,"SELECT * from login where first_name='$username' and password='$password'")
or die("Failed to query database".mysql_error());
$row= mysqli_fetch_array($result);
//var_dump($row); die();
if ($row['logid']== 1 && $row['first_name']==$username && $row['password']==$password &&(""!==$username || "" !==$password)){
  include_once 'caregiverview.php';
}elseif ($row['logid']== 0 && $row['first_name']==$username && $row['password']== $password &&(""!==$username || "" !==$password)) {
  include_once 'parentview.php';
}
else {
  echo "Failed";
}

 ?>
 <?php
  include_once "footer.php";
  ?>

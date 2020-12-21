<?php

 include_once "header.php";
 include_once "connection.php";

  $sql="INSERT INTO caregivers
  (first_name,last_name,phone,password,qualifications)
  values('".$_POST['first_name']."','".$_POST['last_name']."','".$_POST['phone']."','".md5($_POST['password'])."','".$_POST['qualifications']."');";

  $sql2="INSERT INTO login
  (logid,first_name,password)
  values(1,'".$_POST['first_name']."','".md5($_POST['password'])."');";

 if(mysqli_query($con,$sql) && mysqli_query($con,$sql2)){
?>

<div style="width:70%,margin:0 auto;">
  <img src="Success.png" alt="Success Icon" style="float:left;"/>
  <h1>Registration Complete</h1>
</div>
<?php
}else {
  echo "Error" . $sql . "<br>" . mysqli_error($con);
}
mysqli_close($con);
include_once "footer.php";
 ?>

 }

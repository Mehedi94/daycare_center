<?php

 include_once "header.php";
 include_once "connection.php";
  $sql="INSERT INTO parents
  (first_name,last_name,phone,password)
  values('".$_POST['first_name']."','".$_POST['last_name']."','".$_POST['phone']."','".md5($_POST['password'])."');";

  $sql1="INSERT INTO childs
  (child_name,child_age,gender,timing,days,parents_phone)
  values('".$_POST['child_name']."','".$_POST['child_age']."','".$_POST['gender']."'  ,'".$_POST['timing']."', '".$_POST['days']."', '".$_POST['phone']."');";

  $sql2="INSERT INTO login
  (logid,first_name,password)
  values(0,'".$_POST['first_name']."','".md5($_POST['password'])."');";


 if(mysqli_query($con,$sql) && mysqli_query($con,$sql1) && mysqli_query($con,$sql2)){
?>
<div style="width:30%;margin:0 auto;">
  <img src="Success.png" alt="Success Icon"  wstyle="float:left; "/>
  <h1>Online Admission Complete</h1>
</div>
<?php
}else {
  echo "Error" . $sql . "<br>" . mysqli_error($con);
}
mysqli_close($con);
include_once "footer.php";
 ?>

 }

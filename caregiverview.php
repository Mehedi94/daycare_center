

<?php
include_once 'connection.php';
$username=$_POST['user'];
$password=md5($_POST['pass']);


$sql="select first_name,child_name,parents_phone,timing,days from caregivers,childs where C_ID=CID && first_name= '$username' && password= '$password'";
$records=mysqli_query($con,$sql);


 ?>
 <?php
  include_once "header.php";
  ?>

<table width="600" border="1" cellpadding="1", cellspacing="1">
 <tr>
<th>Instructor:</th>
<th>Caregiver For:</th>
<th>Parents Phone:</th>
<th>Timing Schedule:</th>
<th>Working Days:</th>

   <tr>
     <?php
     while($works_with=mysqli_fetch_assoc($records)) {
  echo "<tr>";
echo "<td>".$works_with['first_name']."</td>";
echo "<td>".$works_with['child_name']."</td>";
echo "<td>".$works_with['parents_phone']."</td>";
echo "<td>".$works_with['timing']."</td>";
echo "<td>".$works_with['days']."</td>";
  echo "</tr>";
}
?>



</table>


  <?php
   include_once "footer.php";
   ?>

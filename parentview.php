

<?php
include_once 'connection.php';

$sql=" SELECT * FROM caregivers";
$records=mysqli_query($con,$sql);
$caregivers = $records->fetch_assoc();


$sql1="select CID, child_name from related where phone=".$caregivers['phone']." ";
$res=mysqli_query($con,$sql1);

 ?>
 <?php
  include_once "header.php";
  ?>

<table width="600" border="1" cellpadding="1", cellspacing="1">
 <tr>
<th>Instructor_ID:</th>
<th>Name:</th>
<th>phone:</th>

   <tr>
     <?php
while($caregivers = $records->fetch_assoc()) {
  echo "<tr>";
echo "<td>".$caregivers['C_ID']."</td>";
echo "<td>".$caregivers['first_name']."</td>";
echo "<td>".$caregivers['phone']."</td>";
  echo "</tr>";
}
?>
<table width="600" border="1" cellpadding="1", cellspacing="1">
 <tr>
<th>Childs_ID:</th>
<th>Child_name:</th>

   <tr>
     <?php
while ($related=mysqli_fetch_assoc($res)) {
  echo "<tr>";
echo "<td>".$related['CID']."</td>";
echo "<td>".$related['child_name']."</td>";
  echo "</tr>";
}


      ?>

</table>

<form name="caregiver selection" method="post" action="choice.php">

<p>
    <label>Choose An Instructor For Your Kid(Put ID In The Box Below):</label><br/>
  <input type="integer" name="ID" />
   </p>
   <p>
     <label>Your Phone No: </label><br/>
     <input type="text" name="phone" />
          </p>
   <p>
  <input type="submit" name="submit" value="Submit" />





  <?php
   include_once "footer.php";
   ?>

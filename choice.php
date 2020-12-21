<?php
 include_once "header.php";


$pno=$_POST['phone'];
$IId=$_POST['ID'];
include_once "connection.php";

$sql=mysqli_query($con,"SELECT child_name,CID from related where phone='$pno'")
or
 die("Failed to query database".mysql_error());

?>

<table width="600" border="1" cellpadding="1", cellspacing="1">
 <tr>
<th>Childs_ID:</th>
<th>Child_name:</th>
 </tr>
     <?php


 while ($related=mysqli_fetch_assoc($sql)) {
  echo "<tr>";
echo "<td>".$related['CID']."</td>";
echo "<td>".$related['child_name']."</td>";
     echo "</tr>";



$sql1="INSERT INTO caregivers(C_ID)
values($related[CID])";

}
if(mysqli_query($con,$sql1))
{
      ?>
</table>
      <div
        <h1> Selection Complete</h1>
      </div>
      <?php
}else {
    echo "Error" . $sql . "<br>" . mysqli_error($con);
}
mysqli_close($con);
include_once "footer.php";
 ?>


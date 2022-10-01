<?php
$con = mysqli_connect("localhost","root","","labreport");
$a = $_POST['id'];
$b = $_POST['name'];


$sql = "UPDATE create_acc SET Name = '$b' WHERE id='$a'";
mysqli_query($con,$sql);
echo "Successfully Update";

?>

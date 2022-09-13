<?php
$con = mysqli_connect("localhost","root","","labreport");
$a = $_POST['id'];
$b = $_POST['name'];
$c = $_POST['bill'];
$d = $_POST['date'];


$sql = "insert into info(id,Name,Bill,date_of_ac) values('$a','$b','$c','$d')";
mysqli_query($con,$sql);
echo "Successfully Create";

?>


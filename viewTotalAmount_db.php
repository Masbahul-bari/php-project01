<?php
$con = mysqli_connect("localhost","root","","labreport");
$a = $_POST['da'];
// echo $a;


         $sql = "SELECT * FROM `create_acc` WHERE date_of_ac = '$a'";
         $result_tasks = mysqli_query($con, $sql);    
           $total =0; 
          while($row = mysqli_fetch_assoc($result_tasks)) { 
             $total=$total+$row['Bill']; 
         
         }
         //echo $total;


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	  <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
</head>
<body> 
      <h2> Total bill is <?php echo $total; ?></h2>
</body>
</html>
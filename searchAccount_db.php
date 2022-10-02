<?php
$con = mysqli_connect("localhost","root","","labreport");
$a = $_POST['id'];

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

    <table class="table table-bordered">
        <thead>
          <tr>
            <th>id</th>
            <th>Name</th>
            <th>Bill</th>
            <th>Date_of_Ac</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM create_acc WHERE id = '$a'";
          $result_tasks = mysqli_query($con, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['Name']; ?></td>
            <td><?php echo $row['Bill']; ?></td>
            <td><?php echo $row['date_of_ac']; ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
</body>
</html>







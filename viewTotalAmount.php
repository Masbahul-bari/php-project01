

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View total Amount</title>
	<link rel="stylesheet" href="style.css">

</head>
<body>

	<section class="booking">

   <h1 class="heading-title">view Total Amount of a Specific Date</h1>

   <form action="viewTotalAmount_db.php" method="POST" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>Date :</span>
            <input type="date" placeholder="Enter The Date" name="da">
         </div>

      <input type="submit" value="submit" class="btn" name="send">

   </form>

</section>

</body>
</html>
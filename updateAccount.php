<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update Account</title>
	<link rel="stylesheet" href="style.css">

</head>
<body>

	<section class="booking">

   <h1 class="heading-title">view Total Amount of a Specific Date</h1>

   <form action="updateAccount_db.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>ID :</span>
            <input type="number" placeholder="Enter your ID" name="id">
         </div>
         <div class="inputBox">
            <span>Name :</span>
            <input type="text" placeholder="enter your update name" name="name">
         </div>

      <input type="submit" value="submit" class="btn" name="send">

   </form>

</section>

</body>
</html>
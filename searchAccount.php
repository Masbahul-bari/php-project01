<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Search an Account</title>
	<link rel="stylesheet" href="style.css">

</head>
<body>

	<section class="booking">

   <h1 class="heading-title">Search an Account</h1>

   <form action="searchAccount_db.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>ID :</span>
            <input type="number" placeholder="Enter your ID" name="id">
         </div>

      <input type="submit" value="submit" class="btn" name="send">

   </form>

</section>

</body>
</html>
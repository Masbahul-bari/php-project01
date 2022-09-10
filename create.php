<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

   <!-- swiper css link  -->
   <!-- <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" /> -->

   <!-- font awesome cdn link  -->
   <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">Create Account</h1>

   <form action="create_db.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>ID :</span>
            <input type="number" placeholder="Enter your ID" name="id">
         </div>
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name">
         </div>
         <div class="inputBox">
            <span>Bill :</span>
            <input type="number" placeholder="enter your Bill" name="bill">
         </div>      
         <div class="inputBox">
            <span>Date :</span>
            <input type="date" name="date">
         </div>
      </div>

      <input type="submit" value="submit" class="btn" name="send">

   </form>

</section>

<!-- booking section ends -->



</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>About</title>

       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

       <link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css>

       <link rel="stylesheet" href="/style.css">
</head>
<body>

 <section class="header">

     <a href="home.php" class="logo">Travel.</a>

     <nav class="navbar">
        <a href="home.php">Home</a>
        <a href="about.php">About</a> 
        <a href="package.php">Package</a> 
        <a href="book.php">Book</a> 
     </nav>

     <div id="menu-btn" class="fas fa-bars"></div>
</section> 
 
<div class="heading" style="background:url(images/header-bg-3.png) no-repeat ">
    <h1>Book now</h1>
</div>

<!-- booking section starts -->

<section class="booking">

   <h1 class="heading-title">Book Your Trip!</h1>
   <form action="book_form.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>Name:</span>
            <input type="text" placeholder="eg: Aakanksha Ranjan" name="name">
         </div>
         <div class="inputBox">
            <span>Email:</span>
            <input type="email" placeholder="eg: aak.ran.rt23@dypatil.edu" name="email">
         </div>
         <div class="inputBox">
            <span>Phone:</span>
            <input type="number" placeholder="eg: xxxxxxxxxx" name="phone">
         </div>
         <div class="inputBox">
            <span>Address:</span>
            <input type="text" placeholder="Enter your address" name="address">
         </div>
         <div class="inputBox">
            <span>Destination:</span>
            <input type="text" placeholder="eg: Ohio" name="location">
         </div>
         <div class="inputBox">
            <span>Number of Guests:</span>
            <input type="number" placeholder="Number of guests" name="guests">
         </div>
         <div class="inputBox">
            <span>Arrival:</span>
            <input type="date" name="location">
         </div>
         <div class="inputBox">
            <span>Departure:</span>
            <input type="date" name="leaving">
         </div>
      </div>
 
      <input type="submit" value="Submit" class="btn" name="send">

   </form>

</section>















<section class="footer">

   <div class="box-container">

      <div class="box">
      <h3>Quick Links</h3>
         <a href=“home.php”><i class="fas fa-angle-right"></i>Home</a>
         <a href="about.php"><i class="fas fa-angle-right"></i>About</a> 
         <a href="package.php"><i class="fas fa-angle-right"></i>Package</a> 
         <a href="book.php"><i class="fas fa-angle-right"></i>Book</a> 
      </div>
       
      <div class="box">
         <h3>Extra Links</h3>
         <a href="#"><i class="fas fa-angle-right"></i>Ask questions</a>
         <a href="#"><i class="fas fa-angle-right"></i>About us</a>
         <a href="#"><i class="fas fa-angle-right"></i>Privacy policy</a>
         <a href="#"><i class="fas fa-angle-right"></i>Terms of use</a>
   </div>

   <div class="box">
      <h3>Contact Info</h3>
      <a href="#"><i class="fas fa-phone"></i> +123-456-789 </a>
      <a href="#"><i class="fas fa-phone"></i> +111-222-333 </a>
      <a href="#"><i class="fas fa-envelope"></i> aakanksha.ranjan@outlook.com </a>
      <a href="#"><i class="fas fa-map"></i> Mumbai, India - 400104 </a>
   </div>

      <div class="box">
         <h3>Follow Us</h3>
         <a href="#"><i class="fab fa-instagram"></i>Instagram</a>
         <a href="#"><i class="fab fa-facebook-f"></i>Facebook</a>
         <a href="#"><i class="fab fa-linkedin"></i>Linkedin</a>
         <a href="#"><i class="fab fa-twitter"></i>Twitter</a>
      </div>
   </div>
      <div class="credit">Created by <span>RAIT AIML Students</span> | All rights reserved! | </div>

      
</section>


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="/script.js"></script>
</body>
</html>  
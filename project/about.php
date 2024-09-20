<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>At Bookly, we believe that every book has the power to transform lives. As a passionate online bookstore, we are dedicated to connecting readers with the stories that inspire, educate, and entertain.</p>
         <p> Our carefully curated collection features everything from timeless classics to the latest bestsellers, ensuring that every book lover finds something to cherish.</p>
         <p>We believe in the power of books. Explore our curated selection and find your next favorite</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title" style="color:black;">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>I enjoyed my shopping experience, but I faced a delay with my delivery. Customer service was helpful and resolved my issue promptly. .</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Aarav S. </h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>I enjoyed my shopping experience, but I faced a delay with my delivery. Customer service was helpful and resolved my issue promptly. .</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Neha T. </h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>I enjoyed my shopping experience, but I faced a delay with my delivery. Customer service was helpful and resolved my issue promptly. .</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Rohan M. </h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>I enjoyed my shopping experience, but I faced a delay with my delivery. Customer service was helpful and resolved my issue promptly. .</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Rohan M.</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>I enjoyed my shopping experience, but I faced a delay with my delivery. Customer service was helpful and resolved my issue promptly. .</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Priya K. </h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>I enjoyed my shopping experience, but I faced a delay with my delivery. Customer service was helpful and resolved my issue promptly. .</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Priya K. </h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">greate authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/author-1.jpg" alt="">
         <h3>Neha T. </h3>
      </div>
      <div class="box">
         <img src="images/author-2.jpg" alt="">
         <h3>Sneha D. </h3>
      </div>
      <div class="box">
         <img src="images/author-3.jpg" alt="">
         <h3>Rohan M. </h3>
      </div>
      <div class="box">
         <img src="images/author-4.jpg" alt="">
         <h3>keval r.</h3>
      </div>

      <div class="box">
         <img src="images/author-5.jpg" alt="">
         <h3>Aarav S. </h3>
      </div>

      <div class="box">
         <img src="images/author-6.jpg" alt="">
         <h3>Priya K. </h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
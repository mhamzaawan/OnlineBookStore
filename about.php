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
   <p> <a href="home.php">Home</a> / About </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>Why choose us?</h3>
         <p>At Bookly, we offer a curated selection of books across all genres, ensuring you find exactly what you're looking for. Our user-friendly platform makes it easy to discover new favorites and revisit timeless classics. With competitive prices, fast shipping, and exceptional customer service, we strive to provide an unparalleled shopping experience for book lovers everywhere.</p>
         <p>Our commitment to quality and passion for books means you'll always find something special at Bookly. Join our community and let us help you embark on your next literary adventure!





</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/me.jpg" alt="">
         <p>I am thrilled with my experience at Bookly! The selection is fantastic, and the website is incredibly easy to navigate. The customer service team is always helpful, and the fast shipping ensures my books arrive promptly. Highly recommend for all your reading needs!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Hamza Awan</h3>
      </div>

      <div class="box">
         <img src="images/imran.jpg" alt="">
         <p>Shopping at Bookly has been a wonderful experience. The variety of genres and titles available is impressive, and the personalized recommendations always lead me to great finds. Their dedication to customer satisfaction truly sets them apart</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Imran Ali</h3>
      </div>

      <div class="box">
         <img src="images/rayyan.jpg" alt="">
         <p>I couldn't be happier with Bookly. The selection is extensive, and the website is a breeze to use. Every order arrives quickly and in perfect condition. It's my go-to place for all things books! Their website is so amazing. It's very easy to order books from here.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Rayyan</h3>
      </div>

      <div class="box">
         <img src="images/aqsa.jpg" alt="">
         <p>From the latest bestsellers to hidden gems, Bookly has it all. Their commitment to quality and excellent customer service keeps me coming back. I highly recommend them to all book enthusiasts.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Aqsa</h3>
      </div>

      <div class="box">
         <img src="images/maham.jpg" alt="">
         <p>As an avid reader, I appreciate the diverse and well-curated collection at Bookly. The fast shipping and responsive customer service make it a reliable choice for all my book purchases. Five stars!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Maham</h3>
      </div>

      <div class="box">
         <img src="images/khattak.jpg" alt="">
         <p>Discovering Bookly has been a game-changer for my reading habit. The intuitive website, combined with fantastic customer support and speedy delivery, makes buying books a joy. I can't recommend them enough!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Khattak</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">greate authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/me.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Hamza Awan</h3>
      </div>

      <div class="box">
         <img src="images/imran.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Imran Ali</h3>
      </div>

      <div class="box">
         <img src="images/rayyan.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Rayyan</h3>
      </div>

      <div class="box">
         <img src="images/aqsa.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Aqsa</h3>
      </div>

      <div class="box">
         <img src="images/maham.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Maham</h3>
      </div>

      <div class="box">
         <img src="images/khattak.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Khattak</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
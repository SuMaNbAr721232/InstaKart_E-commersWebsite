<?php
@include 'config.php';

session_start();
if(!isset($_SESSION['user_name'])){
    header('location:login_form.php');
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InstaKart</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="style.css">

    <style>
        .content h4{
            font-size: 18px;
            color:#ffffff;
         }
       .content h4 span{
            color:crimson;
         }
    </style>

</head>
<body>

    <div id="top">
       
        <div class="container">
            
            <div class="container">
                <div class="content">
                    <h4>Hi, <span><?php echo $_SESSION['user_name'] ?></span></span>welcome to<span>INSTAKART</span></h4>
                
                <ul class="menu">
                    
                    <li>
                        <a href="register_form.php">Register</a>
                    </li>
                    <li>
                        <a href="login_form.php">Login</a>
                    </li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                   
                    </ul>
                </div>
            </div>
            
        </div>
        
    </div>

  <section id="header">
    <a href="#"><img src="img/logo3.png" class="logo" alt=""></a>
<div>
    <ul id="navbar">
        <li><a href="home.php">Home</a></li>
        <li><a  href="shop.php">Shop</a></li>
        <li><a class="active" href="blog.php">Blog</a></li>
        <li><a href="About.php">About</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li id="lg-bag"><a href="cart.php"><i class="far fa-shopping-bag"></i></a></li>
        <a href="#" id="close"><i class="fa fa-times"></i></a>

    </ul>
</div>
<div id="mobile">
    <a href="cart.php"><i class="far fa-shopping-bag"></i></a>
    <i id="bar" class="fas fa-outdent"></i>
</div>
</section>    
<section id="page-header" class="blog-header">
        <h2>#readmore</h2>
    
    <p>Read all case studies about our products! </p>
    
</section>
    
<section id="blog">
    <div class="blog-box">
        <div class="blog-img">
            <img src="img/img/blog/b1.jpg" alt="">
        </div>
        <div class="blog-details">
            <h4>The Cotton-Jersey Zip-Up Hoodie</h4>
            <p>Kickstarter man braid godard coloring book.  Raclette waistcoat selfies yr wolf chartreuse hexagon irony, 
                godard...</p>
            <!-- <a href="#">CONTINUE READING</a> -->
        </div>
        <h1>13/01</h1>
    </div>
    <div class="blog-box">
        <div class="blog-img">
            <img src="img/img/blog/b2.jpg" alt="">
        </div>
        <div class="blog-details">
            <h4>How to Style a Quiff</h4>
            <p>Kickstarter man braid godard coloring book.  Raclette waistcoat selfies yr wolf chartreuse hexagon irony, 
                godard...</p>
            <!-- <a href="#">CONTINUE READING</a> -->
        </div>
        <h1>13/04</h1>
    </div>
    <div class="blog-box">
        <div class="blog-img">
            <img src="img/img/blog/b3.jpg" alt="">
        </div>
        <div class="blog-details">
            <h4>Must-Have Skater Girl Items</h4>
            <p>Kickstarter man braid godard coloring book.  Raclette waistcoat selfies yr wolf chartreuse hexagon irony, 
                godard...</p>
            <!-- <a href="#">CONTINUE READING</a> -->
        </div>
        <h1>12/01</h1>
    </div>
    <div class="blog-box">
        <div class="blog-img">
            <img src="img/img/blog/b4.jpg" alt="">
        </div>
        <div class="blog-details">
            <h4>Runway-Inspired Trends</h4>
            <p>Kickstarter man braid godard coloring book.  Raclette waistcoat selfies yr wolf chartreuse hexagon irony, 
                godard...</p>
            <!-- <a href="#">CONTINUE READING</a> -->
        </div>
        <h1>16/01</h1>
    </div>
    <div class="blog-box">
        <div class="blog-img">
            <img src="img/img/blog/b6.jpg" alt="">
        </div>
        <div class="blog-details">
            <h4>AW20 Menswear Trends</h4>
            <p>Kickstarter man braid godard coloring book.  Raclette waistcoat selfies yr wolf chartreuse hexagon irony, 
                godard...</p>
             
            <!-- <a href="#">CONTINUE READING</a> -->
        </div>
        <h1>10/03</h1>
    </div>

</section>
<!--
<section id="pagination" class="section-p1">
<a href="#">1</a>
<a href="#">2</a>
<a href="#"><i class="fal fa-long-arrow-alt-right"></i></a>

</section>
-->

<section id="newsletter" class="section-p1 section-m1">
    <div class="newstext">
        <h4>Subscribe For Newsletters</h4>
        <p>Get Email updates about our latest shop and <span>special offers.</span>

        </p>
    </div>
    <div class="form">
        <input type="text" placeholder="Your email address">
        <button class="normal">Subscribe</button>
    </div>
</section>
<footer class="section-p1">
    <div class="col">
        <img  class="logo" src="img/logo3.png" alt="">
        <h4>Contact</h4>
        <p><strong>Address:</strong> Basanti Hwy,1no.Government Colony,kolkata-700150</p>
        <p><strong>Phone:</strong> +01 2222 365 /(+91) 01 2345 6789</p>
        <p><strong>Hours:</strong>10:00 - 18:00, Mon - Sat</p>
        <div class="follow">
            <h4>Follow us</h4>
            <div class="icon">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-pinterest-p"></i>
                <i class="fab fa-youtube"></i>
            </div>
        </div>
    </div>
    <div class="col">
        <h4>About</h4>
        <a href="#">About us</a>
        <a href="#">Delivery Information</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms & Conditions</a>
        <a href="#">Contact Us</a>
    </div>
    <div class="col">
        <h4>My Account</h4>
        <a href="#">Sign In</a>
        <a href="#">View Cart</a>
        <a href="#">My Wishlist</a>
        <a href="#">Track My Order</a>
        <a href="#">Help</a>
    </div>

    <!--
    <div class="col install">
        <h4>Install App</h4>
        <p>From App Store or Google Play</p>
        <div class="row">
            <img src="img/pay/app0.png" alt="">
            <img src="img/pay/gpay20.png" alt="">
        </div>
        <p>Secured Payment Gateways</p>
        <img src="img/pay/paym1.jpg" alt="">
    </div>
        -->
    <div class="copyright">
        <p>&copysr;InstaKart 2023</p>
    </div>
</footer>

    <script src="script.js"></script>
</body>
</html> 
  

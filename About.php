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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
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
            <li><a href="blog.php">Blog</a></li>
            <li><a class="active"href="About.php">About</a></li>
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
    <section id="page-header" class="about-header">
        <h2>#knownUs</h2>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, quo? </p>

    </section>

    <section id="about-header" class="section-p1">
        <img src="img/img/about/a6.jpg" alt="">
        <div>
            <h2>Who we are?</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos ab culpa voluptatibus eligendi officia
                minus blanditiis odit expedita deleniti, sed numquam nesciunt unde eveniet quia perspiciatis reiciendis
                repellat repellendus accusamus sapiente. Nostrum animi corporis placeat nihil, ea magnam, in quod
                similique asperiores cum a omnis!</p>
            <abbr title="">Create stunning images with as much or as little control as you like thanks to a choice of
                Basic and
                Creative models</abbr>

            <br><br>
            <marquee> bgcolor="#ccc" loop="-1" scrollamount="5" width="100%">Create stunning images with as much or as
                little control as you like thanks to a choice of Basic and Creative models</marquee>


        </div>

    </section>

    <section id="about-app" class="section-p1">
        <h1>Download our <a href="#">App</a></h1>
        <div class="video">
            <video autoplay muted loop src="img/img/about/1.mp4"></video>
        </div>
    </section>
    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="img/FreeShipping.png" alt="" width="150px" length="150px">
            <h6>Free shipping</h6>
        </div>
        <div class="fe-box">
            <img src="img/orderonline1.png" alt="" width="150px" length="150px">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="img/Save-Money-PNG-Pic.png" alt="" width="150px" length="150px">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="img/promo.png" alt="" width="150px" length="150px">
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="img/happysell.png" alt="" width="150px" length="150px">
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img src="img/support.png" alt="" width="150px" length="150px">
            <h6>F24/7 Support</h6>
        </div>
    </section>
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
            <img class="logo" src="img/logo3.png" alt="">
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
        <div class="copyright">
            <p>&copysr;InstaKart 2023</p>
        </div>
        -->
        <div class="copyright">
        <p>&copysr;InstaKart 2023</p>
    </div>
    
    </footer>

    <script src="script.js"></script>
</body>

</html>
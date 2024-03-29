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

    <section id="header">
        <a href="#"><img src="img/logo3.png" class="logo" alt=""></a>
    <div>
        <ul id="navbar">
            <li><a href="home.php">Home</a></li>
            <li><a  href="shop.php">Shop</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="About.php">About</a></li>
            <li><a class="active" href="contact.php">Contact Us</a></li>
            <li id="lg-bag"><a href="cart.php"><i class="far fa-shopping-bag"></i></a></li>
            <a href="#" id="close"><i class="fa fa-times"></i></a>
    
        </ul>
    </div>
    <div id="mobile">
        <a href="cart.php"><i class="far fa-shopping-bag"></i></a>
        <i id="bar" class="fas fa-outdent"></i>
    </div>
    </section>
    <section id="page-header" class="contact-header">
        <h2>#let's_talk</h2>

        <p>LEAVE A MESSAGE, We love to hear from you!</p>

    </section>
    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>GET IN TOUCH</span>
            <h2>Visit one of our agency locations or contact us today</h2>
            <h3>Head Office</h3>

            <div>
                <li>
                    <i class="fal fa-map"></i>
                    <p>1no Brahmapur Government Colony, Bagdoba, Kolkata, West Bengal kol-700150 </p>
                </li>
                <li>
                    <i class="fal fa-envelope"></i>
                    <p>contact@example.com</p>
                </li>
                <li>
                    <i class="fal fa-phone-alt"></i>
                    <p>contact@example.com</p>
                </li>
                <li>
                    <i class="fal fa-clock"></i>
                    <p>Monday to Saturday: 9:00am to 10:00pm</p>
                </li>
            </div>
        </div>
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14742.144108200806!2d88.45215622484382!3d22.521584684654076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0274a1c0115249%3A0x975599390971e184!2sBengal%20Institute%20Of%20Technology!5e0!3m2!1sen!2sin!4v1680190437422!5m2!1sen!2sin"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <section id="form-details">
        <form action="">
            <span>LEAVE A MESSAGE</span>
            <h2>We love to hear from you</h2>
            <input type="text" placeholder="Your Name">
            <input type="text" placeholder="E-mail">
            <input type="text" placeholder="Subject">
            <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
            <button class="normal">Submit</button>
        </form>
        <div class="people">
            <div>
                <img src="img/img/people/2.png" alt="">
                <p><span>Prakash Kumar Gupta</span> Information Technology <br>Phone: +000 123 000 77 88 <br>Email:
                    abc@gmail.com</p>
            </div>
            <div>
                <img src="img/img/people/2.png" alt="">
                <p><span>Priyanshu Sharan</span> Information Technology <br>Phone: +000 123 000 77 88 <br>Email:
                    abc@gmail.com</p>
            </div>
            <div>
                <img src="img/img/people/2.png" alt="">
                <p><span>Aditya Anand</span> Information Technology <br>Phone: +000 123 000 77 88 <br>Email:
                    abc@gmail.com</p>
            </div>
            <div>
                <img src="img/suman.jpg" alt="">
                <p><span>Suman Bar</span> Information Technology <br>Phone: +91 62967 74399 <br>Email:
                    barsuman346@gmail.com</p>
            </div>
            <div>
                <img src="img/img/people/2.png" alt="">
                <p><span>Govinda Pal</span> Information Technology <br>Phone: +000 123 000 77 88 <br>Email:
                    abc@gmail.com</p>
            </div>
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

                -->
        <div class="copyright">
            <p>&copysr;InstaKart 2023</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>

</html>
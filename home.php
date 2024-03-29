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
        <li><a class="active" href="home.php">Home</a></li>
        <li><a href="shop.php">Shop</a></li>
        <li><a href="blog.php">Blog</a></li>
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
<section id="hero">
    <h4>
        Trade-in-offer
    </h4>
    <h2>Super value deals</h2>
    <h1>On all products</h1>
    <p>Save more with coupons & up to 70% off! </p>
    <a href="shop.php"><button>Shop Now</button></a>
   
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
<section id="product1" class="section-p1">
    <h2>
        Feature Products
    </h2>
    <p>Best of Electronics</p>
    <div class="pro-container">
        <div class="pro">

        <?php
      $select_product = mysqli_query($conn, "SELECT * FROM `products`") or die('query failed');
      if(mysqli_num_rows($select_product) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_product)){
   ?>
   
   <?php
      };
    };
    ?>      
            <img src="img/product/p1.jpg" alt="">
            <div class="des">
                <span>Apple</span>
                <h5>Apple Ipad Mini</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>₹ 52,000
                     </h4> 
            </div>
            <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
        <div class="pro">
            <img src="img/product/p2.png" alt="">
            <div class="des">
                <span>Apple</span>
                <h5>Apple Ipad Air</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>₹ 75,000
                     </h4> 
            </div>
            <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
        <div class="pro">
            <img src="img/product/p3.jpg" alt="">
            <div class="des">
                <span>Samsung</span>
                <h5>Samsung galaxy S22</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>₹ 62,000
                     </h4> 
            </div>
            <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
        <div class="pro">
            <img src="img/product/p4.jpg" alt="">
            <div class="des">
                <span>One Plus</span>
                <h5>One plus 10 pro</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>₹ 59,999
                     </h4> 
            </div>
            <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
        <div class="pro">
            <img src="img/product/p5.jpg" alt="">
            <div class="des">
                <span>One plus</span>
                <h5>One Plus 10T</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    
                </div>
                <h4>₹ 45,000
                     </h4> 
            </div>
            <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
        <div class="pro">
            <img src="img/product/p6.jpg" alt="">
            <div class="des">
                <span>HP</span>
                <h5>HP 13uesd500 Laptop</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    
                    <i class="fas fa-star"></i>
                </div>
                <h4>₹ 38,000
                     </h4> 
            </div>
            <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
        <div class="pro">
            <img src="img/product/p7.jpg" alt="">
            <div class="des">
                <span>Realme</span>
                <h5>Realme 7</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    
                </div>
                <h4>₹ 9,000
                     </h4> 
            </div>
            <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
        <div class="pro">
            <img src="img/product/p8.jpg" alt="">
            <div class="des">
                <span>Realme</span>
                <h5>Realme Prime</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>₹ 18,000
                     </h4> 
            </div>
            <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
        
    </div> 

</section>
<section id="banner" class="section-m1">
    <h4>Repair Services</h4>
    <h2>Up to <span>70% off</span> - All Electronic Accessorie</h2>
<button class="normal">Explore More</button>
</section>

<section id="product1" class="section-p1">
    <h2>
        New Arrivals
    </h2>
    <p>Summer Collection New Modern Design</p>
    <div class="pro-container">
        <div class="pro">

        <?php
      $select_product = mysqli_query($conn, "SELECT * FROM `products`") or die('query failed');
      if(mysqli_num_rows($select_product) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_product)){
   ?>
   <?php
       };
     };
        ?>  
            <img src="img/clothes/c1.jpg" alt="">
            <div class="des">
                <span>Roadster</span>
                <h5>Formal Shirt</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>₹ 1,299
                     </h4> 
            </div>
            <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
        <div class="pro">
            <img src="img/clothes/c2.jpg" alt="">
            <div class="des">
                <span>Allen solly</span>
                <h5>polo Tshirt</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>₹ 900
                     </h4> 
            </div>
            <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
        <div class="pro">
            <img src="img/clothes/c3.jfif" alt="">
            <div class="des">
                <span>Roadster</span>
                <h5>Casula checked shirt</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>₹ 1,500
                     </h4> 
            </div>
            <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
        <div class="pro">
            <img src="img/clothes/c4.jfif" alt="">
            <div class="des">
                <span>Snitch</span>
                <h5>Cool Shirt</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>₹ 1,300
                     </h4> 
            </div>
            <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
        <div class="pro">
            <img src="img/clothes/c5.jpeg" alt="">
            <div class="des">
                <span>Spykar</span>
                <h5>Cool shirt</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    
                </div>
                <h4>₹ 2,200
                     </h4> 
            </div>
            <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
        <div class="pro">
            <img src="img/clothes/c6.jpeg" alt="">
            <div class="des">
                <span>Being Human</span>
                <h5>Casual slim fit Shirt</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    
                    <i class="fas fa-star"></i>
                </div>
                <h4>₹ 2,000
                     </h4> 
            </div>
            <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
        <div class="pro">
            <img src="img/clothes/c7.jfif" alt="">
            <div class="des">
                <span>lee</span>
                <h5>Casual Shirt</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    
                </div>
                <h4>₹ 1,999
                     </h4> 
            </div>
            <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
        <div class="pro">
            <img src="img/clothes/c8.jpeg" alt="">
            <div class="des">
                <span>Spykar</span>
                <h5>Casual slim fit Shirt</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>₹ 2,500
                     </h4> 
            </div>
            <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
        
    </div> 

</section>

<section id="sm-banner" class="section-p1">
    <div class="banner-box">
        <h4>crazy deals</h4>
        <h2>buy 1 get 1 free</h2>
        <span>The best classic dress is on sale at InstaKart</span>
        <button class="white">Learn More</button>

    </div>
    <div class="banner-box banner-box2">
        <h4>spring summer</h4>
        <h2>buy 1 get 1 free</h2>
        <span>Upcomming season</span>
        <button class="white">Learn More</button>

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
    <div class="copyright">
        <p>&copysr; InstaKart 2023</p>
    </div>
    -->
    <div class="copyright">
        <p>&copysr;InstaKart 2023</p>
    </div>
</footer>

    <script src="script.js"></script>
</body>
</html> 

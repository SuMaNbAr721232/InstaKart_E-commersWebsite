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
            <li><a href="About.php">About</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li id="lg-bag"><a class="active" href="cart.php"><i class="far fa-shopping-bag"></i></a></li>
            <a href="#" id="close"><i class="fa fa-times"></i></a>
    
        </ul>
    </div>
    <div id="mobile">
        <a href="cart.php"><i class="far fa-shopping-bag"></i></a>
        <i id="bar" class="fas fa-outdent"></i>
    </div>
    </section>
    <section id="page-header" class="cart-header">
        <h2><strong>#cart</strong></h2>

        <p><strong>Add your coupon code & SAVE upto 70%!</strong></p>


    </section>

    <section id="cart" class="section-p1">
        <table width="100%">
            <thead> <!--Table head-->
                <tr>
                    <td>Image</td>
                    <td>Product</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Subtotal</td>
                    <td>Remove</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="img/product/p1.jpg" alt=""></td>
                    <td>Apple ipad mini</td>
                    <td>₹ 52,000</td>
                    <td><input type="number" value="1"></td>
                    <td>₹ 52,000</td>
                    <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                </tr>
                <tr>
                    
                    <td><img src="img/clothes/c1.jpg" alt=""></td>
                    <td>Formal Shirt</td>
                    <td>₹ 1299</td>
                    <td><input type="number" value="1"></td>
                    <td>₹ 1299</td>
                    <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                </tr>
                <tr>
                    <td><img src="img/clothes/c9.jfif" alt=""></td>
                    <td>Casual Shirt</td>
                    <td>₹ 1599</td>
                    <td><input type="number" value="1"></td>
                    <td>₹ 1599</td>
                    <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                </tr>
                <tr>
                    <td><img src="img/product/p6.jpg" alt=""></td>
                    <td>HP Pavilion-500</td>
                    <td>₹ 38,000</td>
                    <td><input type="number" value="1"></td>
                    <td>₹ 52,000</td>
                    <td><a href="#"><i class="far fa-times-circle"></i></a></td>
            </tr>
            </tbody>

        </table>
    </section>

    <section id="cart-add" class="section-p1">
        <div id="coupon">
            <h3>Apply Coupon</h3>
            <div>
                <input type="text" placeholder="Enter Your Coupon">
                <button class="normal">Apply</button>
            </div>
        </div>
        <div id="subtotal">
            <h3>Cart Totals</h3>
            <table>
                <tr>
                    <td>Cart Subtotal</td>
                    <td>₹ 160,898</td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>Free</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong>₹ 160,898 </strong></td>
                </tr>
            </table>
            <button class="normal">Proceed to checkout</button>
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
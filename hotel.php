<?php 
    include 'connection.php';
    if(!isset($_SESSION['isLoginAble']))
        $_SESSION['isLoginAble'] = null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Vacation Connection</title>
    <link rel="shortcut icon" href="https://img.icons8.com/doodle/50/000000/beach--v1.png" />
    <link rel="stylesheet" href="home.css">    
</head>

<body>
    <header>
        <div id="menu-bar" class="fas fa-bars"></div>
        <img src="https://img.icons8.com/doodle/50/000000/beach--v1.png" />
        <a href="#" class="logo"><span>V</span>acation <span>C</span>onnection</a>
        <nav class="navbar">
            <a href="home.php">home</a>
            <?php
            if($_SESSION['isLoginAble'] != null && $_SESSION['isLoginAble'] == "Admin"){
                ?>
                <a href="table/registrationinformation.php">Register Person</a>
                <a href="table/contactinformation.php">Contact Info</a>
                <a href="table/bookingInformation.php">Booking info</a>  
                <a href="#" style="color: #F26100;"> <b><?php echo $_SESSION['isLoginAble']; ?></b> </a>;
                <a href="logout.php" style="color: #F26100; font-size: 3rem;"> <b><i class="fas fa-sign-out-alt"></i></b>
                <?php 
            }
            else if($_SESSION['isLoginAble'] != null ){
        ?>
                <a href="#book">book</a>
                <a href="#packages">packages</a>
                <a href="#services">services</a>
                <a href="#gallery">gallery</a>
                <a href="#review">review</a>
                <a href="table/b_user.php">Booking info</a>  
                <a href="#" style="color: #F26100;"> <b><?php echo $_SESSION['isLoginAble']; ?></b> </a>;
                <a href="logout.php" style="color: #F26100; font-size: 3rem;"> <b><i class="fas fa-sign-out-alt"></i></b>
                <?php 
            }
            else {
        ?>      
            <a href="booking.php">book</a>
            <a href="#gallery">Hotel</a>
            <a href="#pricing">packages</a>
            <a href="#contact">contact</a>     
        </nav>
        <div class="icons">
            <i class="fas fa-search" id="search-btn"></i>
            <i class="fas fa-user" id="login-btn"></i>  
        </div>
        <?php } ?>
        <form action="" class="search-bar-container">
            <input type="search" id="search-bar" placeholder="search here...">
            <label for="search-bar" class="fas fa-search"></label>
        </form>

    </header>

    <div class="login-form-container" id="login">
        <i class="fas fa-times" id="form-close"></i>
        <form action="login.php" method="POST">
            <h3>login</h3>
            <input type="email" name="email" class="box" placeholder="enter your email">
            <input type="password" name= "password" class="box" placeholder="enter your password">
            <input type="submit" value="login now" class="btn">
            <input type="checkbox" id="remember">
            <label for="remember">remember me</label>
            <p>forget password? <a href="#">click here</a></p>
            <p>don't have and account? <a href="register/registration.php">register now</a></p>
        </form>
    </div>

    <section class="home" id="home">

        <div class="content">
            <h3>Travel With travelers</h3>
            <p>dicover new places with us, adventure awaits</p>            
        </div>

        <div class="video-container">
            <video src="images/vid-1.mp4" id="video-slider" loop autoplay muted></video>
        </div>

    </section>

    <section class="gallery" id="gallery">

        <h1 class="heading">
            <span>H</span>
            <span>o</span>
            <span>t</span>
            <span>e</span>
            <span>l</span>
            <span>s</span>            
        </h1>
    
        <div class="box-container">
    
            <div class="box">
                <img src="images/melasti.jpg" alt="">
                <div class="content">
                    <h3>Melasti Beach Spa</h3>
                    <p></p>
                    <a href="https://www.melastikuta.com/" target="_blank" class="btn">see more</a>
                </div>
            </div>
                    <div class="box">
                <img src="images/paris.jpg" alt="">
                <div class="content">
                    <h3>Holiday Inn Express</h3>
                    <p></p>
                    <a href="https://www.hotel-hiexpariscdgairport.com/en/" target="_blank" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/bangkok.jpg" alt="">
                <div class="content">
                    <h3>Bangkok Cha-Da Hotel</h3>
                    <p></p>
                    <a href="https://www.bangkokchadahotel.com/" target="_blank" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/raffels.jpg" alt="">
                <div class="content">
                    <h3>Raffles Dubai</h3>
                    <p></p>
                    <a href="https://www.raffles.com/dubai/" target="_blank" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/sayeman.jpg" alt="">
                <div class="content">
                    <h3>Sayemon Beach Resort</h3>
                    <p></p>
                    <a href="https://sayemanresort.com/" target="_blank" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/royal.jpg" alt="">
                <div class="content">
                    <h3>Royal Tulip Sea parl</h3>
                    <p></p>
                    <a href="http://www.seapearlbd.com/" target="_blank" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/sairu.jpg" alt="">
                <div class="content">
                    <h3>Sairu Hill Resort</h3>
                    <p></p>
                    <a href="https://sairuresort.com/" target="_blank" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/hill view.jpg" alt="">
                <div class="content">
                    <h3>Sajek Hill View Resort</h3>
                    <p></p>
                    <a href="https://www.sajekhillview.com/" target="_blank" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/salam.jpg" alt="">
                <div class="content">
                    <h3>Hotel Castle Salam</h3>
                    <p></p>
                    <a href="http://www.hotelcastlesalam.com/" target="_blank" class="btn">see more</a>
                </div>
            </div>    
        </div>    
    </section> 
    
    <section class="pricing" id="pricing">

        <h1 class="heading">
            <span>o</span>
            <span>u</span>
            <span>r</span>
            <span>p</span>
            <span>r</span>
            <span>i</span>
            <span>c</span>
            <span>i</span>
            <span>n</span>
            <span>g</span>         
        </h1>

        <div class="box-container">

            <div class="box" data-aos="zoom-in-up">
                <h3> basic plan </h3>
                <div class="price">
                    <span>$</span>
                    <span class="amount">30</span>
                    <span>/mo</span>
                </div>
                <ul>
                    <li>10 days</li>
                    <li>food and drinks</li>
                    <li>safty guide</li>
                    <li>insurance</li>
                    <li>luxury hotel</li>
                </ul>
                <a href="payment.html" class="btn">choose plan</a>
            </div>

            <div class="box" data-aos="zoom-in-up">
                <h3> standard plan </h3>
                <div class="price">
                    <span>$</span>
                    <span class="amount">50</span>
                    <span>/mo</span>
                </div>
                <ul>
                    <li>20 days</li>
                    <li>food and drinks</li>
                    <li>safty guide</li>
                    <li>insurance</li>
                    <li>luxury hotel</li>
                </ul>
                <a href="payment.html" class="btn">choose plan</a>
            </div>

            <div class="box" data-aos="zoom-in-up">
                <h3> premium plan </h3>
                <div class="price">
                    <span>$</span>
                    <span class="amount">90</span>
                    <span>/mo</span>
                </div>
                <ul>
                    <li>30 days</li>
                    <li>food and drinks</li>
                    <li>safty guide</li>
                    <li>insurance</li>
                    <li>luxury hotel</li>
                </ul>
                <a href="payment.html" class="btn">choose plan</a>
            </div>

        </div>

    </section>
    <section class="contact" id="contact">

        <h1 class="heading">
            <span>c</span>
            <span>o</span>
            <span>n</span>
            <span>t</span>
            <span>a</span>
            <span>c</span>
            <span>t</span>
        </h1>

        <div class="row">

            <div class="image">
                <img src="images/contact-img.svg" alt="">
            </div>

            <form action="contact.php" method="POST">

                <input class="inputBox" name="name" type="text" placeholder="name">
                <input class="inputBox" name="email" type="email" placeholder="email@.com">
                <input class="inputBox" name="number" type="number" placeholder="+00">
                <input class="inputBox" name="subject" type="text" placeholder="subject">
                <textarea class="inputBox" name="message" placeholder="message"></textarea>
                <input type="submit" class="btn" value="send message">
            </form>

        </div>

    </section>

    <section class="brand-container">

        <div class="swiper-container brand-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="images/1.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/2.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/3.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/5.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/6.jpg" alt=""></div>
            </div>
        </div>

    </section>

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>about us</h3>
                <p>Vacation Connection is a largest travel agency that covers your air tickets, visa support, tour
                    packages and hotel facilities with a goal to give you great and smooth experience in events and
                    tours.</p>
            </div>
            <div class="box">
                <h3>branch locations</h3>
                <a href="#">Bangladesh</a>
                <a href="#">Dubai</a>
                <a href="#">japan</a>
                <a href="#">france</a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="https://www.facebook.com/" target="_blank">facebook</a>
                <a href="https://www.instagram.com/" target="_blank">instagram</a>
                <a href="https://twitter.com/" target="_blank">twitter</a>
                <a href="https://www.linkedin.com/" target="_blank">linkedin</a>
            </div>

        </div>
    </section>

    <script>
        function logindiv() {
            document.getElementById('login').style.display = "block";
        }
    </script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="home.js"></script>

</body>
</html>
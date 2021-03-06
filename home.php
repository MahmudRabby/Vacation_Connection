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
            <a href="#home">home</a>
            <?php
            if($_SESSION['isLoginAble'] != null && $_SESSION['isLoginAble'] == "Admin"){
                ?>
                <a href="table/registrationinformation.php">Register Person</a>
                <a href="table/contactinformation.php">Contact Info</a>
                <a href="table/bookingInformation.php">Booking info</a>  
                <a href="#" style="color: #F26100;"> <b><?php echo $_SESSION['isLoginAble']; ?></b></a>;
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
            <a href="#book">book</a>
            <a href="#packages">packages</a>
            <a href="#services">services</a>
            <a href="#gallery">gallery</a>
            <a href="#review">review</a>
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

    <section class="book" id="book">

        <h1 class="heading">
            <span>b</span>
            <span>o</span>
            <span>o</span>
            <span>k</span>
            <span class="space"></span>
            <span>n</span>
            <span>o</span>
            <span>w</span>
        </h1>

        <div class="row">

            <div class="image">
                <img src="images/Trip.gif" alt="">
            </div>

            <form action="booking.php" method="POST">

                <h3>where to</h3>
                <input class="inputBox" name="place" type="text" placeholder="place name">
                <h3>how many</h3>
                <input class="inputBox" name="adult" type="number" style="width: 49%;" placeholder="number of Adult">       
                <input class="inputBox" name="child" type="number" style="width: 49%;" placeholder="number of Childern">
                <h3>Email</h3>
                <input class="inputBox" name="email" type="email" placeholder="email@.com">
                <h3>Phone Number</h3>
                <input class="inputBox" name="phone" type="number" placeholder="+00">
                <h3>arrivals</h3>
                <input class="inputBox" name="arrival" type="date">
                <h3>leaving</h3>
                <input class="inputBox" name="leaving" type="date">
                <input type="submit" class="btn" value="book now">
            </form>

        </div>

    </section>

    <section class="packages" id="packages">

        <h1 class="heading">
            <span>p</span>
            <span>a</span>
            <span>c</span>
            <span>k</span>
            <span>a</span>
            <span>g</span>
            <span>e</span>
            <span>s</span>
        </h1>

        <div class="box-container">


            <div class="box">

                <img src="images/p-1.jpg" alt="">
                <form action="autobook.php" method="POST">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> Cox's Bazar </h3>
                    <p>It is a "longest natural unbroken sea beach" in the world!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> BDT 5000 <span>BDT 7000.00</span> </div>
                    <input type="text" name="placeinfo" value="Coxs Bazar" hidden>
                    <input type="submit" class="btn" value="book now">
                </div>
                </form>
            </div>


            <div class="box">
                <img src="images/p-2.jpg" alt="">
                <form action="autobook.php" method="POST">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> Shundarban </h3>
                    <p>Sundarbans, a visit to the wilderness. It's beauty lies in its unique natural surrounding.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> BDT 5000 <span>BDT 6000</span> </div>
                    <input type="text" name="placeinfo" value="Shundarban" hidden>
                    <input type="submit" class="btn" value="book now">
                </div>
                </form>
            </div>

            <div class="box">
                <img src="images/p-3.jpg" alt="">
                <form action="autobook.php" method="POST">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> sajek Valley </h3>
                    <p>Sajek Valley is an emerging tourist spot in Bangladesh situated among the hills of the Kasalong
                        range of mountains in Sajek union.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="price"> BDT 7000</div>
                    <input type="text" name="placeinfo" value="Sajek Valley" hidden>
                    <input type="submit" class="btn" value="book now">
                </div>
                </form>
            </div>

            <div class="box">
                <img src="images/p-4.jpg" alt="">
                <form action="autobook.php" method="POST">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> Paris </h3>
                    <p>Paris is a magnificent city, famous the world over. The ultimate romantic city, it attracts
                        tourists throughout the year.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $1200 </div>
                    <input type="text" name="placeinfo" value="Paris" hidden>
                    <input type="submit" class="btn" value="book now">
                </div>
                </form>
            </div>

            <div class="box">
                <img src="images/p-5.jpg" alt="">
                <form action="autobook.php" method="POST">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> tokyo </h3>
                    <p>Tokyo, Japan???s busy capital, mixes the ultramodern and the traditional, from neon-lit skyscrapers
                        to historic temples.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="price"> $700.00 <span>$1000.00</span> </div>
                    <input type="text" name="placeinfo" value="Tokyo" hidden>
                    <input type="submit" class="btn" value="book now">
                </div>
</form>
            </div>

            <div class="box">
                <img src="images/Dubai.jpg" alt="">
                <form action="autobook.php" method="POST">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> DuBai </h3>
                    <p>Dubai is a city and emirate in the United Arab Emirates known for luxury shopping, ultramodern
                        architecture and a lively nightlife scene.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="price"> $1000.00 <span>$1200.00</span> </div>
                    <input type="text" name="placeinfo" value="DuBai" hidden>
                    <input type="submit" class="btn" value="book now">
                </div>
                </form>
            </div>

        </div>

    </section>

    <section class="services" id="services">

        <h1 class="heading">
            <span>s</span>
            <span>e</span>
            <span>r</span>
            <span>v</span>
            <span>i</span>
            <span>c</span>
            <span>e</span>
            <span>s</span>
        </h1>

        <div class="box-container">

            <div class="box">
            <a href="hotel.php"><i class="fas fa-hotel" ></i></a> 
                <h3>affordable hotels</h3>
                <p>We are affiliated with International Hotels. We provide you any types of Hotels around the world.The
                    hotel's family-friendly and home-like accommodation concept also provide many advantages.</p>
            </div>
            <div class="box">
                <i class="fas fa-utensils"></i>
                <h3>food and drinks</h3>
                <p>We provide nutritious and quality food from the beginning to the end of the journey. The hotel
                    restaurant with both indoor and outdoor seating offers an open-buffet breakfast and is directly
                    accessible from guestroom corridors.</p>
            </div>
            <div class="box">
                <i class="fas fa-bullhorn"></i>
                <h3>safty guide</h3>
                <p>Your safety is our personal responsibility.We take responsibility and clean up if you made a mess.
                    You can contact us directly to solve any of your problems.</p>
            </div>
            <div class="box">
                <i class="fas fa-globe-asia"></i>
                <h3>around the world</h3>
                <p>We provide our services everywhere in the world, including Bangladesh. So that anyone from any
                    country can get our service very easily.</p>
            </div>
            <div class="box">
                <i class="fas fa-plane"></i>
                <h3>fastest travel</h3>
                <p>Our services has different varieties. We provide fastest transportation service for reach the
                    destination as required time. So, It's easy to visit around the world in a efficient way.</p>
            </div>
            <div class="box">
                <i class="fas fa-hiking"></i>
                <h3>adventures</h3>
                <p>Adventures is such a activities with some potential for physical danger such as traveling, exploring,
                    skydiving, mountain climbing, or participating in extreme sports. So we added this types of
                    opportunities with our packages.</p>
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
                <a href="payment/paymentform.html" class="btn">choose plan</a>
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
                <a href="payment/paymentform.html" class="btn">choose plan</a>
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
                <a href="payment/paymentform.html" class="btn">choose plan</a>
            </div>

        </div>

    </section>


    <section class="gallery" id="gallery">

        <h1 class="heading">
            <span>g</span>
            <span>a</span>
            <span>l</span>
            <span>l</span>
            <span>e</span>
            <span>r</span>
            <span>y</span>
        </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/g-1.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <!-- <p></p>
                    <a href="#" class="btn">see more</a> -->
                </div>
            </div>
            <div class="box">
                <img src="images/g-2.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <!-- <p></p>
                    <a href="#" class="btn">see more</a> -->
                </div>
            </div>
            <div class="box">
                <img src="images/g-3.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <!-- <p></p>
                    <a href="#" class="btn">see more</a> -->
                </div>
            </div>
            <div class="box">
                <img src="images/g-4.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <!-- <p></p>
                    <a href="#" class="btn">see more</a> -->
                </div>
            </div>
            <div class="box">
                <img src="images/g-5.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <!-- <p></p>
                    <a href="#" class="btn">see more</a> -->
                </div>
            </div>
            <div class="box">
                <img src="images/g-6.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <!-- <p></p>
                    <a href="#" class="btn">see more</a> -->
                </div>
            </div>
            <div class="box">
                <img src="images/g-7.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <!-- <p></p>
                    <a href="#" class="btn">see more</a> -->
                </div>
            </div>
            <div class="box">
                <img src="images/g-8.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <!-- <p></p>
                    <a href="#" class="btn">see more</a> -->
                </div>
            </div>
            <div class="box">
                <img src="images/g-9.jpg" alt="">
                <div class="content">
                    <h3>amazing places</h3>
                    <!-- <p></p>
                    <a href="#" class="btn">see more</a> -->
                </div>
            </div>

        </div>

    </section>

    <section class="review" id="review">

        <h1 class="heading">
            <span>r</span>
            <span>e</span>
            <span>v</span>
            <span>i</span>
            <span>e</span>
            <span>w</span>
        </h1>

        <div class="swiper-container review-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/Alma.jpg" alt="">
                        <h3>Sadia Afroz</h3>
                        <p>I have travelled countless times, always very helpful. Trips well planned, hotels and boats
                            first class. Perhaps more expensive than other companies but ???you pays your money and get
                            want you want??? Good leadership excellent local guides and wonderful lectures.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/ovi.jpg" alt="">
                        <h3>Naim Ovi</h3>
                        <p>Based on other positive reviews, we booked a 4-day Dubai tour with family. I found the
                            service and response of this travel agency to be excellent.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/Mahmud.jpg" alt="">
                        <h3>Mahmud Hassan Rabby</h3>
                        <p>Fantastic advice for planning a trip of a lifetime. Insightful recommendations based on real
                            life experiences.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/Raihan.jpg" alt="">
                        <h3>Raihan Bin Rafique</h3>
                        <p>My Wife and I recently used Paris Travel for a trip to France. The destination is great. The
                            hotel service and other excursions were excellent.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>

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
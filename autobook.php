<?php 
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Vacation Connection</title>
    <link rel="shortcut icon" href="https://img.icons8.com/doodle/50/000000/beach--v1.png"/>
    <link rel="stylesheet" href="home.css">	
</head>
<body> 
    <header>
    <div id="menu-bar" class="fas fa-bars"></div>
    <img src="https://img.icons8.com/doodle/50/000000/beach--v1.png"/>
    <a href="#" class="logo"><span>V</span>acation <span>C</span>onnection</a>
    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#book">book</a>
        <a href="#packages">packages</a>
        <a href="#services">services</a>
        <a href="#gallery">gallery</a>
        <a href="#review">review</a>
        <a href="#contact">contact</a>
        <?php
            if($_SESSION['isLoginAble'] != null ){
        ?>
                <a href="#" style="color: #F26100;"> <b><?php echo $_SESSION['isLoginAble']; ?></b> </a>; <?php 
            }
            else {                
        ?>  
        <a href="home.php" style="color: #F26100;"> <b><?php echo "login"; ?></b> </a>;

    </nav>
   
    <?php } ?> 
    

</header>





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
                <?php
                    $p = $_POST['placeinfo'];
                    $_SESSION['place'] = $p;
                ?>
                <input class="inputBox" name="pla" type="text" placeholder="<?php echo $p; ?>" disabled>        
                <h3>how many</h3>
                <input class="inputBox" name="adult" type="number" style="width: 45%;" placeholder="number of Adult">       
                <input class="inputBox" name="child" type="number" style="width: 45%;" placeholder="number of Childern">           
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

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>about us</h3>
            <p>Vacation Connection is a largest travel agency that covers your air tickets, visa support, tour packages and hotel facilities with a goal to give you great and smooth experience in events and tours.</p>
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
            <a href="https://www.facebook.com/"target = "_blank">facebook</a>
            <a href="https://www.instagram.com/"target = "_blank">instagram</a>
            <a href="https://twitter.com/"target = "_blank">twitter</a>
            <a href="https://www.linkedin.com/"target = "_blank">linkedin</a>
        </div>

    </div>
</section>



<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="home.js"></script>

</body>
</html>
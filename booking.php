<!DOCTYPE html>
<html lang="en" >
    <head>
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/animate.css@4.0.0/animate.min.css'>
        <title>Vacation Connection</title>
        <link rel="shortcut icon" href="https://img.icons8.com/doodle/50/000000/beach--v1.png" />
    </head>
    <body>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <?php
        include 'connection.php';

        if($_SESSION['isLoginAble']!= null){

            if(isset($_SESSION['place']))
            {
                $place = $_SESSION['place'];
                $_SESSION['place'] = null; 
            }
            else
                $place = $_POST['place'];
            $adult = $_POST['adult'];    
            $child = $_POST['child'];    
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $arrival = $_POST['arrival'];
            $leaving = $_POST['leaving'];    
            $status = "Applied";    
            $sql = "INSERT INTO booking(place, adult, child, email, phone, arrival, leaving, status) 
                        VALUES('$place','$adult','$child','$email','$phone', '$arrival', '$leaving','$status')";
            mysqli_query($con,$sql);
            ?>
                <script>
                swal({
                    title: "Thank you for booking.",              
                    icon: "success",
                    button: "Enjoy",
                    }).then(function() {
                        window.location = "home.php";
                    });            
                </script>   
            <?php 
        }
    
        else{
            ?>
                <script>
                    swal({
                    title: "Before booking any place.",  
                    title: "Please login.",  
                    icon: "warning",
                    button: "Ok",
                    }).then(function() {
                        window.location = "home.php";
                    });            
                </script>   
            <?php
            }
        ?>
    </body>
</html>
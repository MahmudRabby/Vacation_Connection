<!DOCTYPE html>
<html lang="en" >
<head>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/animate.css@4.0.0/animate.min.css'>
  <title>Vacation Connection</title>
  <link rel="shortcut icon" href="https://img.icons8.com/doodle/50/000000/beach--v1.png" />
</head>
<body>
<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
<?php
include 'connection.php';

    $name = $_POST['name'];         
    $email = $_POST['email'];
    $number = $_POST['number'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];    
    $sql = "INSERT INTO contact(name, email, number, subject, message, date) 
                    VALUES ('$name', '$email', '$number', '$subject', '$message', current_timestamp())";
                    
    mysqli_query($con,$sql);
?>
        <script>
            Swal.fire({
            title: 'Thank you for contacting with us.',
            showClass: {
                popup: 'animate__animated animate__fadeInDown'
            },
            hideClass: {
                popup: 'animate__animated animate__fadeOutUp'
            }
            }).then(function() {
                window.location = "home.php";
            });            
        </script>   
</body>
</html>
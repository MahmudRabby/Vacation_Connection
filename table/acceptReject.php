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
            include '../connection.php';
            $type = $_POST['type'];
            $t = $_SESSION['info'];
            $email = $t['email'];
            $place = $t['place'];
            $leaving = $t['leaving'];
            $arrival = $t['arrival'];
            $phone = $t['phone'];
            $status = $t['status'];
            $result = "UPDATE booking
                        SET status= '$type'
                        WHERE email = '$email' AND place = '$place' AND leaving = '$leaving' AND phone = '$phone' 
                        AND arrival = '$arrival'";        
            mysqli_query($con, $result);        
        ?>
        <script>
            Swal.fire({
                    title: 'Successfully Done.',
                    showClass: {
                        popup: 'animate__animated animate__fadeInDown'
                    },
                    hideClass: {
                        popup: 'animate__animated animate__fadeOutUp'
                    }
                    }).then(function() {
                        window.location = "bookingInformation.php";
                    });    
        </script>
    </body>
</html>  
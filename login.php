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
$_SESSION['isLoginAble'] = null;

$email = $_POST['email'];
$pass = $_POST['password'];
$sql = "SELECT * FROM registration WHERE email='$email' AND password='$pass'";
$result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) == 1 ){
        $value = $result->fetch_assoc();
        $_SESSION['isLoginAble'] = $value['name'];
        $_SESSION['userEmail'] = $value['email'];
        ?>
        <script>
            Swal.fire({
            title: 'Welcome to our website. Mr./Mrs. <?php echo $_SESSION['isLoginAble']; ?>',
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
        <?php
    }
    else{
        ?>
        <script>
            Swal.fire({
            title: 'Please use valid email or password',
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
        <?php
    }
?>
</body>
</html>
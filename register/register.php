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
        include '../connection.php';
            $fname = $_POST['fname'];         
            $lname = $_POST['lname'];
            $name = $fname." ".$lname; 
            $num = $_POST['number']; 
            if(!empty($_POST['gender'])) {
                $gender = $_POST['gender'];
            }
            $email = $_POST['email'];
            $password = $_POST['password'];
            $repass = $_POST['repass'];                    
            $date = date('Y-m-d');         
            $check = "SELECT * from registration where email='$email'";
            $result = mysqli_query($con, $check);
            if (mysqli_num_rows($result) == 1){
                ?>
                <script>
                    swal({
                    title: "Email is already exists.",
                    text: "Try another eamil",
                    icon: "error",
                    button: "Retry",
                    }).then(function() {
                        window.location = "registration.php";
                    });
                </script>
                <?php
            }        
            else if($password != $repass)
            {
            ?>    
            <script>        
                    swal({
                    title: "Password Not matched.",
                    text: "Enter same password twice.",
                    icon: "error",
                    button: "Retry",
                    }).then(function() {
                        window.location = "registration.php";
                    });
            </script>    
            <?php
            }
            else{
                $sql = "INSERT INTO registration(name, phone_no, gender, email, password, date) VALUES('$name','$num','$gender','$email', '$password', '$date')";
                mysqli_query($con,$sql);
                ?>        
                <script>
                    swal({
                    title: "Registration Successful",
                    text: "Now you can login",
                    icon: "success",
                    button: "Enjoy",
                    }).then(function() {
                        window.location = "../home.php";
                    });
                </script>     
            <?php
            }     
        ?>
    </body>
</html>
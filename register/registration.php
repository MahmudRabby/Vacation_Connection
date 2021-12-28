<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
      <meta charset="UTF-8">    
      <link rel="stylesheet" href="registration.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Vacation Connection</title>
      <link rel="shortcut icon" href="https://img.icons8.com/doodle/50/000000/beach--v1.png" />
    </head>

    <body>
      <div class="container">
        <div class="title">Registration</div>
        <div class="content">
          <form action="register.php" method="POST">
            <div class="user-details">
              <div class="input-box">
                <span class="details">First Name</span>
                <input type="text" placeholder="Enter your First name" name="fname" required>
              </div>
              <div class="input-box">
                <span class="details">Last Name</span>
                <input type="text" placeholder="Enter your Last name" name="lname"required>
              </div>
              <div class="input-box">
                <span class="details">Email</span>
                <input type="email" placeholder="Enter your email" name="email" required>
              </div>
              <div class="input-box">
                <span class="details">Phone Number</span>
                <input type="text" placeholder="Enter your number" required name="number">
              </div>
              <div class="input-box">
                <span class="details">Password</span>
                <input type="password" placeholder="Enter your password" required name="password">
              </div>
              <div class="input-box">
                <span class="details">Confirm Password</span>
                <input type="password" placeholder="Confirm your password" required name="repass">
              </div>
            </div>
            <div class="gender-details">
              <input type="radio" name="gender" value="male" id="dot-1">
              <input type="radio" name="gender" value="female" id="dot-2">
              <input type="radio" name="gender" value="not prefer" id="dot-3">
              <span class="gender-title">Gender</span>
              <div class="category">
                <label for="dot-1">
                <span class="dot one"></span>
                <span class="gender">Male</span>
              </label>
              <label for="dot-2">
                <span class="dot two"></span>
                <span class="gender">Female</span>
              </label>
              <label for="dot-3">
                <span class="dot three"></span>
                <span class="gender">Prefer not to say</span>
                </label>
              </div>
            </div>
            <div class="button">
              <input type="submit" value="Register">
              <a href="../home.php">Back</a>
            </div>
          </form>
        </div>
      </div>
    </body>
</html>
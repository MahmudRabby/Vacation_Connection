<?php 
include '../connection.php';
$result = "SELECT * from registration";
$res = mysqli_query($con, $result);
?>
<!doctype html>
<html lang="en">
  <head>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">    
    <link rel="stylesheet" href="css/bootstrap.min.css">   
    <link rel="stylesheet" href="css/style.css">
    <title>Vacation Connection</title>
    <link rel="shortcut icon" href="https://img.icons8.com/doodle/50/000000/beach--v1.png" />    
  </head>

  <body> 
  <div class="content">    
    <div class="container">
      <h2 class="mb-5 text-center">Registration Information</h2>   
      <div class="table-responsive custom-table-responsive">
        <table class="table custom-table">
          <thead>
            <tr>
              <th scope="col">
                <label class="control control--checkbox">
                  <input type="checkbox"  class="js-check-all"/>
                  <div class="control__indicator"></div>
                </label>
              </th>
              
              <th scope="col">Name</th>              
              <th scope="col">Contact Number</th>
              <th scope="col">Gender</th>
              <th scope="col">Email</th>
              <th scope="col">Password</th>
              <th scope="col">Date</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            while($t = mysqli_fetch_array($res)){
            ?>
            <tr scope="row">
              <th scope="row">
                <label class="control control--checkbox">
                  <input type="checkbox"/>
                  <div class="control__indicator"></div>
                </label>
              </th>
              <td>
                <?php echo $t['name'];  ?>
              </td>
              <td>
                <?php echo $t['phone_no'];  ?>
              </td>
              <td>
                <?php echo $t['gender'];  ?>
              </td>              
              <td>
                <?php echo $t['email'];  ?>
              </td>              
              <td>
                <?php echo $t['password'];  ?>
              </td>              
              <td><?php echo $t['date'];?></td>
            </tr>
            <tr class="spacer"><td colspan="100"></td></tr>
            <?php } ?>            
          </tbody>          
        </table>
        <a href="../home.php"><button class="btn btn-success btn-lg float-right">Back</button></a>
      </div>
    </div>
  </div>  
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
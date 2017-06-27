<?php
    $alert = "";
    include('connection.php');
    if(isset($_POST['signup'])){
      $email = $_POST['email'];
      $pass = $_POST['password'];
      $name = $_POST['name'];
      $org = $_POST['org'];
      $query1 = "insert into login (email_id,pass,user_type) values ('$email','$pass','employer')";
      $query2 = "insert into employer (name,org_name,email_id) values ('$name','$org','$email')";
    
      if( mysqli_query( $conn, $query1 ) && mysqli_query( $conn, $query2) )
        $alert = "<div class='alert alert-success'>Insertion Successful</div>";
      else{
        $alert = "<div class='alert alert-danger'>Error In Insertion <br>".$query1."<br>".$query2."<br>".mysqli_error($conn) ."</div>";
      }
    } 
    mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Sign Up - Employer</title>
      
    <!-- Bootstrap core CSS -->
    <link href="../bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this Website -->
    <link href="../css/style.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">  
        <a class="navbar-brand" href="../index.php"><img id="logo" src="../images/internshala_logo.png"></a>    
      </div>    
<!---------------  Sign Up Student form   ---------------->
      <?php  echo $alert;   ?>
      <div class="container form-container">
          
          <h2 class="text-center">Sign Up - Employer</h2><hr>
              <form id="" method="post">
                  <label>Name</label>
                  <input id="name" class="form-control" type="text" name="name" placeholder="Enter your Name" required>
                  <label>Email ID</label>
                  <input id="email-id" class="form-control" type="email" name="email" placeholder="Enter Email ID" required>
                  <label>Organization Name</label>
                  <input id="login-id" class="form-control" type="text" name="org" placeholder="Name of Organization" required>
                  <label>Password</label>
                  <input id="password" class="form-control" type="password" name="password" placeholder="Enter your password" required>
                  <div class="text-center">
                      <button type="submit" class="btn btn-primary  login" name="signup" style="margin: 20px 0px 20px 0px;">Sign Up</button>
                  </div>
                  <div class="modal-footer">
                      <p class="text-center">Registered User? 
                          <a href="login.php">Login Here!</a>
                      </p>
                  </div>  
              </form>
      </div>
        <footer class="footer">
          <div class="container padding-10">
            <p>&copy; 2017 - Internshala.com</p>
          </div>
        </footer>
    </body>    
</html>
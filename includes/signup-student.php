<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Sign Up - Student</title>
      
    <!-- Bootstrap core CSS -->
    <link href="../bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this Website -->
    <link href="../css/style.css" rel="stylesheet">
  </head>
  <body>
    <div class="container row">  
        <div class="col-sm-9">
                <a href="../index.php"><img class="logo" src="../images/logo.png"></a>
        </div>
        <div class="col-sm-3">
            <p class="text-center">Registered User? <a id="login" class="btn btn-primary" href="login.php">Login</a></p>
        </div>
    </div>
<!---------------  Sign Up Student form   ---------------->
    <div class="container form-container" id="student-signup">
      <h2 class="text-center">Sign Up - Student</h2><hr>
        <form id="" method="post">
          <label>Name</label>
                <input id="name" class="form-control" type="text" name="name" placeholder="Enter your Name" required>
                <label>Email ID</label>
                <input id="email-id" class="form-control" type="email" name="email" placeholder="Enter Email ID" required>
                <label>Highest Qualification</label>
                <input id="login-id" class="form-control" type="text" name="h_qual" placeholder="Enter your highest Qualification" required>
                <label>College/University Name</label>
                <input id="login-id" class="form-control" type="text" name="college" placeholder="Enter College/Univesity name" required>   
                <label>Password</label>
                <input id="password" class="form-control" type="password" name="password" placeholder="Enter your password" required>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary  login" name="signup">Sign Up</button>
                </div> 
              </form>
      </div>

     <footer class="footer">
        <div class="container padding-10">
           <p>&copy; 2017 - Internshala.com</p>
        </div>
    </footer> 
    <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="../bootstrap-3.3.6-dist/js/jquery.min.js"></script>
        <script src="../bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
    </body>    
</html>


<?php
    include('connection.php');
    if(isset($_POST['signup'])){
      $email = $_POST['email'];
      $pass = $_POST['password'];
      $name = $_POST['name'];
      $h_q = $_POST['h_qual'];
      $clg_name = $_POST['college'];
      $query1 = "insert into login (email_id,pass,user_type) values ('$email','$pass','student')";
      $query2 = "insert into student (name,highest_qualification,college_name,email_id) values ('$name','$h_q','$clg_name','$email')";
    
      if( mysqli_query( $conn, $query1 ) && mysqli_query( $conn, $query2) )
        echo "Insertion Successful";
      else{
        echo "Error In Insertion: <br>".$query1."<br>".$query2."<br>".mysqli_error($conn);
      }
    } 
    mysqli_close($conn);

?>

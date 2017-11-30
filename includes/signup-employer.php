<?php

    if(!isset($_SESSION)){
        session_start();
    }

    if(isset($_SESSION['loggedInUser'])){
        header('location:../index.php');
    }
    $alert = "";
    include('connection.php');
    if(isset($_POST['signup'])){
      $email = $_POST['email'];
      $pass = $_POST['password'];
      $name = $_POST['name'];
      $org = $_POST['org'];
      $query1 = "insert into login (email_id,pass,user_type) values ('$email','$pass','employer')";
      $query2 = "insert into employer (name,email_id,company_name) values ('$name','$email','$org')";
    
      if( mysqli_query( $conn, $query1 ) && mysqli_query( $conn, $query2) )
        $alert = "<div class='alert alert-success'>Registered Successfully</div>";
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

    <title>InternsPlace</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../bootstrap-3.3.6-dist/css/bootstrap.min.css">  
      
    <!-- Custom styles for this Website -->
    <link href="../css/style.css" rel="stylesheet">
    <style>
         .logo{
            margin:auto;
            padding-top:2.34%;
            width:100px;
        }
    </style> 
      
</head>

<body>
    
    <div class="text-center">    
        <a href="../index.php">
            <img class="logo" src="../images/logo.png">
        </a>
    </div>
    
      
      <div class="container form-container">
          
          <h2 class="text-center">Sign Up - Employer</h2><hr>
          <?php   echo $alert;   ?>
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

    <?php    require('footer.php');  ?>
<?php
    require('connection.php');
    if(!isset($_SESSION)){
        session_start();
    }
    if(isset($_SESSION['loggedInUser'])){
        
        header("location:../index.php");
    }
    $loginError = "";
    $record_count = 0;
    $sql = "select distinct type from internship";
    $res = mysqli_query( $conn, $sql );
    $val = mysqli_fetch_array($res);
    // echo $val[1];
    //if the login button is clicked or not?
    if( isset( $_POST['login'] ) )
    {
        //when clicked assign login form data to local varibles
        $email_id = $_POST['username'];
        $pass = $_POST['password'];

        //query database for inputted login email
        $query = "Select pass,user_type from login where email_id='$email_id' ";
        $result = mysqli_query( $conn, $query );
        
        //check the number of records
        $record_count = mysqli_num_rows( $result );
        if( $record_count > 0)
        {
            //if email id found in database assign associative array to local variable
            $row = mysqli_fetch_assoc( $result );

            //check the password recieved from database with stored in local variable
            if( $row['pass'] == $pass )
            {
                // if password matches then assign user type value recieved from database to a local variable
                $u_type = $row['user_type'];
                $user_id = $row['id'];
                //start the session
                session_start();

                //store data in session variable
                $_SESSION['loggedInUser'] = $email_id;
                $_SESSION['user_type'] = $u_type;

                //check the user type weather it's a student or an employer
                if( $u_type == "employer" )
                    // for employer show dashboard of employer
                    header("location: dashboard-employer.php");

                else
                    // for student show dashboard of student
                    header( "location: dashboard-student.php" );
            }
            // if password not matched then show error as incorrect password
            else
                $loginError = "<div class='alert alert-danger'>Incorrect Password! Please Check.</div>";
        }
        else
            // no such user in database
            $loginError = "<div class='alert alert-danger'>You aren't registered! Please check again or Sign Up! <a class='close' data-dismiss='alert'>&times;</a></div>";

        //close the database
        mysqli_close ($conn);
    }
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
            padding-top:5%;
            width:100px;
        }
    </style>
      
</head>

<body>
<!-----------  Login/Sign Up   ---------->
    <div class="text-center">    
        <a href="../index.php">
            <img class="logo" src="../images/logo.png">
        </a>
    </div><br><br>    
      <h3 class="text-center text-blue">Login to InternsPlace</h3><br>
        <div class="container form-container">
              <? echo $loginError; ?>
              <form class="form" method="post">
                  <label><span class="glyphicon glyphicon-user"></span>Email ID</label>
                  <input id="login-id" class="form-control" type="text" name="username" placeholder="Enter Email ID" value="<?php if( $record_count > 0 ) echo $email_id; ?>" required>
                  <label><span class="glyphicon glyphicon-eye-open"></span>Password</label>
                  <input id="password" class="form-control" type="password" name="password" placeholder="Enter your password" required><br>
                  <a class="pull-right" href="#">Forgot Password?</a><br>
                  <div class="text-center">
                      <button type="submit" class="btn btn-primary  login" name="login">Login</button><br><br>
                      <p>Don't have an account? </p>Sign Up as <a href="signup-employer.php">Employer</a>&nbsp;or <a href=signup-student.php>Student</a>
                  </div>
              </form>
          </div>
<?php include('footer.php') ?>    
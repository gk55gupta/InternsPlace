<?php
    $loginError = "";
    $record_count = 0;
    include( 'connection.php' );

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

    <title>InternsPlace - From Student to Employee</title>

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this Website -->
    <link href="../css/style.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
        <a href="../index.php"><img class="logo" src="../images/logo.png"></a>
     </div><br>
<!-----------  Login/Sign Up   ---------->
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
                      <button type="submit" class="btn btn-primary  login" name="login">Login</button>  
                  </div>
              </form>
          </div>
<?php include('footer.php') ?>    
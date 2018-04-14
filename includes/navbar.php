<?php
    
    $file_path = $_SERVER['PHP_SELF']; 
    if($file_path=="/internsplace/index.php"){
        $path = '';
    }
    else{
        $path = '../';
    }
?>   


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>InternsPlace</title>

    <!-- Bootstrap core CSS -->
    <!-- <link rel="stylesheet" href="<?php echo $path ?>bootstrap-3.3.6-dist/css/bootstrap.min.css">   -->
    <link rel="stylesheet" href="<?php echo $path ?>bootstrap-4.0.0/css/bootstrap.min.css">
    <!-- Custom styles for this Website -->
    <link href="<?php echo $path ?>css/style.css" rel="stylesheet">
    <link href="<?php echo $path ?>css/navbar.css" rel="stylesheet">
      
</head>

<body>
    <!-- navbar start here -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="<?php echo $path ?>index.php">
            <img class="logo img-responsive position-absolute" src="<?php echo $path ?>images/logo.png">
        </a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <div class="container">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo $path ?>index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $path ?>includes/internships.php"><b>Internships</b></a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>    
            <?php  check_login();  ?>
        </div>
    </nav>
    <!-- navbar ends here -->

<?php
    
    function check_login(){
        
        if(!isset($_SESSION)) {
            session_start();
        }
        
		if(isset($_SESSION['loggedInUser']))
			display_logout_header();
		else
			display_login_header();	
	}

?>

<?php	function display_logout_header(){
		echo '<li>
                    <a href='.$GLOBALS["path"].'includes/dashboard-student.php><b>Dashboard</b></a>
                </li>
	            <p class="navbar-text"> 
	            	<a href="#">
	                  <span class="glyphicon glyphicon-user"></span>'
	                  .$_SESSION["loggedInUser"].'</a>
	              </p>
	              <li>
	                  <a id="logout-btn"  type="button" class="btn btn-danger" href='.$GLOBALS["path"].'includes/logout.php>Logout</a>
	              </li>';
	}


	function display_login_header(){
		echo '<li><a id="login" class="" href='.$GLOBALS["path"].'includes/login>Login</a></li>
                <li class="dropdown">
                    <a id="signup" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sign Up <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href='.$GLOBALS["path"].'includes/signup-student.php>Student</a></li>
                        <li><a href='.$GLOBALS["path"].'includes/signup-employer.php>Employer</a></li>
                    </ul>
                </li>';

	}
?>    

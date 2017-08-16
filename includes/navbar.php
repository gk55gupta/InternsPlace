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
    <link rel="stylesheet" href="<?php echo $path ?>bootstrap-3.3.6-dist/css/bootstrap.min.css">  
      
    <!-- Custom styles for this Website -->
    <link href="<?php echo $path ?>css/style.css" rel="stylesheet">
    <link href="<?php echo $path ?>css/navbar.css" rel="stylesheet">
      
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">  
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo $path ?>index.php">
                    <img class="logo" src="<?php echo $path ?>images/logo.png">
                </a>
            </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class=""><a href="<?php echo $path ?>index.php">Home <span class="sr-only">(current)</span></a></li>
                
                <li class=""><a href="<?php echo $path ?>includes/internships.php"><b>Internships</b></a></li>
                <li>
                    <form id="search-internship" class="navbar-form">
                        <div class="form-group">
                            <input id="textbox-search" type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                </li>    
            </ul>
            <?php  check_login();  ?>
    </div><!-- /.navbar-collapse -->
    </div>        
</nav>

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



	function display_logout_header(){
		echo '<ul class="nav navbar-nav navbar-right">
                <li>
                    <a href='.$GLOBALS["path"].'includes/dashboard-student.php><b>Dashboard</b></a>
                </li>
	            <p class="navbar-text"> 
	            	<a href="#">
	                  <span class="glyphicon glyphicon-user"></span>'
	                  .$_SESSION["loggedInUser"].'</a>
	              </p>
	              <li>
	                  <a id="logout-btn"  type="button" class="btn btn-danger" href='.$GLOBALS["path"].'includes/logout.php>Logout</a>
	              </li> 
          		</ul>';
	}


	function display_login_header(){
		echo '<ul class="nav navbar-nav navbar-right">
                <li><a id="login" class="" href='.$GLOBALS["path"].'includes/login.php>Login</a></li>
                <li class="dropdown">
                    <a id="signup" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sign Up <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href='.$GLOBALS["path"].'includes/signup-student.php>Student</a></li>
                        <li><a href='.$GLOBALS["path"].'includes/signup-employer.php>Employer</a></li>
                    </ul>
                </li>
            </ul>';

	}


	function redirect( $url ) {
        ob_start();
        header( 'Location:'.$url );
        ob_end_flush();
        exit();
	}

?>    

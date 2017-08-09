<?php
    
	function check_login(){
		session_start();
		if(isset($_SESSION['loggedInUser']))
			display_logout_header();
		else
			display_login_header();	
	}



	function display_logout_header(){
		echo '<ul class="nav navbar-nav navbar-right">
	            <p class="navbar-text"> 
	            	<a href="user-profile.php">
	                  <span class="glyphicon glyphicon-user"></span>'
	                  .$_SESSION["loggedInUser"].'</a>
	              </p>
	              <li>
	                  <a id="logout-btn"  type="button" class="btn btn-danger" href="includes/logout.php">Logout</a>
	              </li> 
          		</ul>';
	}


	function display_login_header(){
		echo   '<div class="col-sm-3">
                
                <a id="login" class="btn btn-success" href="includes/login.php">Login</a>
                
                <div class="dropdown">
                    <button id="" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Sign Up
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                      <li><a href="includes/signup-student.php">Student</a></li>
                      <li><a href="includes/signup-employer.php">Employer</a></li>
                    </ul>
                </div>
            </div>';

	}


	function redirect( $url ) {
    ob_start();
    header( 'Location:'.$url );
    ob_end_flush();
    exit();
	}
?>

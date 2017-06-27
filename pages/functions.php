<?php
    function redirect( $url ) {
    ob_start();
    header( 'Location:'.$url );
    ob_end_flush();
    exit();
	}

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
	                  <a id="logout-btn"  type="button" class="btn btn-danger" href="pages/logout.php">Logout</a>
	              </li> 
          		</ul>';
	}


	function display_login_header(){
		echo   '<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
			        	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
			        	<ul class="dropdown-menu">
			        		<li><a href="#">Page 1-1</a></li>
			           		<li><a href="#">Page 1-2</a></li>
			            	<li><a href="#">Page 1-3</a></li>
			          	</ul>
			        </li>
        			<a id="login-btn" class="btn btn-success pull-right" href="pages/login.php">Login</a>
        		</ul>';

	}
?>

<!--  -->
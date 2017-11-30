<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title><?php  echo("InternsPlace - From Student To Employee"); ?></title>
      
    <!-- Bootstrap core CSS -->
    <link href="../bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this Website -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/post-internship.css" rel="stylesheet"><link href="../css/internship-page.css" rel="stylesheet">
  </head>
    
  <body>
      <nav class="navbar navbar-default" style="background-color: #fff;
    border:0;">
          <div class="container">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                  <a href="../"><img class="logo" src="../images/logo.png"></a>
              </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
              <li class="text-center">
                  <a href="internships.php" role="button">View Open Internship</a> 
              </li>
              <?php 
                    if(isset($_SESSION['loggedInUser'])){
                        $user_id = $_SESSION['loggedInUser'];  
              ?>
              <p class="navbar-text"> 
                  <span class="glyphicon glyphicon-user"></span>
                  <?php  echo $user_id;   ?>
                
              </p>
              <li>
                  <a id="logout-btn" type="button" class="btn btn-danger" href="logout.php">Logout</a>
              </li> 
              <?php     
                    }
                    else{
              ?>
                 <li>
                  <a id=""  type="button" class="btn btn-primary" href="login.php">Login</a>
              </li>        
                <?php  }
                    
              ?>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
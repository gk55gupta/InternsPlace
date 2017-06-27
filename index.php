<?php include('pages/functions.php'); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Internshala - Internships that matters</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this Website -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <nav id="navbar-index" class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> 
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">
                <img id="logo" alt="Brand" src="images/internshala_logo.png">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <?php  check_login();  ?>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav>        



    <!-- Search Jumbotron -->
    <div class="jumbotron text-center bg-blue">
        <div class="container">
            <h3>From Student to Employee</h3>
            <h4>Apply for an Internship Today!</h4>
            <form class="search">
                <div class="input-group">
                    <input id="internship-search-text" type="text" class="form-control" type="search" placeholder="Search for Internship">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="button">Search</button>
                    </span>
                </div>
            </form>
        </div>
    </div>
    <div class="container" >
    <h2 class="heading">Our Vision</h2>
            <h5 style="line-height:35px;">Our Vision

Internshala is a dot com business with the heart of dot org.

At the core of the idea is the belief that internships, if managed well, can make a positive difference to the student, to the employer, and to the society at large. Hence, the ad-hoc culture surrounding internships in India should and would change. Internshala aims to be the driver of this change.

Internshala is different things to different people</h5>
    </div>
    <footer class="footer">
        <div class="container padding-10">
           <p>&copy; 2017 - Internshala.com</p>
        </div>
    </footer>

      <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="bootstrap-3.3.6-dist/js/jquery.min.js"></script>
        <script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>

  </body>

</html>
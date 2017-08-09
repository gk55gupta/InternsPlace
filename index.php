<?php include('includes/navbar.php'); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>InternsPlace</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this Website -->
    <link href="css/style.css" rel="stylesheet">
      
</head>

<body>
    <header id="header" class="container">    
        <div class="row">
            <div class="col-sm-9">
                <a href="index.php"><img class="logo" src="images/logo.png"></a>
            </div>
            
            <?php check_login(); ?>
            
        </div>

    </header> 
    
    <div class="container-fluid hero-container">
        <div>
            <img class="hero-img" src="images/internship-image.png">
        </div>    
    </div>
    
    <!-- Search Jumbotron -->
    <div class="container" >
        <h2 class="heading">Our Vision</h2>
        <h5 style="line-height:35px;">Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Nulla porttitor accumsan tincidunt. Donec sollicitudin molestie malesuada. Donec rutrum congue leo eget malesuada. Donec sollicitudin molestie malesuada.

        Donec sollicitudin molestie malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Nulla porttitor accumsan tincidunt.

        Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta. Lorem ipsum dolor sit amet, consectetur adipiscing.
        </h5>
    </div>
    <br><br><br>
    
    <?php include('includes/footer.php'); ?>

  </body>
  <script>
      $(function(){
          
            $('#employer-container');
      });
      
      $('#student-btn').on('click', function()
        {
            $('#employer-container').hide();
            $('#student-container').fadeIn(500);
        });
      
      $('#employer-btn').on('click', function()
        {
            $('#student-container').hide();
            $('#employer-container').fadeIn(500);
        });
  </script>
</html>
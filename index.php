
    <?php include('includes/navbar.php'); ?>
    
    <div class="hero-container">
        <div>
            <img class="hero-img" src="images/internship-image.png">
        </div>    
    </div>
    
    <!-- Search Jumbotron -->
    <div class="container" >
        <h2 class="heading">Our Vision</h2>
        <p style="line-height:35px;">Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Nulla porttitor accumsan tincidunt. Donec sollicitudin molestie malesuada. Donec rutrum congue leo eget malesuada. Donec sollicitudin molestie malesuada.

        Donec sollicitudin molestie malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Nulla porttitor accumsan tincidunt.

        Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta. Lorem ipsum dolor sit amet, consectetur adipiscing.
        </p>
    </div>
    <br><br><br>
    
    <?php require('includes/footer.php'); ?>

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
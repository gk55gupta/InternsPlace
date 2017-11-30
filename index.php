<?php include('includes/navbar.php'); 
$sql = "select count(distinct type) from internships";


?>
    
    <div class="hero-container">
        <div>
            <img class="hero-img" src="images/internship-image.png">
        </div>    
    </div>
    
    <div class="container jumbotron" >
        <h1 class="heading">Our Vision</h1>
        <p style="line-height:35px;">Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Nulla quis lorem ut libero malesuada feugiat. Proin eget tortor risus.
        
        Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        
        Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur aliquet quam id dui posuere blandit. Donec rutrum congue leo eget malesuada. Donec sollicitudin molestie malesuada.
        
        Curabitur aliquet quam id dui posuere blandit. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Nulla quis lorem ut libero malesuada feugiat.
        
        Quisque velit nisi, pretium ut lacinia in, elementum id enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Nulla quis lorem ut libero malesuada feugiat.
        </p>
    </div>
    <br>
    
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
<?php $file_path = $_SERVER['PHP_SELF']; 
    if($file_path=="/internsplace/index.php"){
        $path = '';
    }
    else{
        $path = '../';
    }

?>

<footer class="bg-blue footer">
    <div class="container padding-10">
        <h4 class="text-center">&copy; 2017 - InternsPlace.com</h4>
    </div>
</footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <!-- Load the CDN first-->
    <script src="http://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
    crossorigin="anonymous"></script>

    <!-- if CDN fails to load, serve up the local vesion -->
    <script> 
        window.jQuery || 
        // document.write('<script src="<?php echo $GLOBALS["path"]; ?>bootstrap-3.3.6-dist/js/jquery.min.js"><\/script>');
        document.write('<script src="<?php echo $GLOBALS["path"]; ?>libraries/jquery.min.js"><\/script>');
    </script>
    <!-- <script src="<?php echo $GLOBALS["path"]; ?>bootstrap-3.3.6-dist/js/bootstrap.min.js"></script> -->
    <script src="<?php echo $GLOBALS["path"]; ?>bootstrap-4.0.0/js/bootstrap.min.js"></script>
    <!--  Custom Script  -->
    <script src="<?php echo $GLOBALS["path"]; ?>js/script.js" type="text/javascript"></script>

</body>
</html>              

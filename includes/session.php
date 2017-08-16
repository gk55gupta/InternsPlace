<?php
    // check if session already started
    if(!isset($_SESSION)){
        session_start();    
    }
    

    //to check if the user logged in or not
    if(!isset($_SESSION['loggedInUser'])){
		header("location:login.php");
    }
   
?>
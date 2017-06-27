<?php
// connect to a 
$server     = "localhost";
$username   = "root";
$password   = "";
$db         = "internshala_db";

//create a connection
$conn = mysqli_connect( $server, $username, $password, $db );

///check connection
if(!$conn) {
    die("Connection Failed".mysqli_connect_error() );
}

//echo "Connection Successful!";

?>
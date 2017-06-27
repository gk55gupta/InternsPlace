<?php
//include('pages/session.php');
include('pages/connection.php');

if(isset($_SESSION['user_type'])){
	echo '<h3>Welcome   '.$_SESSION['loggedInUser'].'</h3>';
	echo '<div><a href="pages/logout.php">Logout</a></div>';
	//if($_SESSION['user_type']=="student")
		
}
$query = "SELECT * from internship";
// $result = mysqli_query( $conn, $query);
// if($result){

// 	//query success
// 	echo "";

// }
// else{
// 	//error in query or connection
// 	echo "Error in sql query or connection".mysqli_error($conn);
// }

?>































<style>
	*{
		font-family:sans-serif;
	}

	img{
		width: 200px;
		display: inline-block;
		
	}
	h3{
		display: inline-block;
		color:brown;
		margin:10px;
		text-align:center;
	}
	a{
		text-decoration: none; 
		background: #ddd;
		padding:10px 33px;
		border: 0;
		cursor: pointer;
	}
	a:hover{
		background-color:#aaa; 
	}
	div{
		margin: 20px;
		float: right;
	}
</style>




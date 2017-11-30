<?php
    require('navbar.php');
    echo '<link href="../css/internship-page.css" rel="stylesheet">';
    require ('connection.php');
    $query = "select * from internship";
    $result = mysqli_query( $conn, $query );
    $record_count = mysqli_num_rows($result);

    if($record_count > 0){
        //we have data
        
        //display the data in the page
        
        //first the parent container
        echo '<div class="container">';
        
        echo'<div class="col-sm-3">
                <div class="filter-container">
                <h4>Filter By Internship Type</h4><hr>
                <input type="checkbox" name="type" value="full-time"> Full Time<br>
                <input type="checkbox" name="type" value="part-time"> Part Time<br>
                <input type="checkbox" name="type" value="work from home"> Work From Home<br><br>
                <h4>Filter By Location</h4><hr><br>
                <input class="form-control" type="text" placeholder="Location"><br>
                <button type="submit" class="btn btn-warning">Filter</button>
                </div>
            </div>
            <div class="col-sm-9">';
        //loop through the internship rows in database
        while( $row = mysqli_fetch_assoc( $result ) ){

?>

<style>
    [class=*'col-sm-']{
        padding:0;
    }
</style>
<br><br> 
    <div class="internship-container">    
        <div class="internship-header">
            <a id="internship-title" name="title" href="#">
                <?php  echo $row['position'];  ?>
            </a>
        </div>
        <div class="row text-center margin-20">
            <div class="col-sm-2">
                <p class="text-blue">Location</p>
                <p class="sub-title text-grey">
                    <?php  echo $row['location']; ?>
                </p>
            </div>
            <div class="col-sm-5">
                <p class="text-blue">Skills</p>
                <p class="sub-title text-grey">
                    <?php  echo $row['skills']; ?>
                </p>
            </div>
            <div class="col-sm-2">
                <p class="text-blue">Duration</p>
                <p class="sub-title text-grey">
                    <?php  echo $row['duration']; ?>
                </p>
            </div>
            
            <div class="col-sm-3">
                <?php  $_SESSION['internship_id'] = $row['id'];  ?>
                <form method="post">
                    <button type="submit" class="btn btn-primary" name="apply-internship">Apply</button>
                </form>
                
            </div>
        </div>
    </div><br>

<?php
        }
        //closing parent container
        echo '</div>';
        
        //closing right main container of internships
        echo '</div>';
    }
    else{
        echo "<div class='alert alert-warning'>No Internship Openings for now! </div>";
                    
    }
   if( isset($_POST['apply-internship'])){
        $internship_id = $_SESSION['internship_id'];
        $student_id = $_SESSION['id'];
        $query = "select * from internship where id=$internship_id";
        $result = mysqli_query( $conn, $query );
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $applied_student_email = $_SESSION['loggedInUser'];
            $position = $row['position'];
            $query1 = "INSERT INTO internship_application ('id', 'internship_id', 'applied_student_id', 'apply_date', 'status') VALUES (NULL, '$internship_id', '$student_id', NULL,'Applied')";
            
            if( mysqli_query( $conn, $query1 ) ){           
               echo '<div class="container alert alert-success">Intenship Applied<a class="close" data-dismiss="alert">&times;</a></div>';
            }
            else
               echo "Error In Insertion: <br>".$query1."<br>".mysqli_error($conn);
        }
}
    mysqli_close($conn);
    include 'footer.php';  
?>

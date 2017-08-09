<?php
    include('session.php');
    include('header.php');    
?>

<div class="container">
    
    <h2>Post Internship</h2>
    <form action="" method="post" class="row">
        <div class="form-group col-sm-6">
            <label for="Internship-position">Internship-position</label>
            <input type="text" class="form-control input-lg" id="internshipposition" name="position" placeholder="Enter position of Internship" value="" required>
        </div>
        
        <div class="form-group col-sm-6">
            <label for="Skills">Required Skills
            </label>
            <input type="text" class="form-control input-lg" id="skills" name="skills" placeholder="Required Skills" value="" required>
        </div>
            
        
        <div class="form-group col-sm-6">
            <label for="Internship-location">Location
            </label>
            <input type="text" class="form-control input-lg" id="location" name="location" placeholder="Location of Internship" value="" required>
        </div>

        <div class="form-group col-sm-6">
            <label for="internship-description">Duration</label>
            <input type="text" class="form-control input-lg" id="" name="duration" placeholder="Enter Duration of Internship" value="" required>
        </div>
            
            <div class="col-sm-12">
                <a href="dashboard-employer.php" type="button" class="btn btn-default btn-lg">Cancel</a>
                <button type="submit" class="btn btn-primary btn-lg pull-right" name="post_internship">Post Internship</button><br><br>
            </div>
    </form>                 
    
</div>
        


<?php
    include('footer.php');
    include('connection.php');

    //if submit button clicked
    if( isset( $_POST[ 'post_internship' ] ) ) 
    {    
        $position       = $_POST['position'];
        $skills         = $_POST['skills'];   
        $location       = $_POST['location'];
        $duration       = $_POST['duration'];
        $employer_id    = $_SESSION['loggedInUser'];
        //var_dump($type);
        $query1 = "insert into internship (position, skills, location, duration, employer_id) values ('$position','$skills','$location', '$duration', '$employer_id')";
    
        if( mysqli_query( $conn, $query1 ) ){           
            echo '<br><div class="container alert alert-success">Intenship Added<a class="close" data-dismiss="alert">&times;</a></div>';
        }
        else
            echo "Error In Insertion: <br>".$query1."<br>".mysqli_error($conn);
    } 
    mysqli_close($conn);
?>    
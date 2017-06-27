<?php
    include('session.php');
    include('header.php');    
?>

<div class="container">
    
    <h2>Post Internship</h2>
    <form action="" method="post" class="row">
        <div class="form-group col-sm-6">
            <label for="Internship-title">Internship-title</label>
            <input type="text" class="form-control input-lg" id="internshipTitle" name="title" placeholder="Enter Title of Internship" value="" required>
        </div>
        
        <div class="form-group col-sm-6">
            <label for="Skills">Required Skills
            </label>
            <input type="text" class="form-control input-lg" id="skills" name="skills" placeholder="Required Skills" value="" required>
        </div>
        
        <div class="form-group col-md-6">
            <label for="internship-type">Select Internship-Type</label>
            <select class="form-control input-lg" name="type">
                <option>Full-time</option>
                <option>Part-time</option>
            </select>
        </div>    
        
        <div class="form-group col-sm-6">
            <label for="Internship-location">Location
            </label>
            <input type="text" class="form-control input-lg" id="location" name="location" placeholder="Location of Internship" value="" required>
        </div>

        <div class="form-group col-sm-6">
            <label for="internship-description">Description</label>
            <textarea class="form-control input-lg" rows="" id="" name="description" placeholder="Enter some description" required></textarea>
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
        $title          = $_POST['title'];
        $skills         = $_POST['skills'];
        $type           = $_POST['type'];    
        $location       = $_POST['location'];
        $description    = $_POST['description'];
        //var_dump($type);
        $query1 = "insert into internship (internship_title, skills, type, location, description) values ('$title','$skills','$type', '$location', '$description')";
    
        if( mysqli_query( $conn, $query1 ) ){           
            echo '<div class="alert alert-success">Intenship Added<a class="close" data-dismiss="alert">&times;</a></div>';
        }
        else
            echo "Error In Insertion: <br>".$query1."<br>".mysqli_error($conn);
    } 
    mysqli_close($conn);
?>    
<?php
    include 'session.php';
    include 'header.php';
    include 'connection.php';
    $query = "select * from internship";
    $result = mysqli_query( $conn, $query );
    $record_count = mysqli_num_rows($result);
    if($record_count > 0){
        //we have data
        //display the data in the page
        while( $row = mysqli_fetch_assoc( $result ) ){

?>
<div class="container">
    <div class="internship-container">    
        <div class="internship-header">
            <a id="internship-title" name="title" href="#">
                <?php  echo $row['position'];  ?>
                <p class="sub-title" name="type">
                    <?php  echo $row['type']; ?>
                </p>
            </a>
        </div>
        <div class="row text-center">
            <div class="col-sm-2">
                <p class="text-blue">Location</p>
                <p class="sub-title text-grey">
                    <?php  echo $row['location']; ?>
                </p>
            </div>
            <div class="col-sm-3">
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
                <p class="text-blue">Description</p>
                <p class="sub-title text-grey">
                    <?php  echo $row['description']; ?>
                </p>
            </div>
            <div class="col-sm-2">
                <?php  $_SESSION['internship_id'] = $row['id'];  ?>
                <form method="post">
                    <button type="submit" class="btn btn-primary" name="apply-internship">Apply</button>
                </form>
                
            </div>
        </div>
    </div>
</div><br>

<?php
        }
    }
    else{
        echo "<div class='alert alert-warning'>No Internship Openings for now! </div>";
                    
    }
   if( isset($_POST['apply-internship'])){
        $id = $_SESSION['internship_id'];
        $query = "select * from internship where id=$id";
        $result = mysqli_query( $conn, $query );
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $applied_student_email = $_SESSION['email_id'];
            $position = $row['position'];
            $company = $row['company'];
            $query1 = "insert into internship_application (position, applied_student_id, company, status) values ('$position','$applied_student_email' ,'$company', 'Applied')";
            
            if( mysqli_query( $conn, $query1 ) ){           
               echo '<div class="alert alert-success">Intenship Applied<a class="close" data-dismiss="alert">&times;</a></div>';
            }
            else
               echo "Error In Insertion: <br>".$query1."<br>".mysqli_error($conn);
        }
}
    mysqli_close($conn);
    include 'footer.php';  
?>
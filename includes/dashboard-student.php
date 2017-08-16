<?php   
    include( 'session.php' );
    if( isset( $_SESSION['user_type'] ) ) {
        if( $_SESSION['user_type'] == "employer" ){
            
            header( "location:dashboard-employer.php" );
        }
    }
    require('navbar.php');

?>
<br>
<br>
<br>
<div class="container">
    <h4>Your Internship Applications</h4><br>
        <div class="table-responsive">  
          <table class="table table-striped table-bordered">
              <tr class="">
                  <th>Position</th>
                  <th>Application Date</th>
                  <th>Company</th>
                  <th>Status</th>
              </tr>
              <?php
                include( 'connection.php' );
                $query = "select * from internship_application";
                $result = mysqli_query( $conn, $query );    
                $record_count  = mysqli_num_rows( $result ); 
                if($record_count > 0){
                        //we have data
                        //output data
                    
                        while( $row = mysqli_fetch_assoc( $result ) ){
                            echo "<tr>";
                            
                            echo "<td>" . $row['position'] . "</td><td>" .$row['apply_date']."</td><td>". $row['company'] . "</td><td>" . $row['status'] . "</td>";
                            
                            echo "</tr>";       
                        }
                    }
                    else
                        // if no entries
                        echo "<div class='alert alert-warning'>You Haven't Applied for any internship</div>";
                    mysqli_close($conn);
                ?>
          </table>
          </div>    
      </div>

<?php
    include('footer.php');
    include('connection.php');
    $email = $_SESSION['loggedInUser'];
    echo $email;
    $query = "select * from student where email_id=$email";
    $result = mysqli_query($conn, $query);
    if($result){
    //if(mysqli_num_rows( $result ) > 0){
        $row = mysqli_fetch_assoc( $result );
        $_SESSION['id'] = $row['id'];
        echo($_SESSION['id']);
    }

    

?>

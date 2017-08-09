<?php  
    include( 'session.php' );
    if( isset( $_SESSION['user_type'] ) ) {
        if( $_SESSION['user_type'] == "student" ){
            
            header( "location:dashboard-student.php" );
        }
    }
    include( 'header.php' );
?>

      <div class="container">
          <h4>Posted Internships</h4><br>
        <div class="table-responsive">  
          <table class="table table-striped table-bordered">
              <tr class="">
                  <th>Title</th>
                  <th>Skills</th>
                  <th>Location</th>
                  <th>Duration</th>
              </tr>
              <?php
                include( 'connection.php' );
                $query = "select * from internship";
                $result = mysqli_query( $conn, $query );    
                $record_count  = mysqli_num_rows( $result ); 
                if($record_count > 0){
                        //we have data
                        //output data
                    
                        while( $row = mysqli_fetch_assoc( $result ) ){
                            echo "<tr>";
                            
                            echo "<td>" . $row['position'] . "</td><td>" . $row['skills'] . "</td><td>" . $row['location'] . "</td>
                            <td>" . $row['duration'] . "</td>";
                            
                            echo "</tr>";       
                        }
                    }
                    else
                        // if no entries
                        echo "<div class='alert alert-warning'>You Haven't Posted any internship</div>";
                    mysqli_close($conn);
                ?>
              
              <tr>
                  <td colspan="6">
                      <div class="text-center"><a href="post-internship.php" type="button" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span>Add Internship</a>
                      </div>
                  </td>
              </tr>
          </table>
          </div>    
      </div>
<?php
    include('footer.php'); 
?>      
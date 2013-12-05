<?php
     // include '..config/config.php';
 ?>
<?php
      session_start();
     function AddASchedule($timefrom,$timeto,$content) {
     ini_set('max_execution_time', 300);
      if (!($con = mysqli_connect(constant("HOSTNAME"), constant("USERNAME"), constant("PASS")))) {
        $result = "DBCONNECTION_ERROR";
    } else if (!($select = mysqli_select_db($con,constant("DBNAME")))) {
        $result = "DBCONNECTION_ERROR";
    } else {
                   
                   $string="SELECT COUNT(*) FROM `project`.`calander` WHERE user_name='".$_SESSION['faculty_user_nm']."' AND ('".$timefrom."' BETWEEN Fromtime AND Totime OR'".$timeto."'BETWEEN Fromtime AND Totime);";
                  // echo $string;
                   $check=mysqli_query($con,$string); 
                        // var_dump($check);
           $row = mysqli_fetch_array($check);
           //echo $row[0];
              if($row[0]==0)
                {
                     //echo "heelo";
                      $count= mysqli_query($con,"SELECT COUNT(*) FROM `project`.`calander`;");
                        $row = mysqli_fetch_array($count);
                      $sql = "INSERT INTO `project`.`calander` (`Totime`, `Fromtime`, `User_name`, `Content`) VALUES ("."'".$timeto."','".$timefrom."','".$_SESSION['faculty_user_nm']."','".$content."')";
                      $sql2 = "DELETE FROM `project`.`calander` WHERE Totime<=Fromtime";
                      echo $sql;
                      mysqli_query($con,$sql);
                      mysqli_query($con,$sql2);
                      
                  $count2=mysqli_query($con,"SELECT COUNT(*) FROM `project`.`calander`;");
                      $row2 = mysqli_fetch_array($count2);
                      if($row[0] >= $row2[0])
                      {
                       // echo $row[0].$row2[0];
                        
                              return 1;
                      }
                      else
                      {
                              return 0;
                      }
                }   
                else
                {
                
                
                return 2;
                
                }    
     }
  }
?>
<?php
            function result_query($X)
            {
                ini_set('max_execution_time', 300);
      if (!($con = mysqli_connect(constant("HOSTNAME"), constant("USERNAME"), constant("PASS")))) {
        $result = "DBCONNECTION_ERROR";
    } else if (!($select = mysqli_select_db($con,constant("DBNAME")))) {
        $result = "DBCONNECTION_ERROR";
    } else {
            
                        $sql=mysqli_query($con,$X);
                        
                    $row=mysqli_fetch_array($sql); 
                            return $row;
                            
            }
            }
            function delete_query($X)
            {
              ini_set('max_execution_time', 300);
               if (!($con = mysqli_connect(constant("HOSTNAME"), constant("USERNAME"), constant("PASS")))) {
               $result = "DBCONNECTION_ERROR";
               } else if (!($select = mysqli_select_db($con,constant("DBNAME")))) {
               $result = "DBCONNECTION_ERROR";
                } else {
            
                        $sql=mysqli_query($con,$X);
              }
            
            }
?>
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
 ?>
 <?php
        function bool_result_query($X)
        {
            ini_set('max_execution_time', 300);
      if (!($con = mysqli_connect(constant("HOSTNAME"), constant("USERNAME"), constant("PASS")))) {
        $result = "DBCONNECTION_ERROR";
    } else if (!($select = mysqli_select_db($con,constant("DBNAME")))) {
        $result = "DBCONNECTION_ERROR";
    } else {
            
                        $sql=mysqli_query($con,$X);
                        
                    return($sql);
                            
            }
        }
?>
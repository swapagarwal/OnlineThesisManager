<?php
     function getAllRecords() {
     $fa = array();
     
    if (!($con = mysql_connect(constant("HOSTNAME"), constant("USERNAME"), constant("PASS")))) {
        $result = "DBCONNECTION_ERROR";
    } else if (!($select = mysql_select_db(constant("DBNAME"), $con))) {
        $result = "DBCONNECTION_ERROR";
    } else {
        $sql="SELECT COUNT(*) FROM `advisor`";
        $result=mysql_query($sql);
        $result=mysql_fetch_array($result);
        $i=0;
        
        while($i<$result[0])
        {
            $sql="SELECT * FROM `advisor` LIMIT ".$i." , 1;";
            $result2 = mysql_query($sql);
            $result2 = mysql_fetch_array($result2);
            
            $fa[$result2['advisor_id']]=array(0,"","","","","","");
            $i++;
        }
        //var_dump($fa);
        $sql= "SELECT COUNT(*) FROM `student`";
        $sql0= "SELECT * FROM `student`";
        $result0=mysql_query($sql0);
        
        $result=mysql_query($sql);
        $result=mysql_fetch_array($result);
        //var_dump($result);
       // echo $result[0];
              $i=0;
              
                while($result3 = mysql_fetch_assoc($result0))
                {
                    
                    //$sql2="SELECT * FROM `student` LIMIT ".$i." , 1;";
                    //$result3=mysql_query($sql2);
                    //$result3=mysql_fetch_array($result3);
                       //var_dump($result3);
                    
                    $sql2="SELECT COUNT(*) FROM `advisor` WHERE interest LIKE '%".$result3['thesis']."%';";
                    
                            $result4=mysql_query($sql2);
                            $num_rows=mysql_num_rows($result4);
                            $result4=mysql_fetch_array($result4);
                            if($result4[0]!=0)
                            $sql2="SELECT * FROM `advisor` WHERE interest LIKE '%".$result3['thesis']."%' LIMIT 0 , 1;";
                            else
                            $sql2="SELECT * FROM `advisor` LIMIT 0 , 1;";        
                           
                            $result2=mysql_query($sql2);
                            $result2=mysql_fetch_array($result2);
                   //var_dump($result2);
                   // echo $result2['advisor_id']."\n";
                            $value= $fa[$result2['advisor_id']][0];
                            //echo $value;
                    //var_dump($fa[$result2['advisor_id']]);
                    //var_dump($value);
                    $min= $result2['advisor_id'];
                    $j=1;
                        while($j<$num_rows)
                        {
                            if($result4[0]!=0)
                            $sql2="SELECT * FROM `advisor` WHERE interest LIKE '%".$result3['thesis']."%' LIMIT ".$j." , 1;";
                            else
                            $sql2="SELECT * FROM `advisor` LIMIT ".$j." , 1;";
                            $result2=mysql_query($sql2);
                            $result2=mysql_fetch_array($result2);
                                
                         
                            if( $value > $fa[$result2['advisor_id']][0] && $fa[$result2['advisor_id']][0]<5)
                            {
                                $min= $result2['advisor_id'];
                                
                            }
                                
                                $j++;
                        }
                        if($fa[$min][0]<5)
                        $fa[$min][0]=$fa[$min][0]+1;
                        else
                        {
                          $sql3="SELECT * FROM `advisor` LIMIT 0,1";
                          $sql4="SELECT * FROM `advisor`";
                            $result4=mysql_query($sql3);
                            $result4=mysql_fetch_array($result4);
                          $result5=mysql_query($sql4);
                          $num_rows=mysql_num_rows($result5);
                            $k=1;
                            while($fa[$result4['advisor_id']][0]>=5 && $k<$num_rows)
                            {
                                
                                $sql3="SELECT * FROM `advisor` LIMIT ".$k." , 1";
                                //  echo $sql3;
                                $result4=mysql_query($sql3);
                                $result4=mysql_fetch_array($result4);
                                $k++;
                            }
                        $min=$result4['advisor_id'];
                        
                        $fa[$min][0]=$fa[$min][0]+1;
                            
                        }
                   
                   
                    $fa[$min][$fa[$min][0]]=$result3['name'];                   
                   
                   $result6 = mysql_query($sql); 
                    $i++;
                
                }
                $flag = FALSE;
        $counter = 0;
     
        echo '<div><center><font size="10">Grouping</font></center><div>';
       
                
         //echo ' <table border="0" align="center" style="height: 100%; width: 100%">
             echo '<table border="0" align="center" style="height: 100%; width: 90%">
                       <tr>
                                <td style="width: 100px;color: #990000">name</td>
                                <td style="width: 100px;text-align: center;color: #990000">student 1</td>
                                <td style="width: 100px;text-align: center;color: #990000">student 2</td>
                                <td style="width: 100px; text-align: center;color: #990000">student 3</td>
                                <td style="width: 100px;text-align: center;color: #990000">student 4</td>
                                <td style="width: 100px;text-align: center;color: #990000">student 5</td>
                            </tr>';
        
                            $sql="SELECT * FROM `advisor`";
                            $result=mysql_query($sql);
                           $counter = 0;
                           
                          while($result1 = mysql_fetch_assoc($result))
                          {
                             $counter++;
                             
                             
                            // echo '<td style="width: 10px" align="center">' . $counter . '</td>';
                             
                             //echo "<tr>";
                              if($fa[$result1['advisor_id']][0]!=0)
                              {  echo '<tr style="background-color: menu;color: black">';
                                   echo '<td style="width: 100px;overflow-x:hidden; text-overflow: ellipsis" align="center">' . $result1['advisor_id'] . '</td>';
                                 // echo "<td>".$result1['advisor_id']."</td>";
                                  $j=1;
                                  while($j<=$fa[$result1['advisor_id']][0])
                                  {
                                      echo '<td style="width: 100px;overflow-x:hidden; text-overflow: ellipsis" align="center">' . $fa[$result1['advisor_id']][$j] . '</td>';
                                     // echo "<td>".$fa[$result1['advisor_id']][$j]."\n"."</td>";
                                      $j++;
                                   }
                                  
                                 while($j<=5)
                                  {
                                     
                                      echo "<td>NILL</td>";
                                      $j++;
                                  }
                                  
                                 echo '</tr>';
                             
                                echo '<tr><td colspan="6" style="height:2px;background-color: gray"></td></tr>';
                                 }
                            }
                              
                     //      echo "</tr>";
                              
                     echo '</table>';  
            
        }
    }
    
         //echo "</table>";
         
        // while ($row = mysql_fetch_assoc($result)) {
           // $flag = TRUE;
           // $counter++;

          //  $inerhtml = $inerhtml . '<tr style="background-color: menu;color: black">';
          //  $inerhtml = $inerhtml . '<td style="width: 10px" align="center">' . $counter . '</td>';
          //  $inerhtml = $inerhtml . '<td style="width: 200px" align="center"><a href="' . constant("HOST11") . '/Backend/Records/indivisual_upload_history.php?roll=' . $row['roll_number'] . '&user=' . $row["user_nm"] . '&name=' . $row["name"] . '">' . $row['user_nm'] . '</a></td>';
          //  $inerhtml = $inerhtml . '<td style="width: 250px" align="center">' . $row["name"] . '</td>';
          //  $inerhtml = $inerhtml . '<td style="width: 80px" align="center">' . $row['roll_number'] . '</td>';
          //  $inerhtml = $inerhtml . '<td style="width: 150px" align="center">' . $row["total_upload"] . ' Times</td>';
           // $inerhtml = $inerhtml . '</tr>';
         //   $inerhtml = $inerhtml . '<tr><td colspan="6" style="height:2px;background-color: gray"></td></tr>';
       // }
       // $inerhtml = $inerhtml . '</table>';
         
         
         
         
             
    ?>
<pre>
<?php


       
           
?>
</pre>
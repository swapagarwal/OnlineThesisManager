
<html>
      <head>
                
              <?php include '../../config/config.php' ?>
              <?php include '../PhpIncludeFiles/Database/calander.php' ?>
              <link rel="stylesheet" href="<?php echo constant("HOST11") . '/web/css/AdminStyleSheet.css' ?>" type="text/css" />
              <script src="../../web/Jquery/js/jquery-1.9.1.js"></script>
              <script src="../../web/Jquery/js/jquery-ui-1.10.3.custom.js"></script>
              <Script src="../../web/Jquery/js/newJquery.js"></script>
              <link href="../../web/Jquery/css/flick/jquery-ui-1.10.3.custom.css" rel="stylesheet">
              <script>
               $(function() {
                           $('#datepicker').datepicker({ dateFormat: 'yy-mm-dd' }).val();
                              });
              </script>
              <title>Thesis Manager (Admin Section)</title>
      </head>
 <body>
            <div id="bodyPanel">
            <div id="adminHeader">
                  <div id="adminHeaderTitle">
                    <?php include '../PhpIncludeFiles/Admin/headerImage.php';?>
                  </div>
                <div id="adminHeaderLocation">Dashboard Home</div>
            </div>
            <div id="adminVMenu">
                <?php include '../PhpIncludeFiles/Admin/VerticalMenuItems.php'; ?>
            </div>
            <div id="adminVMenu2">
                  <?php include '../PhpIncludeFiles/Admin/CalanderVMenu.php'; ?>
            </div>
            <div id="adminMiddle">
                    <div id="adminMiddleContent2">
                      <form method="GET" action=" <?php echo $_SERVER["PHP_SELF"]; ?> ">
                      <br>
                      <br>
                      <p>Date : <br> <br><input type="text" name="Date" id="datepicker"> </p> 
                      
                      <p><input type="submit" Value="FIND" name="submit"></p>
                     <p><input type="submit" value="VIEW ALL" name="submit"></p>
                      </form>
                      </div>
                      <div>
                            <?php
                                  if(isset($_GET['submit']))
                          {
                                if($_GET['submit']=="VIEW ALL")
                                {
                                     // $i=result_query("SELECT COUNT(*) FROM `project`.`calander` WHERE User_name='".$_SESSION['admin_user_nm']."';");
                                          $t;
                                       
                                       echo '<table border="0" align="center" width="100%" style="table-layout:fixed;">
                                              <tr > 
                                                  <td style="width: 10px;color: #990000"> S.No.  </td>
                                                  <td style="width: 20px;text-align: center;color: #990000"> User Name </td>
                                                  <td style="width: 20px;text-align: center;color: #990000"> From </td>
                                                  <td style="width: 20px;text-align: center;color: #990000"> To </td>
                                                  <td style="width: 20px;text-align: center;color: #990000"> Task And Venue  </td>
                                                 
                                              </tr>';
                                              
                                                 $t=0;  
                                               $_SESSION['query']="SELECT * FROM `project`.`calander` WHERE User_name='".$_SESSION['admin_user_nm']."'";
                                                while($t<10 )
                                                    {
                                                      echo '<tr style="background-color: menu;color: black">';
                                                          $query="SELECT * FROM `project`.`calander` WHERE User_name='".$_SESSION['admin_user_nm']."' LIMIT ".$t.", 1;";
                                                          
                                                          $j=result_query($query);
                                                          if($j[0]==NULL)
                                                          {
                                                              
                                                                break;
                                                          
                                                          }
                                                      
                                                      
                                                     echo "<td style='width: 10px' align='center'>".$t."</td><td style='width: 10px' align='center'>".$j["User_name"]."</td><td style='width: 10px' align='center'>".$j["Fromtime"]."</td><td style='width: 10px' align='center'>".$j["Totime"]."</td><td style='overflow:hidden; text-overflow: ellipsis;' align='center'>".$j["Content"]."</td>"; 
                                                      echo '<form action="'.$_SERVER["PHP_SELF"].'" method="GET">';
                                                      
                                                      echo '</from>';
       
                                                     
                                                      echo '</tr>';
                                                     
                                                        $t++;
                                                    }
                                             echo '<tr> 
                                                        <td> <form action="'.$_SERVER["PHP_SELF"].'" method="GET">
                                                             <button type="submit" value="'.($t-18).'" name=submit> << </button>
                                                         </td>
                                                         <td colspan="3"></td>
                                                         <td>
                                                             <form action="'.$_SERVER["PHP_SELF"].'" method="GET">
                                                             <button type="submit" value="'.$t.'" name=submit> >> </button>
                                                         </td>
                                                        
                                                    </tr>'
                                                    ;
                                              
                                              
                                        echo '</table>';
                               
                               }
                               else if($_GET['submit']=="FIND")
                               {
                                    if(($_GET['Date'])!="")
                                    {
                                             $i=result_query("SELECT COUNT(*) FROM `project`.`calander` WHERE User_name='".$_SESSION['admin_user_nm']."' AND ((('".$_GET['Date']." 00:00:00'<=Totime) AND ('".$_GET['Date']." 00:00:00'>=Fromtime) ) OR (('".$_GET['Date']." 23:59:00'>=Fromtime) AND ('".$_GET['Date']." 23:59:00'<=Totime) ) OR (('".$_GET['Date']." 00:00:00'<=Fromtime) AND ('".$_GET['Date']." 23:59:00'>=Totime) ));");
                                          $t;
                                       if($i[0]==0)
                                       {
                                                echo 'No schedules Has been Found';
                                       }
                                       else
                                       {
                                       echo '<table border="0" align="center" width="100%" style="table-layout:fixed;">
                                              <tr>
                                                  <td style="width: 10px;color: #990000"> S.No.  </td>
                                                  <td style="width: 20px;text-align: center;color: #990000"> User Name </td>
                                                  <td style="width: 20px;text-align: center;color: #990000"> From </td>
                                                  <td style="width: 20px;text-align: center;color: #990000"> To </td>
                                                  <td style="width: 20px;text-align: center;color: #990000"> Task And Venue  </td>
                                              </tr>';
                                              
                                                 $t=0;  
                                                $_SESSION['query']="SELECT  * FROM `project`.`calander` WHERE User_name='".$_SESSION['admin_user_nm']."' AND ((('".$_GET['Date']." 00:00:00'<=Totime) AND ('".$_GET['Date']." 00:00:00'>=Fromtime) ) OR (('".$_GET['Date']." 23:59:00'>=Fromtime) AND ('".$_GET['Date']." 23:59:00'<=Totime) ) OR (('".$_GET['Date']." 00:00:00'<=Fromtime) AND ('".$_GET['Date']." 23:59:00'>=Totime) ))";
                                                while($t<10 && $t<$i[0] )
                                                    {
                                                      echo '<tr  style="background-color: menu;color: black">';
                                                          $query="SELECT  * FROM `project`.`calander` WHERE User_name='".$_SESSION['admin_user_nm']."' AND ((('".$_GET['Date']." 00:00:00'<=Totime) AND ('".$_GET['Date']." 00:00:00'>=Fromtime) ) OR (('".$_GET['Date']." 23:59:00'>=Fromtime) AND ('".$_GET['Date']." 23:59:00'<=Totime) ) OR (('".$_GET['Date']." 00:00:00'<=Fromtime) AND ('".$_GET['Date']." 23:59:00'>=Totime) )) LIMIT ".$t.", 1;";
                                                        // echo $query;
                                                          $j=result_query($query);
                                                          if($j[0]==NULL)
                                                          break;
                                                      echo "<td style='width: 10px' align='center'>".$t."</td><td style='width: 10px' align='center'>".$j["User_name"]."</td><td style='width: 10px' align='center'>".$j["Fromtime"]."</td><td style='width: 10px' align='center'>".$j["Totime"]."</td><td style='width: 10px; overflow-x:hidden; text-overflow: ellipsis' align='center'>".$j["Content"]."</td>"; 
                                                      echo '<form action="'.$_SERVER["PHP_SELF"].'" method="GET">';
                                                     
                                                      echo '</from>';
       
                                                     
                                                      echo '</tr>';
                                                     
                                                        $t++;
                                                    }
                                             echo '<tr> 
                                                        <td> <form action="'.$_SERVER["PHP_SELF"].'" method="GET">
                                                             <button type="submit" value="'.($t-18).'" name=submit> << </button>
                                                         </td>
                                                         <td colspan="3"></td>
                                                         <td>
                                                             <form action="'.$_SERVER["PHP_SELF"].'" method="GET">
                                                             <button type="submit" value="'.$t.'" name=submit> >> </button>
                                                         </td>
                                                        
                                                    </tr>'
                                                    ;
                                              
                                              
                                        echo '</table>';
                                        }
                                    }
                                    else
                                    {
                                          echo 'Please Enter the Date First';
                                    }
                               }
                               
                               
                               
                                else
                                {
                                    
                                   
                                           $t=$_GET['submit'];
                                           if($t<0)
                                           {  
                                                 echo "<form action='".$_SERVER["PHP_SELF"]."' method='GET'>
                                                                  <button type='submit' value='0' name='submit'>Go Back</button>
                                                                </form>
                                                           ";
                                           
                                           
                                           }
                                           else
                                           {
                                                $j=result_query($_SESSION['query']." LIMIT ".$t.", 1;");
                                                  
                                                  if($j[0]==NULL)
                                                  {
                                                        
                                                       
                                                          echo "<form action='".$_SERVER["PHP_SELF"]."' method='GET'>
                                                                  <button type='submit' value='0' name='submit'>Front Page</button>
                                                                </form>
                                                           ";
                                                   }
                                                  else
                                                  {
                                                 echo '<table border="0" align="center" width="100%" style="table-layout:fixed;">
                                              <tr>
                                                  <td style="width: 10px;color: #990000"> S.No.  </td>
                                                  <td style="width: 20px;text-align: center;color: #990000"> User Name </td>
                                                  <td style="width: 20px;text-align: center;color: #990000"> From </td>
                                                  <td style="width: 20px;text-align: center;color: #990000"> To </td>
                                                  <td style="width: 20px;text-align: center;color: #990000"> Task And Venue  </td>
                                              </tr>';
                                                    $q=0;
                                                  while($q<10)
                                                  {
                                                          $j=result_query($_SESSION['query']." LIMIT ".$t.", 1;");
                                                        
                                                          if($j[0]==NULL)
                                                          break;
                                                          echo '<tr  style="background-color: menu;color: black">';
                                                         echo "<td style='width: 10px' align='center'>".$t."</td><td style='width: 10px' align='center'>".$j["User_name"]."</td><td style='width: 10px' align='center'>".$j["Fromtime"]."</td><td style='width: 10px' align='center'>".$j["Totime"]."</td><td style='overflow-x:hidden; text-overflow: ellipsis' align='center'>".$j["Content"]."</td>";  
                                                          
       
                                                     
                                                          echo '</tr>';
                                                     
                                                        $t++;
                                                        $q++;
                                                  }
                                     
                                       echo '<tr> 
                                                        <td> <form action="'.$_SERVER["PHP_SELF"].'" method="GET">
                                                             <button type="submit" value="'.($t-($q+10  )).'" name=submit> << </button>
                                                         </td>
                                                         <td colspan="3"></td>
                                                         <td>
                                                             <form action="'.$_SERVER["PHP_SELF"].'" method="GET">
                                                             <button type="submit" value="'.$t.'" name=submit> >> </button>
                                                         </td>
                                                        
                                                    </tr>'
                                                    ;
                                              
                                              
                                        echo '</table>';
                                              }
                                          }
                                        }
                                
                                }
                                
                                
                  
                            ?>
                  </div>
            </div>
            <div id="adminFooter">
                <?php include '../PhpIncludeFiles/Admin/AdminFooter.php'; ?>
            </div>
        </div>
 </body>
 </html>
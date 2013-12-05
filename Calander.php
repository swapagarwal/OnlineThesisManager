<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?php include 'config/config.php'; 
              include 'Macros/calander.php';
              session_start();
            ?>
        
        <link rel="stylesheet" href="<?php echo constant("HOST11") . '/web/css/UserStyleSheet.css' ?>" type="text/css" />
        <link rel="stylesheet" href="<?php echo constant("HOST11") . '/web/css/adminStudentStyleSheet.css' ?>" type="text/css" />
        <script src="web/Jquery/js/jquery-1.9.1.js"></script>
        <script src="web/Jquery/js/jquery-ui-1.10.3.custom.js"></script>
        <Script src="web/Jquery/js/newJquery.js"></script>
        <link href="web/Jquery/css/flick/jquery-ui-1.10.3.custom.css" rel="stylesheet">
        <script>
               $(function() {
                           $('#datepicker').datepicker({ dateFormat: 'yy-mm-dd' }).val();
                              });
        </script>
        <title>Online Thesis Manager</title>
    </head>
    <body>
        <div id="bodyPanel">
            <div id="adminHeader">
                <div id="adminHeaderTitle">
                    <?php include 'Macros/headerImage.php';?>
                </div>
                <div id="adminHeaderLocation">Department of CSE, IIT Guwahati</div>
            </div>
            <div id="adminVMenu">
                <?php include 'Macros/VerticalMenuItems.php'; ?>
            </div>
            <div id="adminMiddle">
                      <div id="adminMiddleContent2">
                        <form name="calanderfront" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="GET">
                        <br>
                        <br>
                                    Name(Dr./Prof.): <input type="text" name="user_name"> <font size="1" color="red">(**dont use dr./prof.**)</font> <br><br>
                                    Date: <input type="text" name="Date" id="datepicker"> &nbsp; &nbsp; &nbsp;
                                   <input type="submit" name="submit" value="VIEW" size="10"> <br> <br>
                                   <input type="submit" name="submit" Value="VIEW ALL">             
                        </form>
                       </div>
                      <?php
                              if(isset($_GET['submit']))
                              {
                                      if(!isset($_GET['user_name']) && ($_GET['submit']=="VIEW" || $_GET['submit']=="VIEW ALL"))
                                      { ?>
                                            <script>alert("Please Enter the faculty/Admin Name....");</script>
                                        <?php
                                      }
                                      else 
                                      {
                                            
                                          if($_GET['submit']=="VIEW ALL")
                                          {
                                                 $query="SELECT COUNT(*) FROM `advisor` WHERE advisor_name='Dr. ".$_GET['user_name']."' OR advisor_name='Prof. ".$_GET['user_name']."';";
                                            $query2="SELECT COUNT(*) FROM `users` WHERE name='".$_GET['user_name']."';";
                                            $first=result_query($query);
                                            $second=result_query($query2);
                                              if($first[0]==0 && $second[0]==0)
                                              { ?><script>alert("No faculty/admin Found with that name.. Please Enter again");</script>  <?php
                                                    
                                              }
                                              else
                                              {
                                                    if($first[0]!=0)
                                                    {
                                                       echo '<table border="0" align="center" width="100%" style="table-layout:fixed;">
                                                              <tr>
                                                              <td style="width: 10px;color: #990000"> S.No.  </td>
                                                              <td style="width: 20px;text-align: center;color: #990000"> User id </td>
                                                              <td style="width: 20px;text-align: center;color: #990000"> From </td>
                                                              <td style="width: 20px;text-align: center;color: #990000"> To </td>
                                                              <td style="width: 20px;text-align: center;color: #990000"> Task And Venue  </td>
                                                              </tr>';    
                                                              
                                                              $t=0;  
                                                       $name=result_query("SELECT * FROM `advisor` WHERE advisor_name='Dr. ".$_GET['user_name']."' OR advisor_name='Prof. ".$_GET['user_name']."';");
                                                       //echo "SELECT * FROM `advisor` WHERE advisor_name='Dr. ".$_GET['user_name']."' OR advisor_name='Prof. ".$_GET['user_name']."';";
                                                $_SESSION['query']="SELECT  * FROM `project`.`calander` WHERE User_name='".$name["advisor_id"]."'";
                                                while($t<10 )
                                                    {
                                                      echo '<tr  style="background-color: menu;color: black">';
                                                          $query="SELECT  * FROM `project`.`calander` WHERE User_name='".$name["advisor_id"]."' LIMIT ".$t.", 1;";
                                                        // echo $query;
                                                          $j=result_query($query);
                                                            
                                                          if($j[0]==NULL)
                                                          {
                                                              if($t==0)
                                                              { ?>
                                                                  <script>alert("No Result Found"); </script>
                                                              
                                                                  <?php
                                                              }
                                                              break;
                                                          }
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
                                                    
                                                    if($second[0]!=0)
                                                    {
                                                    //echo "hello";
                                                        echo '<table border="0" align="center" width="100%" style="table-layout:fixed;">
                                                              <tr>
                                                              <td style="width: 10px;color: #990000"> S.No.  </td>
                                                              <td style="width: 20px;text-align: center;color: #990000"> User id </td>
                                                              <td style="width: 20px;text-align: center;color: #990000"> From </td>
                                                              <td style="width: 20px;text-align: center;color: #990000"> To </td>
                                                              <td style="width: 20px;text-align: center;color: #990000"> Task And Venue  </td>
                                                              </tr>';    
                                                              
                                                              $t=0;  
                                                       $name=result_query("SELECT * FROM `users` WHERE name='".$_GET['user_name']."';");
                                                      // var_dump($name);
                                                $_SESSION['query']="SELECT  * FROM `project`.`calander` WHERE User_name='".$name["user_nm"]."'";
                                                while($t<10)
                                                    {
                                                      echo '<tr  style="background-color: menu;color: black">';
                                                          $query="SELECT  * FROM `project`.`calander` WHERE User_name='".$name["user_nm"]."'LIMIT ".$t.", 1;";
                                                        
                                                        // echo $query;
                                                          $j=result_query($query);
                                                          if($j[0]==NULL)
                                                          {
                                                              if($t==0)
                                                              { ?>
                                                                  <script>alert("No Result Found"); </script>
                                                              
                                                                  <?php
                                                              }
                                                              break;
                                                          }
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
                                              }
                                              else if($_GET['submit']=="VIEW")
                                              {
                                                    $query="SELECT COUNT(*) FROM `advisor` WHERE advisor_name='Dr. ".$_GET['user_name']."' OR advisor_name='Prof. ".$_GET['user_name']."';";
                                            $query2="SELECT COUNT(*) FROM `users` WHERE name='".$_GET['user_name']."';";
                                            //echo $query;
                                           // echo $query2;
                                            $first=result_query($query);
                                            $second=result_query($query2);  
                                         //echo $first[0];
                                         //echo $second[0];
                                                      if($_GET['Date']=="")
                                                            {
                                                            echo 'Please Enter the Date First';
                                                            }
                                                       else
                                                       {
                                                                              if($first[0]!=0)
                                                                              {
                                                                                      
                                                                                                     echo '<table border="0" align="center" width="100%" style="table-layout:fixed;">
                                                                                                      <tr>
                                                                                                    <td style="width: 10px;color: #990000"> S.No.  </td>
                                                                                                            <td style="width: 20px;text-align: center;color: #990000"> User Name </td>
                                                                                                            <td style="width: 20px;text-align: center;color: #990000"> From </td>
                                                                                                            <td style="width: 20px;text-align: center;color: #990000"> To </td>
                                                                                                            <td style="width: 20px;text-align: center;color: #990000"> Task And Venue  </td>
                                                                                                        </tr>';
                                                                                                        $name=result_query("SELECT * FROM `advisor` WHERE (advisor_name='Dr. ".$_GET['user_name']."' OR advisor_name='Prof. ".$_GET['user_name']."');");
                                                                                                           $t=0;  
                                                                                                          $_SESSION['query']="SELECT  * FROM `project`.`calander` WHERE (User_name='".$name["advisor_id"]."' OR )AND ((('".$_GET['Date']." 00:00:00'<=Totime) AND ('".$_GET['Date']." 00:00:00'>=Fromtime) ) OR (('".$_GET['Date']." 23:59:00'>=Fromtime) AND ('".$_GET['Date']." 23:59:00'<=Totime) ) OR (('".$_GET['Date']." 00:00:00'<=Fromtime) AND ('".$_GET['Date']." 23:59:00'>=Totime) ))";
                                                                                                          while($t<10)
                                                                                                              {
                                                                                                                echo '<tr  style="background-color: menu;color: black">';
                                                                                                                    $query="SELECT  * FROM `project`.`calander` WHERE User_name='".$name["advisor_id"]."' AND ((('".$_GET['Date']." 00:00:00'<=Totime) AND ('".$_GET['Date']." 00:00:00'>=Fromtime) ) OR (('".$_GET['Date']." 23:59:00'>=Fromtime) AND ('".$_GET['Date']." 23:59:00'<=Totime) ) OR (('".$_GET['Date']." 00:00:00'<=Fromtime) AND ('".$_GET['Date']." 23:59:00'>=Totime) )) LIMIT ".$t.", 1;";
                                                                                                                  // echo $query;
                                                                                                                    $j=result_query($query);
                                                                                                                    if($j[0]==NULL)
                                                          {
                                                              if($t==0)
                                                              { ?>
                                                                  <script>alert("No Result Found"); </script>
                                                              
                                                                  <?php
                                                              }
                                                              break;
                                                          }
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
                                                                              if($second[0]!=0)
                                                                                {
                                                                                          
                                                                                                  echo '<table border="0" align="center" width="100%" style="table-layout:fixed;">
                                                                                                      <tr>
                                                                                                    <td style="width: 10px;color: #990000"> S.No.  </td>
                                                                                                            <td style="width: 20px;text-align: center;color: #990000"> User Name </td>
                                                                                                            <td style="width: 20px;text-align: center;color: #990000"> From </td>
                                                                                                            <td style="width: 20px;text-align: center;color: #990000"> To </td>
                                                                                                            <td style="width: 20px;text-align: center;color: #990000"> Task And Venue  </td>
                                                                                                        </tr>';
                                                                                                        $name=result_query("SELECT * FROM `users` WHERE name='".$_GET['user_name']."';");
                                                                                                        
                                                                                                           $t=0;  
                                                                                                          $_SESSION['query']="SELECT  * FROM `project`.`calander` WHERE (User_name='".$name["user_nm"]."' OR )AND ((('".$_GET['Date']." 00:00:00'<=Totime) AND ('".$_GET['Date']." 00:00:00'>=Fromtime) ) OR (('".$_GET['Date']." 23:59:00'>=Fromtime) AND ('".$_GET['Date']." 23:59:00'<=Totime) ) OR (('".$_GET['Date']." 00:00:00'<=Fromtime) AND ('".$_GET['Date']." 23:59:00'>=Totime) ))";
                                                                                                          while($t<10)
                                                                                                              {
                                                                                                                echo '<tr  style="background-color: menu;color: black">';
                                                                                                                    $query="SELECT  * FROM `project`.`calander` WHERE User_name='".$name["user_nm"]."' AND ((('".$_GET['Date']." 00:00:00'<=Totime) AND ('".$_GET['Date']." 00:00:00'>=Fromtime) ) OR (('".$_GET['Date']." 23:59:00'>=Fromtime) AND ('".$_GET['Date']." 23:59:00'<=Totime) ) OR (('".$_GET['Date']." 00:00:00'<=Fromtime) AND ('".$_GET['Date']." 23:59:00'>=Totime) )) LIMIT ".$t.", 1;";
                                                                                                                  // echo $query;
                                                                                                                    $j=result_query($query);
                                                                                                                    if($j[0]==NULL)
                                                                                                                    {
                                                                                                                          if($t==0)
                                                                                                                                { ?>
                                                                                                                            <script>alert("No Result Found"); </script>
                                                              
                                                                                                                                        <?php
                                                                                                                                        }
                                                                                                                                          break;
                                                                                                                            }
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
                                             }
                                             else
                                             {
                                                  
                                                    $t=$_GET['submit'];
                                                      if($t<0)
                                                        {  ?>
                                                              
                                                          <script> alert("No More Page To display"); </script>
                                                        <?php
                                                          }
                                                      else
                                                    {
                                                            $j=result_query($_SESSION['query']." LIMIT ".$t.", 1;");
                                                            // var_dump($j); 
                                                            if($j[0]==NULL)
                                                            {
                                                        
                                                       
                                                          ?>
                                                              
                                                          <script> alert("No More Page To display"); </script>
                                                        <?php
                                                            }
                                                          else
                                                          {
                                                            echo '<table border="0" align="center" width="100%" style="table-layout:fixed;">
                                                            <tr>
                                                              <td style="width: 10px;color: #990000"> S.No.  </td>
                                                            <td style="width: 20px;text-align: center;color: #990000"> User id </td>
                                                          <td style="width: 20px;text-align: center;color: #990000"> From </td>
                                                            <td style="width: 20px;text-align: center;color: #990000"> To </td>
                                                        <td style="width: 20px;text-align: center;color: #990000"> Task And Venue  </td>
                                                        </tr>';
                                                    $q=0;
                                                  while($q<10)
                                                  {
                                                          $j=result_query($_SESSION['query']." LIMIT ".$t.", 1;");
                                                            //echo $_SESSION['query'];
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
                      }
                                                                 
                                       
                                
                      ?>
            </div>
            <div id="adminFooter">
                <?php include 'Macros/AdminFooter.php'; ?>
            </div>
        </div>
    </body>
</html>

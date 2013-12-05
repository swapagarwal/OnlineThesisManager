<!DOCTYPE HTML>
<html>
    <head>
              <?php include '../../config/config.php'; ?>
        <?php include '../PhpIncludeFiles/database/database_functions.php'; 
                include '../phpIncludeFiles/database/calander.php'; session_start();?>
           <link rel="stylesheet" href="<?php echo constant("HOST11") . '/web/css/faculty_stylesheet.css' ?>" type="text/css" />
        <script type="text/javascript" src="<?php echo constant("HOST11") . '/web/scripts/facultyScripts.js' ?>"></script>
              <script src="../../web/Jquery/js/jquery-1.9.1.js"></script>
              <script src="../../web/Jquery/js/jquery-ui-1.10.3.custom.js"></script>
              <Script src="../../web/Jquery/js/newJquery.js"></script>
              <link href="../../web/Jquery/css/flick/jquery-ui-1.10.3.custom.css" rel="stylesheet">
         <script>
               $(function() {
                           $('#datepicker').datepicker({ dateFormat: 'yy-mm-dd' }).val();
                              });
              </script>
        <title>Thesis Manager (Faculty Section)</title>
    </head>
   <body>
                        <div id="bodyPanel">
            <div id="adminHeader">
                <div id="adminHeaderTitle">
                    <?php include '../PhpIncludeFiles/headerImage.php';?>
                </div>
                <div id="adminHeaderLocation">Dashboard Home</div>
            </div>
            <div id="adminMiddle2">
                <?php include '../PhpIncludeFiles/faculty_horizontal_menue.php'; ?>
                  
                  <div style="color: olive;font-size: 20px; text-align: center;width: 100%">****Welcome, <?php echo $_SESSION['faculty_name']?>****</div>
                <div  style="padding-top: 1px;text-align: center;font-size: 25px;color: #990000">
                    <form name="Cschedule" action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET">
                        <span style="text-align: center;font-size: 25px;color: green">Delete Your Schedule</span>
                        <span style="color: #990000;font-size: 18px;font-style: italic">
                            <br/>**(Select a Date and Click on View ) or (Click on View All)** <br/>
                        </span>
                            <table align="left">
                            <tr>
                                <td align="right"><div style="font-size: 18px;color: blue;text-align: right">Date: </div></td>
                                <td>
                                    <input type="text" name="Date" id="datepicker" size="15" onclick="clearAll()"> &nbsp; &nbsp; &nbsp;
                                </td>
                                <td>
                                    <input type="submit" name="submit" value="View"> &nbsp; &nbsp; &nbsp;
                                </td>
                                <td>
                                    <input type="submit" name="submit" value="View All">
                                </td>
                            </tr>
                            </table>
                    </form>
                          
                         <?php 
                          if(isset($_GET['submit']))
                          {
                                if($_GET['submit']=="View All")
                                {
                                     // $i=result_query("SELECT COUNT(*) FROM `project`.`calander` WHERE User_name='".$_SESSION['admin_user_nm']."';");
                                          $t;
                                       
                                       echo '<table border="0" align="center" width="100%" style="table-layout:fixed;">
                                            
                                              <tr > 
                                                  <td style="width: 10px;color: #990000"> <div style="font-size: 20px;color: #990000;text-align: center">S.No. </div> </td>
                                                  <td style="width: 20px;text-align: center;color: #990000"> <div style="font-size: 20px;color: #990000;text-align: center">User Name</div> </td>
                                                  <td style="width: 20px;text-align: center;color: #990000"><div style="font-size: 20px;color: #990000;text-align: center"> From </div></td>
                                                  <td style="width: 20px;text-align: center;color: #990000"> <div style="font-size: 20px;color: #990000;text-align: center">To</div> </td>
                                                  <td style="width: 20px;text-align: center;color: #990000"><div style="font-size: 20px;color: #990000;text-align: center"> Task And Venue </div> </td>
                                                  <td style="width: 20px;text-align: center;color: #990000"><div style="font-size: 20px;color: #990000;text-align: center"> DELETE</div></td>
                                              </tr>';
                                              
                                                 $t=0;  
                                               $_SESSION['query']="SELECT * FROM `project`.`calander` WHERE User_name='".$_SESSION['faculty_user_nm']."'";
                                                while($t<10 )
                                                    {
                                                      echo '<tr style="background-color: menu;color: black">';
                                                          $query="SELECT * FROM `project`.`calander` WHERE User_name='".$_SESSION['faculty_user_nm']."' LIMIT ".$t.", 1;";
                                                          
                                                          $j=result_query($query);
                                                          if($j[0]==NULL)
                                                          {
                                                              
                                                                break;
                                                          
                                                          }
                                                      
                                                      
                                                     echo "<td style='width: 10px' align='center'><div style='font-size: 18px;color: black;text-align: center'>".$t."</div></td><td style='width: 10px' align='center'><div style='font-size: 18px;color: black;text-align: center'>".$j["User_name"]."</div></td><td style='width: 10px' align='center'><div style='font-size: 18px;color: black;text-align: center'>".$j["Fromtime"]."</div></td><td style='width: 10px' align='center'><div style='font-size: 18px;color: black;text-align: center'>".$j["Totime"]."</div></td><td style='overflow:hidden; text-overflow: ellipsis;' align='center'><div style='font-size: 18px;color: black;text-align: center'>".$j["Content"]."</div></td>"; 
                                                      echo '<form action="'.$_SERVER["PHP_SELF"].'" method="GET">';
                                                      echo '<td align="center"><div style="font-size: 18px;color: black;text-align: center"><input type="checkbox" name="'.$t.'" value="'.$j["Fromtime"].'"></div> </td>';
                                                      
                                                      echo '</from>';
       
                                                     
                                                      echo '</tr>';
                                                     
                                                        $t++;
                                                    }
                                             echo '<tr> 
                                                        <td> <form action="'.$_SERVER["PHP_SELF"].'" method="GET">
                                                             <button type="submit" value="'.($t-18).'" name=submit> << </button>
                                                         </td>
                                                         <td colspan="4"></td>
                                                         <td>
                                                             <form action="'.$_SERVER["PHP_SELF"].'" method="GET">
                                                             <button type="submit" value="'.$t.'" name=submit> >> </button>
                                                         </td>
                                                        
                                                    </tr>'.'<tr> <td colspan="2"> </td> 
                                                    <td colspan="2"><form action="'.$_SERVER["PHP_SELF"].'" method="GET">
                                                             <button type="submit" value="DELETE" name="submit"> DELETE</button></button></td> 
                                                    <td colspan="2"></td>
                                                    </tr> '
                                                    ;
                                              
                                              
                                        echo '</table>';
                               
                               }
                               else if($_GET['submit']=="View")
                               {
                                    if(($_GET['Date'])!="")
                                    {
                                             $i=result_query("SELECT COUNT(*) FROM `project`.`calander` WHERE User_name='".$_SESSION['faculty_user_nm']."' AND ((('".$_GET['Date']." 00:00:00'<=Totime) AND ('".$_GET['Date']." 00:00:00'>=Fromtime) ) OR (('".$_GET['Date']." 23:59:00'>=Fromtime) AND ('".$_GET['Date']." 23:59:00'<=Totime) ) OR (('".$_GET['Date']." 00:00:00'<=Fromtime) AND ('".$_GET['Date']." 23:59:00'>=Totime) ));");
                                          $t;
                                       if($i[0]==0)
                                       {
                                                echo 'No schedules Has been Found';
                                       }
                                       else
                                       {
                                      echo '<table border="0" align="center" width="100%" style="table-layout:fixed;">
                                            
                                              <tr > 
                                                  <td style="width: 10px;color: #990000"> <div style="font-size: 20px;color: #990000;text-align: center">S.No. </div> </td>
                                                  <td style="width: 20px;text-align: center;color: #990000"> <div style="font-size: 20px;color: #990000;text-align: center">User Name</div> </td>
                                                  <td style="width: 20px;text-align: center;color: #990000"><div style="font-size: 20px;color: #990000;text-align: center"> From </div></td>
                                                  <td style="width: 20px;text-align: center;color: #990000"> <div style="font-size: 20px;color: #990000;text-align: center">To</div> </td>
                                                  <td style="width: 20px;text-align: center;color: #990000"><div style="font-size: 20px;color: #990000;text-align: center"> Task And Venue </div> </td>
                                                  <td style="width: 20px;text-align: center;color: #990000"><div style="font-size: 20px;color: #990000;text-align: center"> DELETE</div></td>
                                              </tr>';
                                              
                                                 $t=0;  
                                                $_SESSION['query']="SELECT  * FROM `project`.`calander` WHERE User_name='".$_SESSION['faculty_user_nm']."' AND ((('".$_GET['Date']." 00:00:00'<=Totime) AND ('".$_GET['Date']." 00:00:00'>=Fromtime) ) OR (('".$_GET['Date']." 23:59:00'>=Fromtime) AND ('".$_GET['Date']." 23:59:00'<=Totime) ) OR (('".$_GET['Date']." 00:00:00'<=Fromtime) AND ('".$_GET['Date']." 23:59:00'>=Totime) ))";
                                                while($t<10 && $t<$i[0] )
                                                    {
                                                      echo '<tr  style="background-color: menu;color: black">';
                                                          $query="SELECT  * FROM `project`.`calander` WHERE User_name='".$_SESSION['faculty_user_nm']."' AND ((('".$_GET['Date']." 00:00:00'<=Totime) AND ('".$_GET['Date']." 00:00:00'>=Fromtime) ) OR (('".$_GET['Date']." 23:59:00'>=Fromtime) AND ('".$_GET['Date']." 23:59:00'<=Totime) ) OR (('".$_GET['Date']." 00:00:00'<=Fromtime) AND ('".$_GET['Date']." 23:59:00'>=Totime) )) LIMIT ".$t.", 1;";
                                                        // echo $query;
                                                          $j=result_query($query);
                                                          if($j[0]==NULL)
                                                          break;
                                                      echo "<td style='width: 10px' align='center'><div style='font-size: 18px;color: black;text-align: center'>".$t."</div></td><td style='width: 10px' align='center'><div style='font-size: 18px;color: black;text-align: center'>".$j["User_name"]."</div></td><td style='width: 10px' align='center'><div style='font-size: 18px;color: black;text-align: center'>".$j["Fromtime"]."</div></td><td style='width: 10px' align='center'><div style='font-size: 18px;color: black;text-align: center'>".$j["Totime"]."</div></td><td style='overflow:hidden; text-overflow: ellipsis;' align='center'><div style='font-size: 18px;color: black;text-align: center'>".$j["Content"]."</div></td>"; 
                                                      echo '<form action="'.$_SERVER["PHP_SELF"].'" method="GET">';
                                                      echo '<td align="center"><div style="font-size: 18px;color: black;text-align: center"><input type="checkbox" name="'.$t.'" value="'.$j["Fromtime"].'"></div> </td>';
                                                      
                                                      echo '</from>';
       
                                                     
                                                      echo '</tr>';
                                                     
                                                        $t++;
                                                    }
                                             echo '<tr> 
                                                        <td> <form action="'.$_SERVER["PHP_SELF"].'" method="GET">
                                                             <button type="submit" value="'.($t-18).'" name=submit> << </button>
                                                         </td>
                                                         <td colspan="4"></td>
                                                         <td>
                                                             <form action="'.$_SERVER["PHP_SELF"].'" method="GET">
                                                             <button type="submit" value="'.$t.'" name=submit> >> </button>
                                                         </td>
                                                        
                                                    </tr>'.'<tr> <td colspan="2"> </td> 
                                                    <td colspan="2"><form action="'.$_SERVER["PHP_SELF"].'" method="GET">
                                                             <button type="submit" value="DELETE" name="submit"> DELETE</button></button></td> 
                                                    <td colspan="2"></td>
                                                    </tr> '
                                                    ;
                                              
                                              
                                        echo '</table>';
                                        }
                                    }
                                    else
                                    {
                                          echo 'Please Enter the Date First';
                                    }
                               }
                               else if($_GET['submit']=="DELETE")
                               {
                                        foreach($_GET  as $x=>$x_value)
                                        {
                                            if($x_value!="DELETE")
                                            {
                                                $query="DELETE FROM `calander` WHERE User_name='".$_SESSION['faculty_user_nm']."' AND Fromtime='".$x_value."';";
                                               // echo $query;
                                                delete_query($query);
                                            }
                                            
                                            
                                        }
                                      
                                  ?>
                                  <script> 
                                       
                                                alert("<?php echo (count($_GET)-1)."entries are successfully deleted"; ?>");
                                          
                                  
                                  </script>
                                  <?php
                               
                               
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
                                            
                                              <tr > 
                                                  <td style="width: 10px;color: #990000"> <div style="font-size: 20px;color: #990000;text-align: center">S.No. </div> </td>
                                                  <td style="width: 20px;text-align: center;color: #990000"> <div style="font-size: 20px;color: #990000;text-align: center">User Name</div> </td>
                                                  <td style="width: 20px;text-align: center;color: #990000"><div style="font-size: 20px;color: #990000;text-align: center"> From </div></td>
                                                  <td style="width: 20px;text-align: center;color: #990000"> <div style="font-size: 20px;color: #990000;text-align: center">To</div> </td>
                                                  <td style="width: 20px;text-align: center;color: #990000"><div style="font-size: 20px;color: #990000;text-align: center"> Task And Venue </div> </td>
                                                  <td style="width: 20px;text-align: center;color: #990000"><div style="font-size: 20px;color: #990000;text-align: center"> DELETE</div></td>
                                              </tr>';
                                                    $q=0;
                                                  while($q<10)
                                                  {
                                                          $j=result_query($_SESSION['query']." LIMIT ".$t.", 1;");
                                                        
                                                          if($j[0]==NULL)
                                                          break;
                                                          echo '<tr  style="background-color: menu;color: black">';
                                                         echo "<td style='width: 10px' align='center'><div style='font-size: 18px;color: black;text-align: center'>".$t."</div></td><td style='width: 10px' align='center'><div style='font-size: 18px;color: black;text-align: center'>".$j["User_name"]."</div></td><td style='width: 10px' align='center'><div style='font-size: 18px;color: black;text-align: center'>".$j["Fromtime"]."</div></td><td style='width: 10px' align='center'><div style='font-size: 18px;color: black;text-align: center'>".$j["Totime"]."</div></td><td style='overflow:hidden; text-overflow: ellipsis;' align='center'><div style='font-size: 18px;color: black;text-align: center'>".$j["Content"]."</div></td>"; 
                                                      echo '<form action="'.$_SERVER["PHP_SELF"].'" method="GET">';
                                                      echo '<td align="center"><div style="font-size: 18px;color: black;text-align: center"><input type="checkbox" name="'.$t.'" value="'.$j["Fromtime"].'"></div> </td>';
                                                          echo '</from>';
       
                                                     
                                                          echo '</tr>';
                                                     
                                                        $t++;
                                                        $q++;
                                                  }
                                     
                                       echo '<tr> 
                                                        <td> <form action="'.$_SERVER["PHP_SELF"].'" method="GET">
                                                             <button type="submit" value="'.($t-($q+10  )).'" name=submit> << </button>
                                                         </td>
                                                         <td colspan="4"></td>
                                                         <td>
                                                             <form action="'.$_SERVER["PHP_SELF"].'" method="GET">
                                                             <button type="submit" value="'.$t.'" name=submit> >> </button>
                                                         </td>
                                                        
                                                    </tr>'.'<tr> <td colspan="2"> </td> 
                                                    <td colspan="2"><form action="'.$_SERVER["PHP_SELF"].'" method="GET">
                                                             <button type="submit" value="DELETE" name="submit"> DELETE</button></button></td> 
                                                    <td colspan="2"></td>
                                                    </tr> '
                                                    ;
                                              
                                              
                                        echo '</table>';
                                              }
                                          }
                                        }
                                
                                
                                
                                }
                                  
                          
                  
                  
                  
                  ?>
                </div>
                 
            </div>
            <div >
                <?php include '../PhpIncludeFiles/calander_horizontal_menue.php'; ?>
                
                
                
                   
            </div>
            <div id="adminFooter">
                <?php include '../PhpIncludeFiles/AdminFooter.php'; ?>
            </div>
        </div>
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   </body>
   </html>
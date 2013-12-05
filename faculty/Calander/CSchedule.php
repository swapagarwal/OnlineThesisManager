<!DOCTYPE HTML>
<html>
    <head>
              <?php include '../../config/config.php'; ?>
        <?php include '../PhpIncludeFiles/database/database_functions.php'; session_start();?>
           <link rel="stylesheet" href="<?php echo constant("HOST11") . '/web/css/faculty_stylesheet.css' ?>" type="text/css" />
        <script type="text/javascript" src="<?php echo constant("HOST11") . '/web/scripts/facultyScripts.js' ?>"></script>
              <script src="../../web/Jquery/js/jquery-1.9.1.js"></script>
              <script src="../../web/Jquery/js/jquery-ui-1.10.3.custom.js"></script>
              <Script src="../../web/Jquery/js/newJquery.js"></script>
              <link href="../../web/Jquery/css/flick/jquery-ui-1.10.3.custom.css" rel="stylesheet">
         <script>
               $(function() {
                           $('#datepicker').datetimepicker({ dateFormat: 'yy-mm-dd' }).val();
                              });
                $(function() {
                            $('#datepicker2').datetimepicker({ dateFormat: 'yy-mm-dd' }).val();
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
                <div  style="padding-top: 50px;text-align: center;font-size: 25px;color: #990000">
                    <form  action="../toDatabase.php" method="GET">
                        <span style="text-align: center;font-size: 25px;color: green">Create Your Schedule</span>
                        <span style="color: #990000;font-size: 18px;font-style: italic">
                            <br/>**Your Schdule will be visible to all** <br/>
                        </span>
                            <table align="center">
                            <tr>
                                <td align="right"><div style="font-size: 18px;color: blue;text-align: right">From: </div></td>
                                <td>
                                    <input type="text" name="Fromtime" id="datepicker" size="30">
                                </td>
                            </tr>
                            <tr>
                                <td align="right"><div style="font-size: 18px;color: blue;text-align: right">To: </div></td>
                                <td>
                                    <input type="text" name="Totime" id="datepicker2" size="30">
                                </td>

                            </tr>
                            <tr>
                                <td align="right"><div style="font-size: 18px;color: blue;text-align: right">Task And Venue </div></td>
                                <td>
                                    <textarea name="Content" rows="2" cols="30"> </textarea>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" align="right">
                                    <input type="submit" value="Create" name="submit">
                                </td>
                            </tr>
                            </table>
                    </form>
                </div>
                 
            </div>
            <div >
                <?php include '../PhpIncludeFiles/calander_horizontal_menue.php'; ?>
                
                
                
                   
            </div>
            <div id="adminFooter">
                <?php include '../PhpIncludeFiles/AdminFooter.php'; ?>
                  <?php
                        if(isset($_GET['error']))
                        {
                              if($_GET['error']==0)
                              { ?>
                                    <script> alert("Task Has been Scheduled"); </script>
                                  <?php
                               } 
                              else if($_GET['error']==2)
                              { ?>
                                  <script> alert("You cant be at 2 place at the same time"); </script>
                                  <?php
                                 }
                                 else
                                 {
                                      ?>
                                      <script> alert("Check the timing Properly....They are not logical"); </script>
                                      <?php
                                 
                                 }
                        
                        
                        }
                        
                        
                        
                        
                        
                        ?>
            </div>
        </div>
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   </body>
   </html>
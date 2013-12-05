
<html>
      <head>
                
              <?php include '../../config/config.php' ?>
              <link rel="stylesheet" href="<?php echo constant("HOST11") . '/web/css/AdminStyleSheet.css' ?>" type="text/css" />
              <script src="../../web/Jquery/js/jquery-1.9.1.js"></script>
              <script src="../../web/Jquery/js/jquery-ui-1.10.3.custom.js"></script>
              <Script src="../../web/Jquery/js/newJquery.js"></script>
              <link href="../../web/Jquery/css/flick/jquery-ui-1.10.3.custom.css" rel="stylesheet">
              <script>
                  function function1()
                  {
                      alert("Task Has been Scheduled!!");
                  }
                  function function2()
                  {
                      alert("You can't do 2 Task at the same Time ,please delete the scheduled task first!!");
                  }
                  function function3()
                  {
                      alert("Check the timing properly They are not logical!!");
                  }
              </script>
              <script>
               $(function() {
                           $('#datepicker').datetimepicker({ dateFormat: 'yy-mm-dd' }).val();
                              });
                $(function() {
                            $('#datepicker2').datetimepicker({ dateFormat: 'yy-mm-dd' }).val();
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
            <div id="adminVMenu3">
                  <?php include '../PhpIncludeFiles/Admin/CalanderVMenu.php'; ?>
            </div>
            <div id="adminMiddle">
                    <div id="adminMiddleContent2">
                      <form method="GET" action="../toDatabase.php">
                      <br>
                      <br>
                      
                      <p>From : <br><input type="text" name="fromDate" id="datepicker"> </p> <br><br>
                      <p>To:  <br><input type="text" name="toDate" id="datepicker2"> </p> <br><br>
                      <p>Task And Venue: <br><textarea name="Content"  rows="5" cols="50"> </textarea> </p> <br><br>
                      <p><input type="submit" Value="FIX IT" name="submit"></p>
                      </form>
                      </div>
            </div>
            <div id="adminFooter">
                   <?php 
                        if(isset($_GET['error']))
                        {
                                if($_GET['error']==0)
                                { 
                                ?>
                                <script>function1();</script>
                                <?php
                                }
                                
                                else if($_GET['error']==1)
                                {
                                ?>
                                <script>function3();</script>
                                <?php
                                }
                                 else
                                 {
                                  ?>
                                  <script>function2();</script>
                                  <?php
                                 }
                                
                        }
                       ?>
                <?php include '../PhpIncludeFiles/Admin/AdminFooter.php'; ?>
            </div>
        </div>
 </body>
 </html>
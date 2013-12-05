<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?php include '../../config/config.php'; ?>
        <?php include '../PhpIncludeFiles/Database/AdminRecordManager.php'; ?>
        <?php include '../PhpIncludeFiles/CommonFunctions.php'; ?>
        <link rel="stylesheet" href="<?php echo constant("HOST11") . '/web/css/AdminStyleSheet.css' ?>" type="text/css" />
        <title>Thesis Manager (Admin Section)</title>
        <?php
        //Forward to login page if not authenticated.
        session_start();
        if (!isset($_SESSION['admin_user_nm'])) {
            header("Location: " . constant("HOST11") . "/Backend/login.php");
        }
        
        
        $roll = "MT";
        $pageCounter = 1;
		$option="";
        $text="";
        
        if(isset($_GET['option']))
        $option=$_GET['option'];
        
        if(isset($_GET['text']))
        $text=$_GET['text'];
		
        if (isset($_GET['class'])) {
            $roll = $_GET['class'];
            if ($roll != "MT" && $roll != "BT") {
                $roll = "NONE";
            }
        }
        if (isset($_GET['pageCount'])) {
            $pageCounter = $_GET['pageCount'];
        }
        if ($roll != "NONE") {
            $result = getAllRecordss($roll, $pageCounter,$option,$text);
        } else {
            $result = "NONE";
        }
        ?>
	<script>
            function myFunction()
            {
              var x1=document.getElementById("select").value;
              var x2=document.getElementById("searchbox").value;
              var x3=document.getElementById("submit").value;
              var x4="<?php echo constant("HOST11") . '/Backend/Records/record_home.php?class=' ?>"+x3+"&pageCount=1&option="+x1+"&text="+x2;
              window.location.assign(x4);
             }
        </script>
    </head>
    <body>
        <div id="bodyPanel">
            <div id="adminHeader">
                <div id="adminHeaderTitle"><?php include '../PhpIncludeFiles/Admin/headerImage.php';?></div>
                <div id="adminHeaderLocation">Project Record Display</div>
            </div>
            <div id="adminVMenu">
                <?php include '../PhpIncludeFiles/Admin/VerticalMenuItems.php'; ?>
            </div>
            <div id="adminMiddle">
                <div class="myHeaderMenuStrip">
                    ||<a class="headerMenueLink" href="<?php echo constant("HOST11") . '/Backend/Records/record_home.php?class=BT&pageCount=1' ?>">&nbsp;B. Tech&nbsp;</a>||
                    <a class="headerMenueLink" href="<?php echo constant("HOST11") . '/Backend/Records/record_home.php?class=MT&pageCount=1' ?>" >&nbsp;M.Tech&nbsp</a>||
                </div>
				<div>
                                <center>
                                
                                      <select name="option" id="select">
                                       <option value="Roll">Roll number</option>
                                       <option value="Name">Name</option>
                                       <option value="Advisor">Advisor Name</option>
                                       <option value="thesis">Abstract</option>
                                       <option value="topic">Topic</option>
                                      </select>
                                      <input type="text" id="searchbox">
                                      <button onclick="myFunction();" id="submit" value="<?php echo $roll;?>">Search</button>
                                
                                </center>
                  </div>
                <div id="adminMiddleContent">
                    <div id="studentListingResult">
                        <?php
                        if ($result == "DONE") {
                            echo $_SESSION['innerHTMLSimple'];
                            unset($_SESSION['innerHTMLSimple']);
                        } else if ($result == "NOT_FOUND") {
                            echo "<b>NO DATA FOUND!!!!!";
                        } else if ($result == "DBCONNECTION_ERROR") {
                            echo "<b>DATABASE ERROR!!!!!";
                        } else {
                            echo "<b>Operation failed. Some error occured. Try again.";
                        }
                        ?>                      
                    </div>
                </div>
            </div>
            <div id="adminFooter">
                <?php include '../PhpIncludeFiles/Admin/AdminFooter.php'; ?>
            </div>
        </div>
    </body>
</html>

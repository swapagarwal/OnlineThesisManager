<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?php include 'config/config.php'; ?>
        <?php include 'Macros/DatabaseFunctions.php'; ?>
        <?php include 'Macros/CommonFunctions.php';?>
        <link rel="stylesheet" href="<?php echo constant("HOST11") . '/web/css/UserStyleSheet.css' ?>" type="text/css" />
        <title>Thesis Manager (Admin Section)</title>
        <?php
        //Forward to login page if not authenticated.
        session_start();
        if (!isset($_SESSION['user_nm'])) {
            header("Location: " . constant("HOST11") . "/login.php");
        }
        
        $result = getAllRecords();
        
        ?>
    </head>
    <body>
        <div id="bodyPanel">
            <div id="adminHeader">
                <div id="adminHeaderTitle"><?php include 'Macros/headerImage.php';?></div>
                <div id="adminHeaderLocation">Department of CSE, IIT Guwahati</div>
            </div>
            <div id="adminVMenu">
                <?php include 'Macros/VerticalMenuItems.php'; ?>
            </div>
            <div id="adminMiddle">
                <div style="color: olive;font-size: 20px; text-align: center;width: 100%">****Welcome, <?php echo strtoupper($_SESSION['name']) ?>****</div>
                <div id="adminMiddleContent">
                    <div id="studentListingResult" style="">
                        <?php
                        if ($result == "DONE") {
                            echo $_SESSION['innerHTMLSimple'];
                            unset($_SESSION['innerHTMLSimple']);
                        } else if ($result == "NOT_FOUND") {
                            echo "<br/><br/><br/><b>NO DATA FOUND!!!!!";
                        } else if ($result == "DBCONNECTION_ERROR") {
                            echo "<br/><br/><br/><b>DATABASE ERROR!!!!!";
                        } else {
                            echo '<b><br/><br/><br/><span  style="text-align: center;padding-left: 50px">Operation failed. Some error occured. Try again.</span>';
                        }
                        ?>                      
                    </div>
                </div>
            </div>
            <div id="adminFooter">
                <?php include 'Macros/AdminFooter.php'; ?>
            </div>
        </div>
    </body>
</html>

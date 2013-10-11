<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?php include '../../config/config.php'; ?>
        <?php require '../PhpIncludeFiles/Database/AdminScheduleManager.php'; ?>
        <?php
        //Forward to login page if not authenticated.
        session_start();
        if (!isset($_SESSION['admin_user_nm'])) {
            header("Location: " . constant("HOST11") . "/Backend/login.php");
        }
        ?>
        <link rel="stylesheet" href="<?php echo constant("HOST11") . '/web/css/AdminStyleSheet.css' ?>" type="text/css" />
        <link rel="stylesheet" href="../../web/css/adminStudentStyleSheet.css" type="text/css" />
        <title>Thesis Manager (Admin Section)</title>
        <?php
        $result = getAllSchedules();
        ?>
    </head>
    <body>
        <div id="bodyPanel">
            <div id="adminHeader">
                <div id="adminHeaderTitle"><?php include '../PhpIncludeFiles/Admin/headerImage.php';?></div>
                <div id="adminHeaderLocation">Schedule Management</div>
            </div>
            <div id="adminVMenu">
                <?php include '../PhpIncludeFiles/Admin/VerticalMenuItems.php'; ?>
            </div>
            <div id="adminMiddle">
                <?php include '../PhpIncludeFiles/Admin/schedule/ScheduleHorizontalMenu.php'; ?>
                <div id="adminMiddleContent">
                    <div id="studentContentHeader">Schedule List</div>
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

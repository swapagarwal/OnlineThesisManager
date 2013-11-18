<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?php include '../../config/config.php'; ?>
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
                    <div id="studentContentHeader">Result Dialog</div>
                    <div id="studentTableContatiner">
                        <?php
                        if(!isset($_SESSION['admin_user_nm'])&&!isset($_SESSION['user_nm'])&&!isset($_SESSION['faculty_user_nm']))
                            session_start();
                        echo $_SESSION["queryResult"];
                        unset($_SESSION["queryResult"]);
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

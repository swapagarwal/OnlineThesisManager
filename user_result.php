<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?php include 'config/config.php'; ?>
        <?php
        session_start();
        if (!isset($_SESSION['user_nm'])) {
            header("Location: ".constant("HOST11")."/login.php");
        }
        ?>
        <link rel="stylesheet" href="<?php echo constant("HOST11") . '/web/css/UserStyleSheet.css' ?>" type="text/css" />
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
                <div style="color: green;font-size: 20px; text-align: center;width: 100%">Welcome, <?php echo strtoupper($_SESSION['name']) ?></div>
                <div  style="padding-top: 100px;text-align: center;font-size: 25px;color: #006600">
                    <?php 
                    echo $_SESSION['queryString'];
                    unset($_SESSION['queryString']);
                    ?>
                </div>
            </div>
            <div id="adminFooter">
                <?php include 'Macros/AdminFooter.php'; ?>
            </div>
        </div>
        <span style="font-weight: normal"></span>
    </body>
</html>

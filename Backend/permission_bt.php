<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?php
        include '../config/config.php';
        include 'PhpIncludeFiles/Database/admin_permission_manager.php';
        session_start();
        if (!isset($_SESSION['admin_user_nm'])) {
            header("Location: " . constant("HOST11") . "/Backend/login.php");
        }
        ?>
        <link rel="stylesheet" href="<?php echo constant("HOST11") . '/web/css/AdminStyleSheet.css' ?>" type="text/css" />
        <script type="text/javascript" src="<?php echo constant("HOST11") . '/web/scripts/admin_script.js' ?>"></script>
        <title>Thesis Manager (Admin Section)</title>
    </head>
    <body>
        <div id="bodyPanel">
            <div id="adminHeader">
                <div id="adminHeaderTitle">
                    <?php include 'PhpIncludeFiles/Admin/headerImage.php'; ?>
                </div>
                <div id="adminHeaderLocation">Dashboard Home</div>
            </div>
            <div id="adminVMenu">
                <?php include 'PhpIncludeFiles/Admin/VerticalMenuItems.php'; ?>
            </div>
            <div id="adminMiddle">
                <div id="mTPanel">
                    <div id="mTPanelTitle">List of all B.Tech students</div>
                    <div id="mTPanelInfo">Click on the roll number for complete list of permission granting history</div>
                    <div id="mTListHeader">
                        <div id="mTSrlNo">S</div>
                        <div id="mTRollNo">Roll No.</div>
                        <div id="mTName">Name</div>
                        <div id="mTThesisLink">Thesis Link</div>
                        <div id="mTPermission">Permission</div>
                        <div id="mTStatus">Status</div>
                    </div>
                    <?php
                    $result = getAllStudents("BT");
                    if ($result == "DONE") {
                        echo $_SESSION["innerHTMLSimple"];
                        unset($_SESSION["innerHTMLSimple"]);
                    } else if ($result == "DBCONNECTION_ERROR") {
                        echo '<div id="ListOddRow" style="text-align: center; color: #990033">Database connection error.</div>';
                    } else if ($result == "NOT_FOUND") {
                        echo '<div id="ListOddRow" style="text-align: center; color: #990033">No BTech student found.</div>';
                    } else {
                        echo '<div id="ListOddRow" style="text-align: center; color: #990033">Some unknown error occured. Please refresh the page.</div>';
                    }
                    ?>
                </div>
            </div>
            <div id="adminFooter">
                <?php include 'PhpIncludeFiles/Admin/AdminFooter.php'; ?>
            </div>
        </div>
    </body>
</html>

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
                <div id="adminHeaderLocation">Student Management</div>
            </div>
            <div id="adminVMenu">
                <?php include '../PhpIncludeFiles/Admin/VerticalMenuItems.php'; ?>
            </div>
            <div id="adminMiddle">
                <?php include '../PhpIncludeFiles/Admin/Students/StudentHorizontalMenu.php'; ?>
                <div id="adminMiddleContent">
                    <div id="studentContentHeader">Add list of students from CSV file</div>
                    <div id="studentTableContatiner">
                        <form name="csvRecord" action="../PhpIncludeFiles/FormProcessor/Student/csv_record_processor.php" method="POST" enctype="multipart/form-data">
                            <table class="formTable">
                                <tr><td colspan="3" style="height: 10px"></td></tr>
                                <tr class="formTableRow">
                                    <td class="formTableColLabel">Select CSV File:</td>
                                    <td class="formTableColField"><input type="file" name="fileCSV" value="" /></td>
                                    <td class="formTableColHelp">Click <a href="">Here</a> for CSV file format.</td>
                                </tr>
                                <tr><td colspan="3" style="height: 10px"></td></tr>
                                <tr><td colspan="3" style="height: 10px"></td></tr>
                                <tr>
                                    <td colspan="2" style="height: 10px;text-align: right"><input type="submit" value="Submit" name="buttonSubmit" /></td>
                                    <td></td>    
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
            <div id="adminFooter">
                <?php include '../PhpIncludeFiles/Admin/AdminFooter.php'; ?>
            </div>
        </div>

    </body>
</html>

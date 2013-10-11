<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?php include '../../config/config.php'; ?>
        <?php include '../PhpIncludeFiles/CommonFunctions.php'; ?>
        <link rel="stylesheet" href="<?php echo constant("HOST11") . '/web/css/AdminStyleSheet.css' ?>" type="text/css" />
        <title>Thesis Manager (Admin Section)</title>
        <?php
        //Forward to login page if not authenticated.
        session_start();
        if (!isset($_SESSION['admin_user_nm'])) {
            header("Location: " . constant("HOST11") . "/Backend/login.php");
        }
        ?>
    </head>
    <body>
        <div id="bodyPanel">
            <div id="adminHeader">
                <div id="adminHeaderTitle"><?php include '../PhpIncludeFiles/Admin/headerImage.php';?></div>
                <div id="adminHeaderLocation">CSV Generator</div>
            </div>
            <div id="adminVMenu">
                <?php include '../PhpIncludeFiles/Admin/VerticalMenuItems.php'; ?>
            </div>
            <div id="adminMiddle">
                <?php include '../PhpIncludeFiles/Admin/CSV/CSVHorizontalMenu.php'; ?>
                <div id="adminMiddleContent">
                    <table style="width: 100%">
                        <tr>
                            <td colspan="2"><div style="color: #006600;font-size: 20px;text-align: center">Download different types of CSV format files.</div></td>
                        </tr>
                        <tr><td colspan="2" style="background-color: #0a030a;height: 3px;width: 100%"></td></tr>
                        <tr>
                            <td>
                                <div style="color: black;text-align: justify;width: 400px">
                                    Download CSV file for Student Information. The format will be
                                    <br/>
                                    <b>roll_number,name,mail_ID,class,password</b>
                                    <br/>
                                    <br/>
                                    The file will only contain records of those students who have not changed their password yet.
                                    Once a student change his password, his record will not be in this file.    
                                </div>
                            </td>
                            <td>
                                Generate and Download
                                <div style="color: #990033;text-align: center"><a href="<?php echo constant("HOST11") . '/Backend/CSV/CSVGenerator.php?csv=SF&class=MT' ?>" target="_blank">M.Tech</a></div>
                                <div style="color: #990033;text-align: center"><a href="<?php echo constant("HOST11") . '/Backend/CSV/CSVGenerator.php?csv=SF&class=BT' ?>" target="_blank">B.Tech</a></div>
                            </td>
                        </tr>
                        <tr><td colspan="2" style="background-color: #0a030a;height: 3px;width: 100%"></td></tr>
                        <tr>
                            <td>
                                <div style="color: black;text-align: left;width: 400px">
                                    Download CSV file for Project Information. The format will be
                                    <br/>
                                    <b>roll_number, name, mail id, class, project_title, advisor name,
                                    advisors_mail_id, thesis_download_link, submission_date, late_submission,advisor_permission</b>
                                    <br/>
                                </div>
                            </td>
                            <td>Generate and Download
<!--                                <div style="color: #990033;text-align: center"><a href="<?php echo constant("HOST11") . '/Backend/CSV/CSVGenerator.php?csv=PF&class=MT' ?>" target="_blank">M.Tech</a></div>-->
<!--                                <div style="color: #990033;text-align: center"><a href="<?php echo constant("HOST11") . '/Backend/CSV/CSVGenerator.php?csv=PF&class=BT' ?>" target="_blank">B.Tech</a></div>-->
                            </td>
                        </tr>
                        <tr><td colspan="2" style="background-color: #0a030a;height: 3px;width: 100%"></td></tr>
                    </table>
                </div>
            </div>
            <div id="adminFooter">
                <?php include '../PhpIncludeFiles/Admin/AdminFooter.php'; ?>
            </div>
        </div>
    </body>
</html>

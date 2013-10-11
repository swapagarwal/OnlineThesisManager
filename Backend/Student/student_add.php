<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?php 
        include '../../config/config.php'; 
        include '../PhpIncludeFiles/Database/AdminStudentManager.php';
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
                <div id="adminHeaderTitle"><?php include '../PhpIncludeFiles/Admin/headerImage.php'; ?></div>
                <div id="adminHeaderLocation">Student Management</div>
            </div>
            <div id="adminVMenu">
                <?php include '../PhpIncludeFiles/Admin/VerticalMenuItems.php'; ?>
            </div>
            <div id="adminMiddle">
                <?php include '../PhpIncludeFiles/Admin/Students/StudentHorizontalMenu.php'; ?>
                <div id="adminMiddleContent">
                    <div id="studentContentHeader">Add a student</div>
                    <div id="studentTableContatiner">
                        <form name="frmAddStudent" method="POST" action="../PhpIncludeFiles/FormProcessor/Student/add_student_form_processor.php">

                            <table class="formTable">
                                <tr class="formTableRow">
                                    <td class="formTableColLabel">Roll Number:</td>
                                    <td class="formTableColField"><input type="text" name="txtRoll" value="" /></td>
                                    <td class="formTableColHelp"></td>
                                </tr>
                                <tr><td colspan="3" style="height: 10px"></td></tr>
                                <tr class="formTableRow">
                                    <td class="formTableColLabel">Student Name:</td>
                                    <td class="formTableColField"><input type="text" name="txtName" value="" /></td>
                                    <td class="formTableColHelp"></td>
                                </tr>
                                <tr><td colspan="3" style="height: 10px"></td></tr>
                                <tr class="formTableRow">
                                    <td class="formTableColLabel">User Name:</td>
                                    <td class="formTableColField"><input type="text" name="txtUserName" value="" /></td>
                                    <td class="formTableColHelp">Students Web-Mail ID e.g., s.das</td>
                                </tr>
                                <tr><td colspan="3" style="height: 10px"></td></tr>
                                <tr class="formTableRow">
                                    <td class="formTableColLabel">Class:</td>
                                    <td class="formTableColField">
                                        <select name="comboClass">
                                            <option value="NONE">Select Class</option>
                                            <option value="MT">M.Tech</option>
                                            <option value="BT">B.Tech</option>
                                        </select>
                                    </td>
                                    <td class="formTableColHelp"></td>
                                </tr>
                                <tr><td colspan="3" style="height: 10px"></td></tr>
                                <tr class="formTableRow">
                                    <td class="formTableColLabel">Advisor Name:</td>
                                    <td class="formTableColField">
                                        <select name="comboAdvisor">
                                            <option value="NONE">Select Advisor</option>
                                            <?php 
                                            $result=  getAllFaculties();
                                            if($result=="NONE"||$result=="NOT_FOUND"||$result=="DBCONNECTION_ERROR"){
                                                echo '<option value="NONE">Error!!</option>';
                                            }else{
                                                echo $_SESSION['innerHTMLSimple'];
                                                unset ($_SESSION['innerHTMLSimple']);
                                            }
                                            ?>
                                        </select>
                                    </td>
                                    <td class="formTableColHelp"></td>
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

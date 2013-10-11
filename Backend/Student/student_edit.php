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
        <?php
        if (isset($_GET['roll'])) {
            $roll = $_GET['roll'];
            if (!preg_match(getRollPattern(), $roll)) {
                $roll = "NONE";
            }
        } else {
            $roll = "NONE";
        }
        if ($roll == "NONE") {
            $result = "NONE";
        } else if (!($con = mysql_connect(constant("HOSTNAME"), constant("USERNAME"), constant("PASS")))) {
            $result = "DBCONNECTION_ERROR";
        } else if (!($select = mysql_select_db(constant("DBNAME"), $con))) {
            $result = "DBCONNECTION_ERROR";
        } else {
            $sql = "SELECT name,roll_number,user_nm,password,class,advisor_id from student where roll_number='" . $roll . "'";
            $rs = mysql_query($sql);
            $row = mysql_fetch_assoc($rs);
            if ($row) {
                $name = $row["name"];
                $roll_no = $row["roll_number"];
                $user_nm = $row["user_nm"];
                $roll = $row["class"];
                $pass = $row["password"];
                $advisor_id=$row["advisor_id"];
                $result = "DONE";
            }
            mysql_close($con);
        }
        ?>
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
                    <div id="studentContentHeader">Edit Student Record</div>
                    <div id="studentTableContatiner">
                        <?php if ($result == "DONE") { ?>
                            <form name="editStudent" action="../PhpIncludeFiles/FormProcessor/Student/edit_form_processor.php" method="POST">
                                <table class="formTable">
                                    <tr class="formTableRow">
                                        <td class="formTableColLabel">Roll Number:</td>
                                        <td class="formTableColField"><input type="text" name="txtRoll" value="<?php echo $roll_no ?>" size="35" readonly="yes" /></td>
                                        <td class="formTableColHelp"></td>
                                    </tr>
                                    <tr><td colspan="3" style="height: 10px"></td></tr>
                                    <tr class="formTableRow">
                                        <td class="formTableColLabel">Student Name:</td>
                                        <td class="formTableColField"><input type="text" name="txtName" value="<?php echo $name ?>" size="35" /></td>
                                        <td class="formTableColHelp"></td>
                                    </tr>
                                    <tr><td colspan="3" style="height: 10px"></td></tr>
                                    <tr class="formTableRow">
                                        <td class="formTableColLabel">User Name:</td>
                                        <td class="formTableColField"><input type="text" name="txtUserName" value="<?php echo $user_nm ?>" size="35" /></td>
                                        <td class="formTableColHelp">User Name must be students Web-Mail ID e.g., s.das</td>
                                    </tr>
                                    <tr><td colspan="3" style="height: 10px"></td></tr>
                                    <tr class="formTableRow">
                                        <td class="formTableColLabel">Advisor Name:</td>
                                        <td class="formTableColField">
                                            <select name="comboAdvisor">
                                            <?php 
                                            $result=  getAllFacultiesForEditForm($advisor_id);
                                            if($result=="NONE"||$result=="NOT_FOUND"||$result=="DBCONNECTION_ERROR"){
                                                echo '<option value="NONE">Error!!</option>';
                                            }else{
                                                echo $_SESSION['innerHTMLSimple'];
                                                unset ($_SESSION['innerHTMLSimple']);
                                            }
                                            ?>
                                        </select>
                                        </td>
                                        <td class="formTableColHelp">Change advisor if currently showing wrong advisor name.</td>
                                    </tr>
                                    <tr><td colspan="3" style="height: 10px"></td></tr>
                                    <tr class="formTableRow">
                                        <td class="formTableColLabel">Class:</td>
                                        <td class="formTableColField">
                                            B.Tech
                                            <?php if ($roll == "BT") { ?>
                                                <input type="radio" name="radioClass" checked="checked"  value="BT"/>
                                            <?php } else { ?>
                                                <input type="radio" name="radioClass" value="BT"/>
                                            <?php } ?>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            M.Tech
                                            <?php if ($roll == "MT") { ?>
                                                <input type="radio" name="radioClass" checked="checked" value="MT" />
                                            <?php } else { ?>
                                                <input type="radio" name="radioClass" value="MT" />
                                            <?php } ?>
                                        </td>
                                        <td class="formTableColHelp"></td>
                                    </tr>
                                    <tr><td colspan="3" style="height: 10px"></td></tr>
                                    <tr class="formTableRow">
                                        <td class="formTableColLabel">Password:</td>
                                        <td class="formTableColField"><input type="text" name="txtPassword" value="<?php echo $pass ?>" size="35" /></td>
                                        <td class="formTableColHelp">Password can only contain alphabets and numbers and length must be between 6 to 12.</td>
                                    </tr>
                                    <tr><td colspan="3" style="height: 10px"></td></tr>
                                    <tr><td colspan="3" style="height: 10px"></td></tr>
                                    <tr>
                                        <td colspan="2" style="height: 10px;text-align: right"><input type="submit" value="Update" name="buttonSubmit" /></td>
                                        <td></td>    
                                    </tr>
                                </table>
                                
                            </form>
                            <?php
                        } else {
                            echo '<b>NO DATA EXIST!!!!!!</b>';
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

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?php include 'config/config.php'; ?>
        <link rel="stylesheet" href="<?php echo constant("HOST11") . '/web/css/UserStyleSheet.css' ?>" type="text/css" />
        <title>Online Thesis Manager</title>
        <?php
        $pageStatus = "NEW";
        if (isset($_POST['txtUserNm'])) {
            $user_nm = $_POST['txtUserNm'];
            $pass = $_POST['txtPass'];
            if ((!preg_match(getUserNamePattern(), $user_nm)) || (!preg_match(getPasswordPattern(), $pass))) {
                $pageStatus = "INVALID";
            } else {
                $pageStatus = "REQUESTED";
            }
        }
        $user_type=$_POST['user_type'];
//        if (isset($_GET['pageStatus'])) {
//            if ($_GET['pageStatus'] == "001") {
//                $pageStatus = "INVALID";
//            }
//        }
        if ($pageStatus == "REQUESTED") {
            $result = "NOTFOUND";
            if (!($con = mysql_connect(constant("HOSTNAME"), constant("USERNAME"), constant("PASS")))) {
                $result = "DBCONNECTION_ERROR";
            } else if (!($select = mysql_select_db(constant("DBNAME"), $con))) {
                $result = "DBCONNECTION_ERROR";
            } else {
                if($user_type=="std") {
                    $sql = "SELECT name,roll_number,class,pass_changed,permission,advisor_name FROM student,advisor WHERE student.advisor_id=advisor.advisor_id AND user_nm='" . $user_nm . "' and password='" . $pass . "'";
                    $rs = mysql_query($sql);
                    while ($row = mysql_fetch_assoc($rs)) {
                        $result = "FOUND";
                        session_start();
                        $_SESSION['user_nm'] = $user_nm;
                        $_SESSION['name'] = $row['name'];
                        $_SESSION['roll_number'] = $row['roll_number'];
                        $_SESSION['class'] = $row['class'];
                        $_SESSION['pass_changed'] = $row['pass_changed'];
                        $_SESSION['permission'] = $row['permission'];
                        $_SESSION['advisor_name'] = $row['advisor_name'];
                    }
                }else if($user_type=="fac") {
                    $sql = "SELECT advisor_name FROM advisor WHERE advisor_id='" . $user_nm . "' and pass='" . $pass . "'";
                    $rs = mysql_query($sql);
                    while ($row = mysql_fetch_assoc($rs)) {
                        $result = "FOUND";
                        session_start();
                        $_SESSION['faculty_user_nm'] = $user_nm;
                        $_SESSION['faculty_name'] = $row['advisor_name'];
                    }
                }else if($user_type=="adm") {
                    $sql = "SELECT name,role FROM users WHERE user_nm='" . $user_nm . "' and password='" . $pass . "'";
                    $rs = mysql_query($sql);
                    while ($row = mysql_fetch_assoc($rs)) {
                        $result = "FOUND";
                        session_start();
                        $_SESSION['admin_user_nm'] = $user_nm;
                        $_SESSION['admin_name'] = $row['name'];
                        $_SESSION['role'] = $row['role'];
                    }
                }else {
                    $result == "NOTFOUND";
                }
            }
            mysql_close($con);
            if ($result == "FOUND" && $user_type=="std") {
                header("Location: " . constant("HOST11") . "/index.php");
            }else if ($result == "FOUND" && $user_type=="fac") {
                header("Location: " . constant("HOST11") . "/faculty/index.php");
            }else if ($result == "FOUND" && $user_type=="adm") {
                header("Location: " . constant("HOST11") . "/Backend/index.php");
            }else {
                $pageStatus = "INVALID";
            }
        }
        ?>
    </head>
    <body>
        <div id="bodyPanel">
            <div id="adminHeader">
                <div id="adminHeaderTitle"><?php include 'Macros/headerImage.php';?></div>
                <div id="adminHeaderLocation">Department of CSE, IIT Guwahati</div>
            </div>
            <div id="adminVMenu">
            </div>
            <div id="adminMiddle">
                <div id="adminMiddleContent" style="text-align: center;width: 400px;padding-top: 150px">
                    <form action="login.php" method="POST">
                        <table style="width: 100%">
                            <tr>
                                <td colspan="2" style="width: 100%"><div style="color: green;font-size: 30px;padding-bottom: 20px">Login into Online Thesis Manager</div></td>
                            </tr>
                            <tr>
                                <td style="width: 40%"><div style="color: #006600;text-align: right">Select User Type :</div></td>
                                <td style="width: 60%">
                                    <div style="text-align: left">
                                        <select name="user_type">
                                            <option value="std">Student</option>
                                            <option value="fac">Faculty</option>
                                            <option value="adm">Admin</option>
                                        </select>
                                    </div></td>
                            </tr>
                            <tr>
                                <td style="width: 40%"><div style="color: #006600;text-align: right">Enter UserName :</div></td>
                                <td style="width: 60%"><div style="text-align: left"><input type="text" name="txtUserNm" value="" style="width: 180px"/></div></td>
                            </tr>
                            <tr>
                                <td style="width: 40%"><div style="color: #006600;text-align: right">Enter Password :</div></td>
                                <td style="width: 60%"><div style="text-align: left"><input type="password" name="txtPass" value="" style="width: 180px"/></div></td>
                            </tr>
                            <tr>
                                <td colspan="2" style="width: 100%"><div style="color: black;text-align: right;padding-right: 50px"><input type="submit" value="Log In" name="buttonSubmit" /></div></td>
                            </tr>
                            <tr>
                                <td colspan="2" style="width: 100%">
                                    <div style="color: #990000;text-align: center">
                                        <?php
                                        if ($pageStatus == "INVALID") {
                                            echo "Login failed. Enter valid credentials and choose proper user type.";
                                        }
                                        ?>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
            <div id="adminFooter">
                <?php include 'Macros/AdminFooter.php'; ?>
            </div>
        </div>
    </body>
</html>

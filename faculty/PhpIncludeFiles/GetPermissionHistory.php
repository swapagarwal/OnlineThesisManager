<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?php include '../../config/config.php'; ?>
        <?php require '../PhpIncludeFiles/database/database_functions.php'; ?>
        <?php
        //Forward to login page if not authenticated.
        session_start();
        if (!isset($_SESSION['faculty_user_nm'])) {
            header("Location: " . constant("HOST11") . "/faculty/login.php");
        }
        ?>
        <title>Thesis Manager. Permission history</title>
        <?php
        if (preg_match(getUserNamePattern(), $_GET['user_nm']) && isset($_GET['user_nm'])) {
            $result = getAllUploadHistory($_GET["user_nm"]);
        } else {
            $result = "NONE";
        }
        ?>
    </head>
    <body>
        <div style="text-align: center">
            <table>
                <tr style="text-align: center;width: 480px;font-size: 25px;color: darkred"><td colspan="4">Permission Granting History</td></tr>
                <tr style="text-align: center;width: 480px;font-size: 18px;color: blue"><td colspan="4">
                        <?php
                        if ($result == "NONE" || $result == "STUDENT_NOT_FOUND") {
                            echo 'Error!!! Db connection error or may be Student not found.';
                        } else {
                            echo $_SESSION["student_name"];
                            unset($_SESSION["student_name"]);
                        }
                        ?>
                    </td>
                </tr>
                <tr style="text-align: center;width: 480px;background-color: #009933;color: white;font-weight: bold">
                    <td style="width: 50px">Srl No.</td>
                    <td style="width: 100px">Date</td>
                    <td style="width: 80px">Time</td>
                    <td style="width: 250px">Permitted By</td>
                </tr>
<!--                 <tr style="text-align: center;width: 480px;background-color: #ffffff;color: black;font-weight: normal">
                    <td style="width: 50px">Srl No.</td>
                    <td style="width: 100px">Date</td>
                    <td style="width: 80px">Time</td>
                    <td style="width: 250px">Permitted By</td>
                </tr>
                <tr style="text-align: center;width: 480px;background-color: #cccccc;color: black;font-weight: normal">
                    <td style="width: 50px">Srl No.</td>
                    <td style="width: 100px">Date</td>
                    <td style="width: 80px">Time</td>
                    <td style="width: 250px">Permitted By</td>
                </tr>-->
                <?php
                if ($result == "NONE" || $result == "STUDENT_NOT_FOUND") {
                    echo '<tr style="text-align: center;width: 480px;background-color: #ffffff;color: black;font-weight: normal">
                                 <td colspan="4">Error!!!</td></tr>';
                } else if ($result == "DONE") {
                    echo $_SESSION["innerHTMLSimple"];
                    unset($_SESSION["innerHTMLSimple"]);
                } else if ($result == "NO_HISTORY_FOUND") {
                    echo '<tr style="text-align: center;width: 480px;background-color: #ffffff;color: black;font-weight: normal">
                                 <td colspan="4">No permission history available....</td></tr>';
                }
                ?>
            </table>
        </div>
    </body>
</html>

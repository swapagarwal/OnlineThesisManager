<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?php include '../config/config.php'; ?>
        <?php
        session_start();
        if (!isset($_SESSION['faculty_user_nm'])) {
            header("Location: " . constant("HOST11") . "faculty/login.php");
        }
        ?>
        <?php
        require 'PhpIncludeFiles/database/database_functions.php';
        $pass = $_REQUEST["currentPass"];
        $error="";
        if (isset($pass)) {
            $pass1 = $_REQUEST["newPass1"];
            $pass2 = $_REQUEST["newPass2"];
            if (isset($pass) && isset($pass1) && isset($pass2)) {
                $res = changePasswd($_SESSION["faculty_user_nm"],$pass, $pass1);
                if ($res == "DBCONNECTION_ERROR") {
                    $error = "Database Connection Error.";
                } else if ($res == "DB_ERROR" || $res == "NONE") {
                    $error = "Database error.";
                }else if($res == "INVALID"){
                    $error = "Error!! Invalid data format.";
                } 
                else {
                    unset($_REQUEST['currentPass']);
                    //unset($_SESSION['user_nm']);
                    $error = '<font color="green">Password changed successfuly. Logout now and relogin again.</font>';
                }
            }
        }
        ?>
        <link rel="stylesheet" href="<?php echo constant("HOST11") . '/web/css/faculty_stylesheet.css' ?>" type="text/css" />
        <title>Online Manager</title>
        <script language="javascript">
            function onLoad(){
                var pass=document.getElementById("currentPass");
                var pass1=document.getElementById("newPass1");
                var pass2=document.getElementById("newPass2");
                pass.disabled=false;
                pass1.disabled=true;
                pass2.disabled=true;
            }

            function clearAll(){
                var pass=document.getElementById("currentPass");
                var pass1=document.getElementById("newPass1");
                var pass2=document.getElementById("newPass2");
                var errorTD=document.getElementById("errorTD");
                pass.value="";
                pass1.value="";
                pass2.value="";
                errorTD.innerHTML="";
            }

            function enableNewPass(){
                var pass=document.getElementById("currentPass");
                var pass1=document.getElementById("newPass1");
                var pass2=document.getElementById("newPass2");
                if(pass.value!=""){
                    pass1.disabled=false;
                    pass2.disabled=false;
                    pass1.focus();
                }
            }

            function comparePass(){
                var pass=document.getElementById("currentPass");
                var pass1=document.getElementById("newPass1");
                var pass2=document.getElementById("newPass2");
                var btn=document.getElementById("btnPasswd");
                var errorTD=document.getElementById("errorTD");
                if(pass1.value!=pass2.value){
                    if((pass1.value!="" && pass2.value!=""))
                    {
                        errorTD.innerHTML='<font color="red">Password did not matched.</font>';
                    }
                    btn.disabled=true;
                }else{
                    errorTD.innerHTML='<font color="green">Password matched.</font>';
                    if(pass.value!=""){
                        btn.disabled=false;
                    }
                }
            }
        </script>
    </head>
    <body>
        <div id="bodyPanel">
            <div id="adminHeader">
                <div id="adminHeaderTitle">
                    <?php include 'PhpIncludeFiles/headerImage.php';?>
                </div>
                <div id="adminHeaderLocation">Dashboard Home</div>
            </div>
            <div id="adminMiddle">
                <?php include 'PhpIncludeFiles/faculty_horizontal_menue.php'; ?>
                <div style="color: olive;font-size: 20px; text-align: center;width: 100%">****Welcome, <?php echo $_SESSION['faculty_name']?>****</div>
                <div  style="padding-top: 150px;text-align: center;font-size: 25px;color: #990000">
                    <form name="login" action="change_pass.php" method="POST">
                        <span style="text-align: center;font-size: 25px;color: green">Change your password</span>
                        <span style="color: #990000;font-size: 18px;font-style: italic">
                            <br/>**Password can only contain alphabets and numbers. Length must be between 6 to 12.**
                        </span>
                        <table align="center">
                            <tr>
                                <td align="right"><div style="font-size: 18px;color: blue;text-align: right">Current Password: </div></td>
                                <td>
                                    <input type="password" name="currentPass" id="currentPass" value="" size="30" onclick="clearAll()" onblur="enableNewPass()"/>
                                </td>
                            </tr>
                            <tr>
                                <td align="right"><div style="font-size: 18px;color: blue;text-align: right">New Password: </div></td>
                                <td>
                                    <input type="password" name="newPass1" id="newPass1" value="" size="30" onclick="enableNewPass()"/>
                                </td>

                            </tr>
                            <tr>
                                <td align="right"><div style="font-size: 18px;color: blue;text-align: right">Confirm Password: </div></td>
                                <td>
                                    <input type="password" name="newPass2" id="newPass2" value="" size="30" onblur="comparePass()"/>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" align="right">
                                    <input type="submit" value="Submit" id="btnPasswd" name="btnSubmit" disabled="true" />
                                </td>
                            </tr>
                            <tr>
                                <td id="errorTD" colspan="2" align="right" style="font-style: italic;color: red">
                                    <?php echo $error;?>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>

            </div>
            <div id="adminFooter">
                <?php include 'PhpIncludeFiles/AdminFooter.php'; ?>
            </div>
        </div>
    </body>
</html>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?php include 'config/config.php'; ?>
        <link rel="stylesheet" href="<?php echo constant("HOST11") . '/web/css/UserStyleSheet.css' ?>" type="text/css" />
        <title>Online Thesis Manager</title>
        <?php
       
        $pageStatus = "NEW";
		$msg="";
        if (isset($_POST['txtUserNm'])) {
			$check = $_POST['setcookie'];
            $user_nm = $_POST['txtUserNm'];
            $pass = $_POST['txtPass'];
            if ((!preg_match(getUserNamePattern(), $user_nm)) || (!preg_match(getPasswordPattern(), $pass))) {
                $pageStatus = "INVALID";
            } else {
                $pageStatus = "REQUESTED";
            }
            $pass = sha1($pass);
        }

        
        if(isset($_POST['user_type']))
            $user_type=$_POST['user_type'];
//        if (isset($_GET['pageStatus'])) {
//            if ($_GET['pageStatus'] == "001") {
//                $pageStatus = "INVALID";
//            }
//        }
        
        session_start();
        
       // print_r($_SESSION);
        //echo $_SESSION['faculty_user_nm'];
        
        if(isset($_SESSION['user_nm'])||isset($_SESSION['admin_user_nm'])||isset($_SESSION['faculty_user_nm'])){
            $pageStatus = "LOGGEDIN";
        }
        else{
			if(isset($_COOKIE['rem_usertype'])) 
        {
            $user_type = $_COOKIE['rem_usertype'];
            $result = "NOTFOUND";
            if($user_type=="std")
            {
                $result = "FOUND";
                session_start();
                        $_SESSION['user_nm'] = $_COOKIE['rem_user_nm'];
                        $_SESSION['name'] = $_COOKIE['rem_name'];
                        $_SESSION['roll_number'] = $_COOKIE['rem_roll_number'];
                        $_SESSION['class'] = $_COOKIE['rem_class'];
                        $_SESSION['pass_changed'] = $_COOKIE['rem_pass_changed'];
                        $_SESSION['permission'] = $_COOKIE['rem_permission'];
                        $_SESSION['advisor_name'] = $_COOKIE['rem_advisor_name'];
            }else if($user_type=="fac")
            {
                $result = "FOUND";
                session_start();
                        $_SESSION['faculty_user_nm'] = $_COOKIE['rem_faculty_user_nm'];
                        $_SESSION['faculty_name'] = $_COOKIE['rem_faculty_name'];
            }else if($user_type=="adm")
            {
                $result = "FOUND";
                session_start();
                        $_SESSION['admin_user_nm'] = $_COOKIE['rem_admin_user_nm'];
                        $_SESSION['admin_name'] = $_COOKIE['rem_admin_name'];
                        $_SESSION['role'] = $_COOKIE['rem_role'];
            }
            else {
                    $result == "NOTFOUND";
                }
                
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
		}
        if($pageStatus == "LOGGEDIN"){
            if (isset($_SESSION['user_nm'])) {
                header("Location: " . constant("HOST11") . "/index.php");
            }else if (isset($_SESSION['faculty_user_nm'])) {
                header("Location: " . constant("HOST11") . "/faculty/index.php");
            }else if (isset($_SESSION['admin_user_nm'])) {
                header("Location: " . constant("HOST11") . "/Backend/index.php");
            }
        } else if ($pageStatus == "REQUESTED") {
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
                        $_SESSION['user_nm'] = $user_nm;
                        $_SESSION['name'] = $row['name'];
                        $_SESSION['roll_number'] = $row['roll_number'];
                        $_SESSION['class'] = $row['class'];
                        $_SESSION['pass_changed'] = $row['pass_changed'];
                        $_SESSION['permission'] = $row['permission'];
                        $_SESSION['advisor_name'] = $row['advisor_name'];
						
						if($check) {
                            setcookie("rem_usertype", 'std', time() + 3600, '/');
                            setcookie("rem_user_nm", $user_nm, time() + 3600, '/');
                            setcookie("rem_name", $row['name'], time() + 3600, '/');
                            setcookie("rem_roll_number", $row['roll_number'], time() + 3600, '/');
                            setcookie("rem_class", $row['class'], time() + 3600, '/');
                            setcookie("rem_pass_changed", $row['pass_changed'], time() + 3600, '/');
                            setcookie("rem_permission", $row['permission'], time() + 3600, '/');
                            setcookie("rem_advisor_name", $row['advisor_name'], time() + 3600, '/');
                        }
                    }
                }else if($user_type=="fac") {
                    $sql = "SELECT advisor_name FROM advisor WHERE advisor_id='" . $user_nm . "' and pass='" . $pass . "'";
                    $rs = mysql_query($sql);
                    while ($row = mysql_fetch_assoc($rs)) {
                        $result = "FOUND";
                        $_SESSION['faculty_user_nm'] = $user_nm;
                        $_SESSION['faculty_name'] = $row['advisor_name'];
						
						if($check) {
                            setcookie("rem_usertype", 'fac', time() + 3600, '/');
                            setcookie("rem_faculty_user_nm", $user_nm, time() + 3600, '/');
                            setcookie("rem_faculty_name", $row['advisor_name'], time() + 3600, '/');
                            
                        }
                    }
                }else if($user_type=="adm") {
                    $sql = "SELECT name,role FROM users WHERE user_nm='" . $user_nm . "' and password='" . $pass . "'";
                    $rs = mysql_query($sql);
                    while ($row = mysql_fetch_assoc($rs)) {
                        $result = "FOUND";
                        $_SESSION['admin_user_nm'] = $user_nm;
                        $_SESSION['admin_name'] = $row['name'];
                        $_SESSION['role'] = $row['role'];
						
						if($check) {
                            setcookie("rem_usertype", 'adm', time() + 3600, '/');
                            setcookie("rem_admin_user_nm", $user_nm, time() + 3600, '/');
                            setcookie("rem_admin_name", $row['name'], time() + 3600, '/');
                            setcookie("rem_role", $row['role'], time() + 3600, '/');
                        }
                    }
                }else {
                    $result == "NOTFOUND";
                }
            }
            mysql_close($con);
			if(empty($_SESSION['6_letters_code'] ) ||
				strcasecmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0)
			{  
				$msg="The Validation code does not match!";
			}else{
				// Captcha verification is Correct. Final Code Execute here!
				$msg="correct";
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
      <td style="width: 40%"><div style="color: #006600;text-align: right"> Validation code:</div></td>
      <td style="width: 60%"><div style="text-align: left"><img src="captcha_code_file.php?rand=<?php echo rand();?>" id='captchaimg'>"/><br>
        <label for='message'>Enter the code above here :</label>
        <br>
        <input id="6_letters_code" name="6_letters_code" type="text" style="width: 180px">
        <br>
        Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh
        </p></div></td>
    </tr>
	
	
	
                            <tr>
							<td><input type="checkbox" name="setcookie" value="setcookie" /> Remember Me</td> 
                                <td colspan="2" style="width: 100%"><div style="color: black;text-align: right;padding-right: 50px"><input type="submit" value="Log In" name="buttonSubmit" /></div></td>
                            </tr>
                            <tr>
                                <td colspan="2" style="width: 100%">
                                    <div style="color: #990000;text-align: center">
                                        <?php
										if($msg=="correct"){
											if ($pageStatus == "INVALID") {
												echo "Login failed. Enter valid credentials and choose proper user type.";
											}
										}
										else{
											if ($pageStatus == "INVALID") {
												echo "Login failed. Enter valid credentials and choose proper user type.";
											}
											else echo $msg;
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
<script type='text/javascript'>
function refreshCaptcha()
{
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script> 
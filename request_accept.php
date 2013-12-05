<!DOCTYPE html>

<?php
session_start();


function aarsort (&$array, $key) {
    $sorter=array();
    $ret=array();
    reset($array);
    foreach ($array as $ii => $va) {
        $sorter[$ii]=$va[$key];
    }
    arsort($sorter);
    foreach ($sorter as $ii => $va) {
        $ret[$ii]=$array[$ii];
    }
    $array=$ret;
}

function getMessageStatus() {
    date_default_timezone_set("Asia/Calcutta");

    $ret = "";
    if (!($con = mysql_connect(constant("HOSTNAME"), constant("USERNAME"), constant("PASS")))) {
        $ret = "DBCONNECTION_ERROR";
    } else if (!($select = mysql_select_db(constant("DBNAME"), $con))) {
        $ret = "DBCONNECTION_ERROR";
    } else {
        
        
        $sql = "SELECT * from chat where to_id = '" . $_SESSION['user_nm'] . "' or from_id = '" . $_SESSION['user_nm'] . "'";
        $result = mysql_query($sql);
        $inerhtml = "<hr/>";
        
        if(mysql_num_rows($result) == 0){
            $ret = "DONE";
        } else {
            $allMessages = array();
            $i=0;

            while($temp = mysql_fetch_assoc($result)){
             
                $allMessages[$i]['maintime'] = strtotime($temp['time']);
                $allMessages[$i]['time'] = (date("d/m/y g:i:sa" ,$allMessages[$i]['maintime']));
                $allMessages[$i]['to'] = $temp['to_id'];
                $allMessages[$i]['from'] = $temp['from_id'];
                $allMessages[$i]['message'] = $temp['message'];
                
                if($allMessages[$i]['to'] == $_SESSION['user_nm']){
                    $allMessages[$i]['unread'] = $temp['unread'];
                
                    $sql2 = "update chat set unread=0 where message= '" . $temp['message'] . "' and time='" . date("Y-m-d H:i:s",$allMessages[$i]['maintime']) . "'";
                    $result2 = mysql_query($sql2);
                }
                else
                    $allMessages[$i]['unread'] = 0;
                
                $i++;
            }

            aarsort($allMessages, "maintime");
            
            foreach ($allMessages as $value) {
                if($value['unread'])
                    $inerhtml = $inerhtml . "<span style='color:red'> NEW!! </span><br/>";
                
                 $inerhtml = $inerhtml . "<b>Time : </b>" . $value['time'] . "<br/>" . "<b>From : </b>" . $value['from'] . "<br/>" . "<b>To : </b>" . $value['to'] . "<br/>" . "<b>Message : </b>" . $value['message'] . "<hr/><br/>";
            }

            $ret = "DONE";
        }
    }
    
    $_SESSION['messageStatus'] = $inerhtml;
    
    mysql_close($con);
    return $ret;
}
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?php include 'config/config.php'; ?>
        <?php include 'Macros/DatabaseFunctions.php'; ?>
        <?php include 'Macros/CommonFunctions.php'; ?>
        <?php
        if (!isset($_SESSION['user_nm'])) {
            header("Location: " . constant("HOST11") . "/login.php");
        }

        $pageResult = "NONE";
        if ($_SESSION['pass_changed'] == "NO") {
            $pageResult = "PASS_NOT_CHANGED";
        } else if ($_SESSION['permission'] == "NO") {
            $pageResult = "NO_PERMISSION";
        } else {
            $result = getLastDate($_SESSION['class']);
            if ($result == "DONE") {
                $pageResult = "DONE";
            } else {
                $pageResult = "DATABASE_ERROR";
            }
            //$pageResult = "DONE";
        }
        
        $check = getMessageStatus();
                   
        ?>
        <link rel="stylesheet" href="<?php echo constant("HOST11") . '/web/css/UserStyleSheet.css' ?>" type="text/css" />
        <title>Online Thesis Manager</title>
    </head>
    <body>
        <div id="bodyPanel">
            <div id="adminHeader">
                <div id="adminHeaderTitle">
                    <?php include 'Macros/headerImage.php'; ?>
                </div>
                <div id="adminHeaderLocation">Department of CSE, IIT Guwahati</div>
            </div>
            <div id="adminVMenu">
                <?php include 'Macros/VerticalMenuItems.php'; ?>
            </div>
            <div id="adminMiddle">
                <?php
                if ($pageResult == "PASS_NOT_CHANGED") {
                    echo '<div style="color: green;font-size: 28px; text-align: center;width: 100%">****Welcome, ' . strtoupper($_SESSION['name']) . '****</div>';
                    echo '<div style="padding-left: 50px; font-size: 20px; color: red"><br/><br/><br/><br/><br/><b>YOU HAVE TO CHANGE YOUR PASSWORD FIRST.</div>';
                } else if ($pageResult == "DATABASE_ERROR") {
                    echo '<b>SOME DATABASE ERROR OCCURED. Refresh the page. If you see this error multiple times then logout and re-login.';
                } else if(isset($_SESSION['randomMessageRequestTest'])) {
                    echo '<br><br><br><b>' . $_SESSION['randomMessageRequestTest'] . '</b>';
                    unset($_SESSION['randomMessageRequestTest']);
                }else {
                    ?>
                                    <div style="color: green;font-size: 28px; text-align: center;width: 100%">****Welcome, <?php echo strtoupper($_SESSION['name']) ?>****</div>

                <?php
                    if($check == "DONE") {
                        ?>
							<div style="text-align: center;">
								<form enctype="multipart/form-data" name="messageRequset" method="POST" action="FormProcessor/ProcessMessageRequest.php">

									<table style="width: 100%" border="0">
										<tr><td colspan="2" style="height: 15px"></td></tr>
										<tr>
											<td style="width: 20%"><div style="text-align: left;color: blue;font-weight: bold">Message (within 300 characters): </div></td>
											<td style="width: 80%">
												<div style="text-align: left">
													<textarea name="message" rows="3" cols="50"></textarea>
												</div>
											</td>
										</tr>
										<tr><td colspan="2" style="height: 15px"></td></tr>
										<tr><td colspan="2" style="height: 15px"></td></tr>
										<tr>
											<td style="width: 80%" colspan="2">
												<div style="text-align: right;padding-right: 150px">
													<input type="submit" value="Send" name="buttonSubmit" />
												</div>
											</td>
										</tr>
									</table>
								</form>
								
								<table style="width: 100%" border="0">
									<tr><td colspan="2" style="height: 15px"></td></tr>
									<tr>
										<td style="width: 20%"><div style="text-align: left;color: blue;font-weight: bold">History: </div></td>
										<td style="width: 80%">
											<div style="text-align: left">
												<?php 
												echo $_SESSION['messageStatus'];
												unset($_SESSION['messageStatus']);
												?>
											</div>
										</td>
									</tr>
								</table>
							</div>
                    <?php
                    unset($_SESSION['messageStatus']);
                    unset($_SESSION['last_date']);
                    }
                }
                ?>
            </div>
            <div id="adminFooter">
                <?php include 'Macros/AdminFooter.php'; ?>
            </div>
        </div>
    </body>
</html>

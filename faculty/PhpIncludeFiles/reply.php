<!DOCTYPE html>

<?php
session_start();
if (isset($_GET['user_nm'])) $studentId = $_GET['user_nm']; else $studentId = "";

$_SESSION['studentIdMsg'] = $studentId;

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

function getMessageStatus($id) {
    $ret = "";
    if (!($con = mysql_connect(constant("HOSTNAME"), constant("USERNAME"), constant("PASS")))) {
        $ret = "DBCONNECTION_ERROR";
    } else if (!($select = mysql_select_db(constant("DBNAME"), $con))) {
        $ret = "DBCONNECTION_ERROR";
    } else {
        $sql1 = 'select * from student where user_nm = "' . $id . '"';
        $result = mysql_query($sql1);
        $result = mysql_fetch_assoc($result);
        $_SESSION['student_name'] = $result['name'];
        
        $sql = "SELECT * from chat where to_id = '" . $_SESSION['faculty_user_nm'] . "' and from_id = '" . $_SESSION['studentIdMsg'] . "' or from_id = '" . $_SESSION['faculty_user_nm'] . "' and to_id = '" . $_SESSION['studentIdMsg'] . "'";
		 
        $result = mysql_query($sql);
        $inerhtml = "";
        
        if(mysql_num_rows($result) == 0){
            $ret = "DONE";
        } else {
            $ret = "DONE";
            $i=0;
            while($temp = mysql_fetch_assoc($result)){
                $allMessages[$i]['maintime'] = strtotime($temp['time']);
                $allMessages[$i]['time'] = (date("d/m/y g:i:sa" ,$allMessages[$i]['maintime']));
                $allMessages[$i]['to'] = $temp['to_id'];
                $allMessages[$i]['from'] = $temp['from_id'];
                $allMessages[$i]['message'] = $temp['message'];
                
                if($allMessages[$i]['to'] == $_SESSION['faculty_user_nm'])
                {
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
                
                $inerhtml = $inerhtml . "<b>Time : </b>" . $value['time'] . "<br/>" . "<b>From : </b>" . $value['from'] . "<br/>" . "<b>To : </b>" . $value['to'] . "<br/>" . "<b>Message : </b>" . $value['message'] . "<hr/><br/>";            }   
        }
    }
    
    $_SESSION['messageStatus'] = $inerhtml;
    $_SESSION['studentReplyId'] = $id;
    
    
    mysql_close($con);
    return $ret;
}
    
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?php include '../../config/config.php'; ?>
        <?php
        if (!isset($_SESSION['faculty_user_nm'])) {
            header("Location: ".constant("HOST11")."/faculty/login.php");
        }
        ?>
        <link rel="stylesheet" href="<?php echo constant("HOST11") . '/web/css/faculty_stylesheet.css' ?>" type="text/css" />
        <script type="text/javascript" src="<?php echo constant("HOST11") . '/web/scripts/facultyScripts.js' ?>"></script>
        <title>Thesis Manager (Faculty Section)</title>
    </head>
    <body>
        <div id="bodyPanel">
            <div id="adminHeader">
                <div id="adminHeaderTitle">
                    <?php include '/headerImage.php';?>
                </div>
                <div id="adminHeaderLocation">Dashboard Home</div>
            </div>
            <div id="adminMiddle">
                <?php include '/faculty_horizontal_menue.php'; ?>
                <div style="color: olive;font-size: 20px; text-align: center;width: 100%">****Welcome, <?php echo $_SESSION['faculty_name'] ?>****</div>
                
                <?php 
                   $result= getMessageStatus($studentId);
                   if(isset($_SESSION['randomMessageRequestTest'])){
                        echo '<br><br><br><b>' . $_SESSION['randomMessageRequestTest'] . '</b>';
                        unset($_SESSION['randomMessageRequestTest']);
                   } else if($result=="DONE"){
          
                       ?>
                       
                                <?php
                       ?>
                       <div style="text-align: center;">
                        
                           <form enctype="multipart/form-data" name="messageRequset" method="POST" action="<?php echo constant("HOST11") ?>/faculty/PhpIncludeFiles/ProcessReplyRequest.php">

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
                                     </div></td>
                             </tr>
                       </table>
                    </div>
                <?php
                       unset ($_SESSION["messageStatus"]);
                   }else if($result=="DBCONNECTION_ERROR"){
                       echo '<div id="ListOddRow" style="text-align: center; color: #990033">Database connection error.</div>';
                   }else if($result=="NOT_FOUND"){
                       echo '<div id="ListOddRow" style="text-align: center; color: #990033">No new Notifications.</div>';
                   }else{
                       echo '<div id="ListOddRow" style="text-align: center; color: #990033">Some unknown error occured. Please refresh the page.</div>';
                   }
                ?>
            </div>
            <div id="adminFooter">
                <?php include 'PhpIncludeFiles/AdminFooter.php'; ?>
            </div>
        </div>
    </body>
</html>

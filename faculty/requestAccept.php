<!DOCTYPE html>

<?php
session_start();
function getNotification() {
    $ret="";
    if (!($con = mysql_connect(constant("HOSTNAME"), constant("USERNAME"), constant("PASS")))) {
        $ret = "DBCONNECTION_ERROR";
    } else if (!($select = mysql_select_db(constant("DBNAME"), $con))) {
        $ret = "DBCONNECTION_ERROR";
    } else {
        $inerhtml = "";
        $counter = 0;
        
        $sql = "select * from student where advisor_id = '" . $_SESSION['faculty_user_nm'] . "'";
        $resp = mysql_query($sql);
        $ret = "NOT_FOUND";
        
        //echo $sql;
        //echo mysql_num_rows($resp);
        
        while ($row = mysql_fetch_assoc($resp)) {           
            $ret = "DONE";
            $counter++;
            $sql1 = "select * from student where user_nm = '" . $row['user_nm'] . "'";
            $resp1 = mysql_query($sql1);
            $row1 = mysql_fetch_assoc($resp1);
            
            $sql2 = "select * from chat where to_id='" . $row['user_nm'] . "' or from_id='" . $row['user_nm'] . "'";
            $resp2 = mysql_query($sql2);
            
            $message = "**No messages**";
            $sendReply = "Send";
            
            $unread = 0;
            
            if(mysql_num_rows($resp2) > 0){
                $max = 0;
                $from = "";
                
                while($row2 = mysql_fetch_assoc($resp2)){
                    if($row2['to_id'] == $_SESSION['faculty_user_nm'])
                        $unread = $unread + $row2['unread'];
                }
            }

            if ($counter % 2 == 0) {
                $inerhtml = $inerhtml . '<div id="ListEvenRow">';
            } else {
                $inerhtml = $inerhtml . '<div id="ListOddRow">';
            }
            $inerhtml = $inerhtml . '<div id="messageSrlNoValue">' . $counter . '</div>';
            $inerhtml = $inerhtml . '<div id="messageRollNoValue">'.$row1['roll_number'].'</div>';
            $inerhtml = $inerhtml . '<div id="messageNameValue">' . $row1["name"] . '</div>';
            //echo 1;
            $inerhtml = $inerhtml . '<div id="messageTextValue">' . $unread . '</div>';
            $inerhtml = $inerhtml . '<div id="messageReplyValue"><a href="'.constant("HOST11").'/faculty/PhpIncludeFiles/reply.php?user_nm='.$row['user_nm'].'">Inbox</a></div>';
            
            $inerhtml = $inerhtml . '</div>';
            
            $_SESSION['messageStatus'] = $inerhtml;
        }
        
    }
    mysql_close($con);
    return $ret;
}    
    
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?php include '../config/config.php'; ?>
        <?php include 'PhpIncludeFiles/database/database_functions.php'?>
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
                    <?php include 'PhpIncludeFiles/headerImage.php';?>
                </div>
                <div id="adminHeaderLocation">Dashboard Home</div>
            </div>
            <div id="adminMiddle">
                <?php include 'PhpIncludeFiles/faculty_horizontal_menue.php'; ?>
                <div style="color: olive;font-size: 20px; text-align: center;width: 100%">****Welcome, <?php echo $_SESSION['faculty_name'] ?>****</div>
                <div id="messagePanel">
                    <div id="messagePanelTitle">Notifications</div>
                    <div id="messageListHeader">
                        <div id="messageSrlNo">S No.</div>
                        <div id="messageRollNo">Roll Number</div>
                        <div id="messageName">Name</div>
                        <div id="messageText">Unread</div>
                        <div id="messageReply">View Inbox</div>
                    </div>
                </div>
                
                <?php 
                   $result=  getNotification();
                   if($result=="DONE"){
                       echo $_SESSION["messageStatus"];
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

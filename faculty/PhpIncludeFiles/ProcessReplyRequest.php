<?php
    
include '../../config/config.php';
session_start();

if(isset($_SESSION['faculty_user_nm'])){
    $message = mysql_escape_string($_POST['message']);
    
    $ret = "";
    
    if (!($con = mysql_connect(constant("HOSTNAME"), constant("USERNAME"), constant("PASS")))) {
        $ret = "Database Error Try Again";
    } else if (!($select = mysql_select_db(constant("DBNAME"), $con))) {
        $ret = "Database Error Try Again";
    } else {
        
        date_default_timezone_set("Asia/Calcutta");

        $sql = "INSERT into chat(time,to_id,from_id,message) values('" . date("Y-m-d H:i:s",time()) . "','" . $_SESSION['studentReplyId'] . "','" . $_SESSION['faculty_user_nm'] ."','" . $message . "')" ;
        //$_SESSION['randomMessageRequestTest'] = $sql;
        $result = mysql_query($sql);
        
        $inerhtml = "";        
        if($result){
            header("Location: " . constant("HOST11") . "/request_accept.php");
        } else {
            $_SESSION['randomMessageRequestTest'] = mysql_error();
            //$_SESSION['randomMessageRequestTest'] = "Unable to send Message. Try Again";
        }
    }
    
    header("Location: " . constant("HOST11") . "/faculty/PhpIncludeFiles/reply.php?user_nm=".$_SESSION['studentReplyId']);

    mysql_close($con);    
} else {
    header("Location: " . constant("HOST11") . "../login.php");
}

?>
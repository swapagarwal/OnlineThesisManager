<?php
    

include '../config/config.php';
session_start();

if(isset($_SESSION['user_nm'])){
    $message = mysql_escape_string($_POST['message']);
    
    $ret = "";
        
    if (!($con = mysql_connect(constant("HOSTNAME"), constant("USERNAME"), constant("PASS")))) {
        $ret = "Database Error Try Again";
    } else if (!($select = mysql_select_db(constant("DBNAME"), $con))) {
        $ret = "Database Error Try Again";
    } else {
        date_default_timezone_set("Asia/Calcutta");

        $sql1 = "select advisor_id from advisor where advisor_name = '" . $_SESSION['advisor_name'] . "'";
        $resp = mysql_query($sql1);
        $adv2 = mysql_fetch_assoc($resp);
        $adv = $adv2['advisor_id'];
        $sql = "INSERT into chat(time,to_id,from_id,message) values('" . date("Y-m-d H:i:s",time()) . "','" . $adv . "','" . $_SESSION['user_nm'] ."','" . $message . "')" ;
        //$_SESSION['randomMessageRequestTest'] = $sql;
        $result = mysql_query($sql);
        
        $inerhtml = "";        
        if($resp){
            header("Location: " . constant("HOST11") . "/request_accept.php");
        } else {
            $_SESSION['randomMessageRequestTest'] = "Unable to send Message. Try Again";
        }
    }
    
    header("Location: " . constant("HOST11") . "/request_accept.php");

    mysql_close($con);    
} else {
    header("Location: " . constant("HOST11") . "/login.php");
}

?>
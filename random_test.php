<?php

$con = mysqli_connect("127.0.0.1", 'root', 'easy');
mysqli_select_db($con, 'project');

$sql = "update users set password='" . sha1('test123') . "' where user_nm='shirshendu'";
$resp = mysqli_query($con, $sql);
if($resp)    echo 'Yeah!!<br>';
else echo mysqli_error();

/*
$sql = "select * from advisor";
//select * from users
//select * from student


$resp = mysqli_query($con, $sql);

while($array = mysqli_fetch_assoc($resp)) {
    //make advisor -> pass 100
    $sql = "UPDATE advisor SET pass='" . sha1($array['pass']) . "' WHERE pass = '" . $array['pass'] . "'";
    //$sql = "UPDATE users SET password='" . sha1($array['password']) . "' WHERE password = '" . $array['password'] . "'";
    //$sql = "UPDATE student SET password='" . sha1($array['password']) . "' WHERE password = '" . $array['password'] . "'";
    
    $result = mysqli_query($con, $sql);
    
    if($result) echo "Done!!\n";

    
    }
}*/

?>
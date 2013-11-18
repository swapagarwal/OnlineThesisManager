<?php

$con = mysqli_connect("127.0.0.1", 'root', '');
mysqli_select_db($con, 'project');

$sql = "select * from advisor";

$resp = mysqli_query($con, $sql);

while($array = mysqli_fetch_assoc($resp)) {
    $sql = "UPDATE advisor
    SET pass='" . sha1($array['pass']) . "' WHERE pass = '" . $array['pass'] . "'";
    
    //if($array['advisor_id'] == 'anand.ashish')
    $result = mysqli_query($con, $sql);
    if($result) echo "Done!!\n";
}

?>
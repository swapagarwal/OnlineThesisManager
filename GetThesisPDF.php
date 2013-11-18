<?php

include 'config/config.php';

/*print_r($_GET);
echo preg_match(getThesisFileNamePattern(), $_GET['fn']);*/

if (isset($_GET['fn'])
        && preg_match(getThesisFileNamePattern(), $_GET['fn'])
        && ($_GET['cls'] == "BT" || $_GET['cls'] == "MT")) {

    $path = './Upload/' . $_GET['cls'] . '/' . $_GET['fn']; // the file made available for download via this PHP file
    if (file_exists($path)) {
        $mm_type = "application/pdf"; // modify accordingly to the file type of $path, but in most cases no need to do so
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Type: " . $mm_type);
        header("Content-Length: " . (string) (filesize($path)));
        header('Content-Disposition: attachment; filename="' . basename($path) . '"');
        header("Content-Transfer-Encoding: binary\n");
        readfile($path); // outputs the content of the file
        exit();
    }else{
        echo "<b>FILE NOT FOUND...</b>";
    }
}
?>
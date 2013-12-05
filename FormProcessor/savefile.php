<?php
session_start();
include '../config/config.php';

$file = $_POST['filename'];
$folder = $_POST['foldername'];
$data = $_POST['data'];

$path = "../Upload/" . $_SESSION['class'] . "/Report/" . $folder . "/" . $file;

file_put_contents($path, $data);

echo $path;

?>
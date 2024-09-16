<?php

$file = $_GET['file'];
$fp = 'E://' .$file;

if(file_exists ($fp)){
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . basename($fp) . '"');
    readfile($fp);
    exit();

}

else{
    echo "File not found";
}
?>
<?php

//copy file mydemo.txt to new.txt

$src = "mydemo.txt";

if (!file_exists($src)){
    echo "Source does not exist";
}
else{
    $dest = "new.txt";
    if(copy($src, $dest)){
        echo "File copied successfully";
    }
    else{
        echo "Error copying file";
    }

}

?>
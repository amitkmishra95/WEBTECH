<?php

if (isset($_POST['submit'])){
    $target = 'E://';
    $path = $target . basename($_FILES['fileupload']['name']);

    if (move_uploaded_file($_FILES['fileupload']['tmp_name'] , $path)){
        echo "File uploaded successfully";
    }
    else{
        echo "Failed to upload file";
    }
}

?>
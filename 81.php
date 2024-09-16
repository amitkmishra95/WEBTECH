<?php

$file = "mydemo.txt";

if (file_exists($file)){
    // $content = file_get_contents($file);
    // $content = str_replace("\n", "<br>", $content);
    // echo $content;

    $content = fopen($file,"r");
    if($content == true){
        echo"File opened successfully";
    }
    else{
        echo"File not opened";
        exit();
    }

    $filesize = filesize($file);
    echo "File size: $filesize bytes<br>";
    $text = fread($content , $filesize);
    $text = str_replace("\n" , "<br>" , $text);
   // $fclose($file);
    echo($text);
    fclose($content);

    //delete file 
// fclose($myfile);
if (unlink($file)){
    echo " file deleted sucessfully <br>";
    }else{
        echo " unable to delete file <br>";
        }

}

?>
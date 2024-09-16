<?php

//echo "Directory Creation<br>";
//echo"<br>";
$dir = "E://niet";

if (!is_dir($dir)){
    mkdir($dir);
    echo "Directory created successfully";
}
else{
    echo "Directory already exist";
    echo"<br>";
}



?>

<?php
//make subdirectory
$subdir = "$dir/cse_v";

if (!is_dir($subdir)){
    mkdir($subdir,0777,true);
    echo "Directory created successfully";
    echo"<br>";
}
else{
    echo "Directory already exist";
    echo"<br>";
}

?>

<?php
//list directoy content
$content = scandir($dir);
foreach($content as $item){
    if ($item != '.' && $item  != '..'){
        echo $item . "<br>";
    }
}

?>

<?php
//delete directory
$subdir = "E://niet//cse_v";

if (is_dir($subdir)){
   if( rmdir($subdir)){
    echo "Directory removed successfully";
   }
}
else{
    echo "Directory does not exist";
    echo"<br>";
}

?>
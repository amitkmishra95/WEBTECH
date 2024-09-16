<?php

//crreating a file 

$myfile = fopen("mydemo.txt","w") or die ("Unable to create file");
//writing to the file

$text = "Good Morning to All ! Welcome to PHP...\n";
fwrite($myfile, $text);

echo("Text written to the file <br>");

$text2 = "PHP is a simple and loosely typed language used for server side programming..\n";

fwrite($myfile,$text2);

echo ("Second text written<br>");

$text3 = "PHP (Hypertext Preprocessor) is a widely-used, open-source scripting language that is especially suited for web development and can be embedded into HTML. It is a server-side language, meaning that the code is executed on the server, and the result is sent to the client as plain HTML. PHP is known for its simplicity, speed, and flexibility, making it a popular choice for creating dynamic and interactive web pages. It supports a wide range of databases, including MySQL, PostgreSQL, and SQLite, which allows for robust data management in web applications. Additionally, PHP has a large community and extensive documentation, which helps developers solve problems quickly and efficiently. Its ability to integrate seamlessly with various web technologies and frameworks, such as Laravel and Symfony, further enhances its capabilities, making it an essential tool for both beginner and advanced developers in the field of web development.\n";
fwrite($myfile,$text3);
fclose($myfile);


?>

<?php
$x = 'Welcome , This is my first program in php';
echo $x,'<br>';
print ($x . "<br>");
 echo "<h1> ${x} </h1>";
 echo (var_dump($x).'<br>');

 $y = 100;
 echo ("Value of y = $y <br>");
 echo('Type of y : '.var_dump($y)."<br>");

 echo "**********CONSTANTS**********";
 echo "<br>";
 const msg = 'hello , good morning';
 echo("message using const keyword ".msg."<br>");


 echo"<br>";

 define('msg2' , "Message using define keyword");
echo("message using define keyword : ".msg2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php File</title>
    <style>
        body {
            background-color: aquamarine;
        }
        h1{
            text-align: center;
            color:red;
        }
    </style>
</head>
<body>
    
</body>
</html>
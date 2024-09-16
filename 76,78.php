<?php

function fun1(){
    echo("Inside non parameterized function.<br>");
}
fun1();

function fun2($x,$y){
    echo("Inside  parameterized function.");
    return ($x + $y);
}
echo(fun2(5,6)."<br>");

function myfunc($num)
{
    switch(gettype($num)){
        case 'string':
            return "Type of given variable is a string";

            case 'integer':
                return "Type of given variable is a integer";
                break;

            case 'boolean':
                return "Type of given variable is boolean";
                break;
    }
}
$num = 7;
echo(myfunc($num));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Call by value</h1>
    <?php
    
    function fun4($x) {
        $x = $x + 10;
    echo "In function value of x = ",$x , "<br>";
    }
    $x=5;
    echo "Before function calling value of x = ${x}<br>";
    fun4($x);
    echo "After function calling value of x = ",$x;

    
    ?>

<h1>Call by Reference</h1>
    <?php
    
    function fun5(&$x) {
        $x = $x + 10;
    echo "In function value of x = ",$x , "<br>";
    }
    $x=7;
    echo "Before function calling value of x = ${x}<br>";
    fun5($x);
    echo "After function calling value of x = ",$x;

    
    ?>

<h1>Swapping using Call by value </h1>
    <?php
    
    function fun6($x , $y) {
        $z = $x;
        $x = $y;
        $y = $z;
    echo "In function value of x = ",$x , " and value of y = " , $y,"<br>";
    }
    $x=5;
    $y = 10;
    echo "Before function calling value of x = ${x} , and value of y = ${y}<br>";
    fun6($x,$y);
    echo "After function calling value of x = ",$x , " and value of y = ${y} <br>";

    
    ?>

<h1>Swapping using Call by Reference </h1>
    <?php
    
    function fun7(&$x , &$y) {
        $z = $x;
        $x = $y;
        $y = $z;
    echo "In function value of x = ",$x , " and value of y = " , $y,"<br>";
    }
    $x=5;
    $y = 10;
    echo "Before function calling value of x = ${x},  and value of y = ${y}<br>";
    fun7($x,$y);
    echo "After function calling value of x = ",$x , " and value of y = ${y} <br>";

    
    ?>
</body>
</html>
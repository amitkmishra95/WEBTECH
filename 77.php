<?php 

echo "if - Else";
echo "<br>";
echo "<br>";

//echo 'Enter your age';
$age = 20;

if($age < 18){
    echo "Your age is less than 18 year so you can't vote.";
}
else{
    
        echo "Your age is greater than 18 year so you can vote.";
}

echo "<br>";
echo "<br>";
echo "<br>";

//echo 'Enter day';
$day = 5;

switch($day){
    case 1:
        echo "Today is Monday";
        break;
        case 2:
            echo "Today is Tuesday";
            break;
        case 3:
           echo "Today is Wednesday";
           break;     
        case 4:
             echo "Today is Thursday";
             break;   
        case 5:
            echo "Today is Friday";
            break;            
        case 6:
            echo "Today is Saturday";
            break;
        case 7:

            echo "Today is Sunday";
}
echo "<br>";
echo "<br>";
$name = ["Amit Mishra" , "Shivam Verma" , "Faizan Saifi"];

echo "For Each Loop <br>";


foreach($name as $char){
    echo $char . "<br>";
}

echo "For loop <br>";

$arr = ['red' , 'green' , 'blue' , 'purple'];

for ($i =0 ; $i<count($arr); $i++){
    echo $arr[$i] . "<br>";
}
echo "<br>";
echo "<br>";
echo "For loop <br>";

//$arr = ['red' , 'green' , 'blue' , 'purple'];
$sum = 0;
for ($i = 1 ; $i<= 10; $i++){
    $sum += $i;
}
echo "sum of first ten natural number using for loop : $sum";

echo "<br>";
echo "<br>";

$sum2 = 0;
$i = 1;
while($i <= 10){
$sum2 += $i;
$i++;
}
echo "sum of first ten natural number using while loop : $sum2";


echo "<br>";
echo "<br>";
$sum3 = 0;
$i = 1;
do {
    $sum3 += $i;
    $i++;
}while($i <= 10);
echo "sum of first ten natural number using do while  loop : $sum3";

echo "<br>";
echo "<br>";
$sum = 0;
$numbers = range(1,10);
foreach ($numbers as $number){
    $sum += $number;
}

echo "sum of first ten natural number using for each loop : $sum";

?>
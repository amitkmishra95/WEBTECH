<?php

$salary = array("Aakash" => 50000,'Shivam'=>60000);

$name = array("Aman" , "Aakash" , "Shivam","Rohit");
echo implode(' ',$name);

echo"<br>";

$name[1] = 'Adarsh';

echo implode(' ',$salary);

echo "<br>";

$name[] = 'Yash';


echo implode(' ',$name);

echo "<br>";
unset($name[0]);
echo implode(' ',$name);

echo "<br>";
echo "<br>";


print_r($salary);

echo "<br>";
echo "<br>";

echo implode(' ',$salary);
echo "<br>";
echo "<br>";
echo"<br> foreach loop <br>";

foreach($salary as $name=>$amt){
    echo "Salary of $name is $amt<br>";
}
?>
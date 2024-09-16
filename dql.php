<?php

$conn = mysqli_connect("localhost" , "root" ,"");
$db = mysqli_select_db($conn,"webtech");

echo "<h1>Database connected Successfully...</h1>";

$query = "select * from login";
$result = mysqli_query($conn,$query);


if(mysqli_num_rows($result) > 0){
    echo "<Table border='3' border-color='red' border-width='50%' border-height='50%'>";
    echo "<tr>";
    echo "<th>Username</th>";
    echo "<th>Password</th>";
    echo "</tr>";

    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['password']."</td>";
        echo "</tr>";
    }

    echo "</table>";
}
else{
    echo "No data found";
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table  border="3" border-color="red" background-color="yellow">
        

</body>
</html>
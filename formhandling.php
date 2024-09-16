<!-- <?php

if (isset($_GET['submit'])){
    $number1 = $_GET['number1'];
    $number2 = $_GET['number2'];
    $result = $number1 + $number2;
    echo $result;
}

//isset($_GET['number1']) && isset($_GET['number2'])
?> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
       
<style>
     div{
            width:50%;
            height:50%;
            border:5px;
            border-radius:3px;
            background-color:blue;
            margin-left:30%;
            margin-top:15%;
            /* display: flex; */
            text-align: center;
        }

        .form1{
            margin-top: 0.3px;
            
        }
        .form2{
            margin-top:0px;
        }
</style>
</head>
<body>
    <div id="div" >
        <form id ='form' actION="form1.php" method='post'>
            <div class="form1">
            <label  for="name">Number1 :</label>
            <input type="number" id="name" name="number1" value="num1"><br>
            </div>
            <div class="form2">
            <label  for="name">Number2 :</label>
            <input type="number" id="name" name="number2" value="num2"><br>
            </div>
    
            <input type="submit" name= 'submit' value="Submit">
        </form>
    </div>
</body>
</html>
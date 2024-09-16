<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Name: <input type="text" name="uname"><br>
        Course: <input type="text" name="course"><br>

        <input type="submit" name="login">

    </form>
</body>
</html>

<?php

session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = ($_POST['uname']);
    $course = ($_POST['course']);

    $_SESSION['name'] = $name;
    $_SESSION['course'] = $course;

    echo '<br><br><h1>session variables are set <br><br><br><br>';
    echo 'Student name: ' . $_SESSION['name'] . '<br>';
    echo 'Student course: ' . $_SESSION['course'] . '<br>';
    echo "<a href='page02.php'>Click her for page - 02></a>";

}
?>
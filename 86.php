<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Name:<input type="text" name="uname"><br>
        Password:<input type="password" name="pwd"><br>
        <input type="submit" value="login">
    </form>
</body>
</html>



<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
 $uname=htmlspecialchars($_POST['uname']);
 $upswd= htmlspecialchars($_POST['pwd']);

setcookie("username", $uname, time() + 3600, "/");
setcookie("password", $upswd, time() + 3600, "/");

echo "Cookies have been set. <br>";
echo "<a href='page2.php'>Go to Page 2</a>";
}
?>

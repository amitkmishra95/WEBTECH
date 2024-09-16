<?php

setcookie("username", "", time() - 3600, "/");
setcookie("password", "", time() - 3600, "/");

echo "Cookies have been deleted.<br>";
echo "<a href='set_cookies.php'>Set Cookies Again</a>";

?>

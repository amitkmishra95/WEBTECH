<?php
session_start();
//destroy session;
session_unset();
session_destroy();
// session_abort();
echo "You are succesfully loged out..<br>";
echo "<a href='mysession.php'>Login In Again</a><br>";

?>
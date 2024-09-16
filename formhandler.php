<?php

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    echo "Hi $name , welcome ! <br> Your email address is $email" ; 
}

?>
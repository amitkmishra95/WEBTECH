<?php
session_start();
include('dql.php');

if (isset($_POST['login'])){
    $username = $_POST['name'];
    $password = $_POST['password'];


    $query = "select * from login where name= '$username' and password = '$password'";
    $result = mysqli_query($conn, $query);
    if ( mysqli_num_rows($result)){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];

        echo"<script type='text/javascript'>
        
                window.location.href='userdash.php';
                    </script>";

                    
    }
    else{
        echo "<script type='text/javascript'>
        alert('Invalid username or password')
        </script>";
    }

}

?>
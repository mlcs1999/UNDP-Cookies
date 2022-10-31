<?php
    session_start();
    echo "Dobrodosao, " . $_SESSION['email'];
    echo "<a href='logout.php'> Log out. </a>";

    if( isset($_COOKIE['email']) && isset($_COOKIE['password']) && isset($_COOKIE['username'])) {
        $emailCookie = $_COOKIE['email'];
        $passwordCokie = $_COOKIE['password'];
        $usernameCokie = $_COOKIE['username'];

        echo "<script> 
                alert('$usernameCokie');
              </script>";
    }
?>
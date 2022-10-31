<?php
    session_start();
    echo "Dobrodosao, " . $_SESSION['email'];
    echo "<a href='logout.php'> Log out. </a>";

    if( isset($_COOKIE['email']) && isset($_COOKIE['password']) ) {
        $emailCookie = $_COOKIE['email'];
        $passwordCokie = $_COOKIE['password'];

        echo "<script> 
                alert('$emailCookie');
              </script>";
    }
?>
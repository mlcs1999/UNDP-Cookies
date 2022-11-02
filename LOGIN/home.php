<?php
    session_start();
    echo "Dobrodosao, " . $_SESSION['email'];
    echo "<a href='logout.php'> Log out. </a>";

    // if( isset($_COOKIE['email']) && isset($_COOKIE['password']) && isset($_COOKIE['username'])) {
    //     $usernameCookie = $_COOKIE['username'];
    //     $emailCookie = $_COOKIE['email'];
    //     $passwordCookie = $_COOKIE['password'];

    //     echo "<script> 
    //             alert('$usernameCookie');
    //           </script>";
    // }

    //vezbanje2: obraditi podatke kroz niz
    if(isset($_COOKIE['user'])) {
        $userDeserialize = unserialize($_COOKIE['user']);
        // $usernameCookie = $userDeserialize['username'];
        // $emailCookie = $userDeserialize['email'];
        // $passwordCookie = $userDeserialize['password'];

        echo "<br> Username: " . $userDeserialize['username'];
        echo "<br> Email: " . $userDeserialize['email'];
        echo "<br> Password: " . $userDeserialize['password'];

    }

?>
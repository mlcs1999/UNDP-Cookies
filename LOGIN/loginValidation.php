<?php

    $adminEmail = "admin@admin.com";
    $adminPass = "admin";

    if(isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $username =  $_POST['username'];

        //vezbanje2: obraditi podatke kroz niz
        $user = array(
            "username" => $username,
            "email" => $email,
            "password" => $password
        );

        if($email == $adminEmail && $password == $adminPass) {
            if( isset($_POST['remember']) ) {
                // setcookie('email', $email, time() + 60*60*10);
                // setcookie('password', $password, time() + 60*60);
                //vezbanje1: dodat jos jedan input i obradjen kroz kolacic
                // setcookie('username', $username, time() + 60*60);

                //vezbanje2: obraditi podatke kroz niz
                $userSerialize = serialize($user);
                setcookie('user', $userSerialize, time() + 3600);
            }
            session_start();
            $_SESSION['email'] = $email;
            header("Location: home.php");
        }
        else 
        {
            echo "Email ili sifra nisu dobro uneti. <br>
            Kliknite <a href='login.php'> ovde </a> da biste se ponovo logovali.";
        }

    }
    else 
    {
        //AKO SE NIJE LOGOVAO, NEGO USAO DIREKTNO NA OVU STRANICU
        header("Location: login.php");
    }
?>
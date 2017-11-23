<?php

    // Membuat fungsi untuk method $_POST[]
    function post($data)
    {
        if ( !empty(trim($data)) && isset($_POST[$data]) ){
            return $_POST[$data];
        } else {
            return false;
        }
    }

    // Membuat fungsi Penginisialisasi Session
    function setSesssion($sessionName, $sessionValue)
    {
        if (!empty(trim($sessionName)) && !empty(trim($sessionValue)) ) {
            return $_SESSION[$sessionName] = $sessionValue;
        }
    }


    // Fungsi Login
    function Auth($_username, $_password)
    {
        if( !empty(trim($_username)) && !empty(trim($_password)) )
        {
            $_usernameCount = selectCount('users', 'username', $_username);
                if  ( $_usernameCount > 0 ) {
                    $_dBusername = selectOneWhere('users', 'username', $_username, 'username');
                    $_dBpassword = selectOneWhere('users', 'username', $_username, 'password');

                        if ( ($_username == $_dBusername) && password_verify($_password, $_dBpassword) ) {
                            setSesssion('user', $_username);
                            header('location: home.php');
                        } else {
                            header('location: index.php');
                        }

                } else {
                    // Mengembalikan error jika username tidak ada di DB
                    return $error = 1;
                }
        } else {
            // Mengembalikan error jika username atau password kosong
            return $error = 2;
        }
    }




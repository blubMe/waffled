<?php

    function post($data)
    {
        if ( !empty(trim($data)) && isset($_POST[$data]) ){
            return $_POST[$data];
        } else {
            return false;
        }
    }

    function setSesssion($sessionName, $sessionValue)
    {
        if (!empty(trim($sessionName)) && !empty(trim($sessionValue)) ) {
            return $_SESSION[$sessionName] = $sessionValue;
        }
    }


    // LOGIN
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
                    // if username == 0
                    return $error = 1;
                }
        } else {
            // if username and password Empty.
            return $error = 2;
        }
    }




<?php

    // Membuat Fungsi Pengecekan user yang terdaftar
    function selectAuthCount ($table, $value)
    {
        global $conn;
        $_SQL = "SELECT * FROM $table WHERE username = '$value' OR email = '$value'";
        return mysqli_num_rows(mysqli_query($conn, $_SQL));
    }

    // Membuat Fungsi Pengambilan username
    function selectAuth ($table, $value)
    {
        global $conn;
        $_SQL = "SELECT * FROM $table WHERE username = '$value' OR email = '$value'";
        return mysqli_fetch_array(mysqli_query($conn, $_SQL));
    }

    // Membuat Fungsi Login
    function Auth($_username, $_password)
    {
        global $conn;
        if( !empty(trim($_username)) && !empty(trim($_password)) )
        {
            $_username = mysqli_real_escape_string($conn, $_username);
            $_password = mysqli_real_escape_string($conn, $_password);

            $_usernameCount = selectAuthCount('users', $_username);
                if  ( $_usernameCount > 0 ) {
                    $_dbAuth = selectAuth('users', $_username);

                        if ( ( $_username == $_dbAuth['username'] OR $_username == $_dbAuth['email'] ) && password_verify($_password, $_dbAuth['password']) ) {
                            setSession('user', $_username);
                            header('location: home.php');
                        } else {
                            header('location: index.php');
                        }

                } else {
                    return false;
                }
        }
    }

    // Membuat fungsi registrasi user
    function Register($_username, $_email, $_password)
    {
        global $conn;

            $_username = mysqli_real_escape_string($conn, $_username);
            $_email = mysqli_real_escape_string($conn, $_email);
            $_password = mysqli_real_escape_string($conn, $_password);

            if  ( !empty(trim($_username)) && !empty(trim($_email)) && !empty(trim($_password)) ) {


                $_SQL = "INSERT INTO users( username, email, password ) VALUES( '$_username', '$_email', '$_password' )";

            } else {
                // Mengembalikan Error Jika username, email dan password kosong
                $error = 1;
            }

    }



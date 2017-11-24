<?php
    // REQUIRED CORE FILE
    require_once('core/init.php');

    // Mendapatkan Session user jika ada langsung kehalaman Beranda
    if ( getSession('user') ) {
        header('location: home.php');
    }

    // Memanggil Fungsi Register User
    if ( post('register') )
    {
        if (!empty(trim(post('password'))) AND !empty(trim(post('email'))) AND !empty(trim(post('username'))) AND !empty(trim(post('fullname')))) {

            if ( post('password') === post('repassword') ) {

                $_register = Register( post('username'), // Username
                                    post('fullname'),// Nama Lengkap
                                    post('email'), // Email
                                    password_hash(post('password'),PASSWORD_DEFAULT) // Password
                            );

                 Auth(post('username'), post('password'));

                    setcookie('error', '0');

                } else {
                    // Jika Password tidak sama dengan Repassword
                    header('location: register.php');
                    setcookie('error', '1');
                }
        } else {
            // jika ada yang kosong
            echo "kosong";
        }

    }

?>

<form method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="text" name="fullname" placeholder="Nama Lengkap">
    <input type="text" name="email" placeholder="Email">
    <input type="text" name="password" placeholder="Password">
    <input type="text" name="repassword" placeholder="Comfirm Password">
    <input type="submit" name="register" value="Daftar">
</form>
<?php

    if (isset($_COOKIE['error']) AND !empty($_COOKIE['error'])) {
        echo 'password tidak sama';
        unset($_COOKIE['error']);
        setcookie('error',null,'1');
    }

?>
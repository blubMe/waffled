<?php
    // REQUIRED CORE FILE
    require_once('core/init.php');

    // Mendapatkan Session user jika ada langsung kehalaman Beranda
    if ( !getSession('user') ) {
        header('location: home.php');
    }

    // Memanggil Fungsi Register User
    if ( post('register') )
    {
        if ( post('password') === post('repassword') ) {
            Register(array(
                'username' => post('username'),
                'email' => post('email'),
                'password' => password_hash(post('password'),PASSWORD_DEFAULT),
            ));
            } else {
            // Jika Password tidak sama dengan Repassword

            }
    }

?>

<form method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="text" name="email" placeholder="Email">
    <input type="text" name="password" placeholder="Password">
    <input type="text" name="repassword" placeholder="Comfirm Password">
    <input type="submit" name="register" value="Daftar">
</form>
<?php
// REQUIRED CORE FILE
require_once('core/init.php');

// Mendapatkan Session user jika ada langsung kehalaman Beranda
if (getSession('user')) {
    header('location: home.php');
}

// Memanggil Fungsi Register User
if (post('register')) {
    if (trim(post('password')) === trim(post('repassword'))) {

        $_register = Register(post('username'), // Username
            post('fullname'), // Nama Lengkap
            post('email'), // Email
            password_hash(post('password'), PASSWORD_DEFAULT) // Password
            );

            Auth(post('username'), post('password'));

        // header('location: register.php');
        // setcookie('error', '0');

    } else {
        // Jika Password tidak sama dengan Repassword
        header('location: register.php');
        setcookie('error', '1');
    }

}

?>
<!DOCTYPE html>
  <html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="icon" href="" type="image/png"> -->
    <link rel="stylesheet" href="lib/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <title>Sosial Hukum</title>
  </head>

  <body>
    <header>
      <div class="header-main--login">
        <nav>
          <!-- navbar -->
        </nav>
      </div>
    </header>
    <section>
      <div class="showcase">
        <div class="showcase-overlay"></div>
        <div class="showcase-bg" style="background-image:url('assets/images/bg4.jpg')"></div>
        <div class="wrap-login">
          <div class="wrap-cover">
            <div class="wrap-cover__title">
              <h1 class="bigheading">Sosial Hukum</h1>
              <p class="subheading">Create A Future Of Social Life , excite the world. Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            </div>
            <div class="wrap-cover__search">
              <input class="search-login" type="text" name="" value="" placeholder=" search e.g @urfriend">
            </div>
          </div>
          <div class="wrap-login__form">
            <div class="wrap-login__form__header">
              <h4>Logo_Here</h4>
            </div>
            <form class="form-login" method="post">
              <input class="login-input" type="text" name="username" placeholder="Username">
              <input class="login-input" type="text" name="fullname" placeholder="Nama Lengkap">
              <input class="login-input" type="text" name="email" placeholder="Email">
              <input class="login-input" type="password" name="password" placeholder="Password">
              <input class="login-input" type="password" name="repassword" placeholder="Comfirm Password">
              <input class="button login-button" type="submit" name="register" value="Daftar">
            </form>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <div class="footer-main--login">
        <div class="footer-main--login__left">
          <ul>
            <li>About us</li>
            <li>Pricing</li>
            <li>Get Started</li>
            <li>Privacy policy</li>
            <li>Tentang Blog</li>
          </ul>
        </div>
      </div>
    </footer>
  </body>

  </html>

  <?php

if (isset($_COOKIE['error']) AND !empty($_COOKIE['error'])) {
    echo 'password tidak sama';
    unset($_COOKIE['error']);
    setcookie('error', null, '1');
}

?>
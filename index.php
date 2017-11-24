<?php

  // Memasukkan semua fungsi lewat file init.php
  require_once('core/init.php');

  $error = null;

    // Mendapatkan Session user jika ada langsung kehalaman Beranda
    if ( getSession('user') ) {
        header('location: home.php');
    }

    // Memanggil fungsi Auth sekaligus mendapatkan error jika ada
    if ( post('login') ) {
      if ( !empty(trim(post('username'))) && !empty(trim(post('password')))    ) {
        setSession('fusername',post('username'));
        setSession('fpassword',post('password'));
        if ( !empty(trim(post('captcha'))) && trim(post('captcha')) == getSession('captcha') ) {
          $_loginStatus = Auth(post('username'), post('password'));
          ($_loginStatus == false) ? $error = 3 : '';
        } else {
          // Mengembalikan error jika captcha tidak sesuai dengan inputan
          $error = 2;
        }
      } else {
        // Mengembalikan error jika username atau password kosong
        $error = 1;
      }
    }

    // Captcha
    $aC = rand(1,7); // Random Angka A
    $bC = rand(1,5);  // Random Angka B
    $resultC = $aC + $bC; // Hasil = A + B
    setSession('captcha', $resultC);  // Membuat Session Hasil dari angka A dan Angka B


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
              <input class="login-input" type="text" name="username" value="<?= getSession('fusername'); ?>" placeholder="Email / Username">
              <input class="login-input" type="password" name="password" value="<?= getSession('fpassword'); ?>" placeholder="Password">
              <input class="login-input" type="number" name="captcha" placeholder="<?= $aC ." + ". $bC ?>">
              <?= ($error === 1) ? 'Username / Email Wajib diisi' : ''; ?>
                <?= ($error === 3) ? post('username').' Tidak Terdaftar' : ''; ?>
                  <?= ($error === 2) ? 'Captcha Salah' : ''; ?>
                    <input class="button regis-button" type="submit" name="login" value="Masuk">
            </form>
            <div class="wrap-otherauth">
              <div class="wrap-otherauth__title">
                <div style="margin-top: 50px;">
                  <span>Atau</span>
                </div>
              </div>
              <div class="button login-button">
                Daftar
              </div>

            </div>
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
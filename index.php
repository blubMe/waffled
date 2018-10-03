<?php

  // REQUIRED CORE FILE
  require_once('core/init.php');

    if ( getSession('user') ) {
        header('location: home.php');
    }

    if ( post('login') ) {
      $_loginStatus = Auth(post('username'), post('password'));
    }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
          <h4>Logonya disini</h4>
        </div>
        <form class="form-login" method="post">
          <input class="login-input" type="text" name="username" value="" placeholder="Email">
            <input class="login-input" type="password" name="password" value="" placeholder="Password">
            <input class="button regis-button" type="submit" name="login" value="Masuk">
        </form>
        <div class="wrap-otherauth">
          <div class="wrap-otherauth__title">
            <span>Atau</span>
          </div>
          <div class="button login-button">
            Daftar
          </div>
          <div class="button login-button google-button">
            <span>
              <svg height="25" viewBox="0 0 512 512" width="25" xmlns="http://www.w3.org/2000/svg" data-reactid="41"><g fill="none" fill-rule="evenodd" data-reactid="42"><path d="M482.56 261.36c0-16.73-1.5-32.83-4.29-48.27H256v91.29h127.01c-5.47 29.5-22.1 54.49-47.09 71.23v59.21h76.27c44.63-41.09 70.37-101.59 70.37-173.46z" fill="#4285f4" data-reactid="43"></path><path d="M256 492c63.72 0 117.14-21.13 156.19-57.18l-76.27-59.21c-21.13 14.16-48.17 22.53-79.92 22.53-61.47 0-113.49-41.51-132.05-97.3H45.1v61.15c38.83 77.13 118.64 130.01 210.9 130.01z" fill="#34a853" data-reactid="44"></path><path d="M123.95 300.84c-4.72-14.16-7.4-29.29-7.4-44.84s2.68-30.68 7.4-44.84V150.01H45.1C29.12 181.87 20 217.92 20 256c0 38.08 9.12 74.13 25.1 105.99l78.85-61.15z" fill="#fbbc05" data-reactid="45"></path><path d="M256 113.86c34.65 0 65.76 11.91 90.22 35.29l67.69-67.69C373.03 43.39 319.61 20 256 20c-92.25 0-172.07 52.89-210.9 130.01l78.85 61.15c18.56-55.78 70.59-97.3 132.05-97.3z" fill="#ea4335" data-reactid="46"></path><path d="M20 20h472v472H20V20z" data-reactid="47"></path></g></svg>
            </span>
            Login With Google
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

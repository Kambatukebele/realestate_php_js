<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--GOOGLE FONT  -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet" />
    <!--GOOGLE FONT  -->
    <!--GOOGLE ICONS  -->
    <link rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!--GOOGLE ICONS  -->
    <!-- CSS  -->
    <link rel="stylesheet" href="<?=ROOT_ASSETS?>theme/css/reset.css" />
    <link rel="stylesheet" href="<?=ROOT_ASSETS?>theme/css/style.css" />
    <link rel="stylesheet" href="<?=ROOT_ASSETS?>theme/css/buy.css" />
    <!-- END CSS  -->
    <title><?= $data['page_title'];?></title>
  </head>

  <body>
    <main>
      <!--HEADER  -->
      <header class="header">
        <div class="header__wrapper">
          <div class="header__logo">
            <img class="header__logo--img" src="<?=ROOT_ASSETS?>theme/images/logo1.png" alt="logo" />
          </div>
          <nav class="header__nav">
            <ul class="header__ul">
              <a href="<?=ROOT?>" class="header_link">
                <li class="header__li">Home</li>
              </a>
              <a href="<?=ROOT?>buy" class="header_link">
                <li class="header__li">Buy</li>
              </a>
              <a href="#" class="header_link">
                <li class="header__li">Sell</li>
              </a>
              <a href="#" class="header_link">
                <li class="header__li">Listing</li>
              </a>
              <a href="#" class="header_link">
                <li class="header__li">Contact</li>
              </a>
            </ul>
          </nav>
          <div class="header__auth">
            <div class="header__auth--all">
              <div class="header__auth--signup">
                <a class="header__auth--signup-link href=" #"><button class="header__auth--signup-btn"
                    type="button">Signup</button></a>
              </div>
              <div class="header__auth--login">
                <a class="header__auth--login-link href=" #"><button class="header__auth--login-btn"
                    type="button">Login</button></a>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!--HAMBURBUR MENU  -->
      <section class="hamburgerMenu">
        <div class="hamburgerMenu__wrapper">
          <div class="hamburgerMenu__logo">
            <img class="hamburgerMenu__logo--img" src="<?=ROOT_ASSETS?>theme/images/logo1.png" alt="logo" />
          </div>
          <div class="hamburgerMenu__group">
            <div class="hamburgerMenu__menu">
              <span class="material-symbols-outlined">
                menu
              </span>
            </div>
            <div class="hamburgerMenu__close">
              <span class="material-symbols-outlined">
                close
              </span>
            </div>
          </div>
        </div>
      </section>
      <!-- HAMBURGER LIST -->

      <!-- ENDHAMBURGER LIST -->
      <!--END HAMBURBUR MENU  -->
      <div class="hamburgerMenu__list">
        <a href="#">
          <li>Home</li>
        </a>
        <a href="#">
          <li>Buy</li>
        </a>
        <a href="#">
          <li>Sell</li>
        </a>
        <a href="#">
          <li>Listing</li>
        </a>
        <a href="#">
          <li>Contact</li>
        </a>
        <a href="#">
          <li><button>Signup</button></li>
        </a>
        <a href="#">
          <li><button>Login</button></li>
        </a>
      </div>
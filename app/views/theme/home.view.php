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
    <!-- END CSS  -->
    <title><?= $data['page_title'];?></title>
  </head>

  <body>
    <main>
      <!--HEADER  -->
      <header class="header">
        <div class="wrapper">
          <div class="header__all box-all">
            <div class="header__logo">
              <img class="header__logo--img" src="<?=ROOT_ASSETS?>theme/images/logo1.png" alt="logo" />
            </div>
            <nav class="header__nav">
              <ul class="header__ul">
                <a href="#" class="header_link">
                  <li class="header__li">Home</li>
                </a>
                <a href="#" class="header_link">
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
        </div>
      </header>
      <!-- END HEADER  -->
      <!-- HERO -->
      <section class="hero">
        <div class="hero__wrapper wrapper">
          <div class="hero__all box-all">
            <div class="hero__text">
              <h1 class="hero__title">We will help you find <br>
                your <span class="hero__title--green">Wonderful</span> home</h1>
              <p class="hero_description">A great plateform to buy, sell and rent your properties without any agent or
                commisions.</p>
            </div>
          </div>
        </div>
      </section>
      <!-- END HERO -->
      <!--SEARCH  -->
      <section class="search">
        <div class="search__wrapper wrapper">
          <div class="search__all box-all">
            <div class="search__buy-sell-rent">
              <div class="search__buy-sell-rent--left">
                <span class="search__buy search__buy-sell-rent--active"><a href="#"><button
                      type="button">Buy</button></a></span>
                <span class="search__sell"><a href="#"><button type="button">Sell</button></a></span>
                <span class="search__rent "><a href="#"><button type="button">Rent</button></a></span>
              </div>
            </div>
            <div class="search__form--all">
              <form method="post">
                <div class="search__form">
                  <div class="search__form--box">
                    <div class="search__form--text">
                      <h4 class="search__form--title">Search : <small>*</small></h4>
                    </div>
                    <div class="search__form--input">
                      <span class="material-symbols-outlined">
                        search
                      </span>
                      <input type="text" name="" id="" placeholder="Search your keywords">
                    </div>
                  </div>
                  <div class="search__form--box">
                    <div class="search__form--text">
                      <h4 class="search__form--title">Select Categories : <small>*</small></h4>
                    </div>
                    <div class="search__form--input">
                      <span class="material-symbols-outlined">
                        home
                      </span>
                      <select name="" id="">
                        <option value="">Houses</option>
                        <option value="">Appartment</option>
                        <option value="">Offices</option>
                        <option value="">TownOffice</option>
                      </select>
                    </div>
                  </div>
                  <div class="search__form--box">
                    <div class="search__form--text">
                      <h4 class="search__form--title">Min Price : <small>*</small></h4>
                    </div>
                    <div class="search__form--input">
                      <span class="material-symbols-outlined">
                        monetization_on
                      </span>
                      <select name="" id="">
                        <option value="">Min Price</option>
                        <option value="">500</option>
                        <option value="">1000</option>
                        <option value="">1500</option>
                      </select>
                    </div>
                  </div>
                  <div class="search__form--box">
                    <div class="search__form--text">
                      <h4 class="search__form--title">Max Price : <small>*</small></h4>
                    </div>
                    <div class="search__form--input">
                      <span class="material-symbols-outlined">
                        monetization_on
                      </span>
                      <select name="" id="">
                        <option value="">Max Price</option>
                        <option value="">500</option>
                        <option value="">1000</option>
                        <option value="">1500</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="search__form--button">
                  <button type="submit">Search</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!--END SEARCH  -->
    </main>
    <!-- SCRIPTS -->
    <script src="<?=ROOT_ASSETS?>theme/js/main.js"></script>
    <!-- END SCRIPTS -->
  </body>

</html>
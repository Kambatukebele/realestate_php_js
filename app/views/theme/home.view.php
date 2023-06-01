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
        <div class="header__wrapper">
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
      <!-- END HEADER  -->
      <!-- HERO -->
      <section class="hero">
        <div class="hero__wrapper">
          <div class="hero__text">
            <h1 class="hero__title">We will help you find <br>
              your <span class="hero__title--green">Wonderful</span> home</h1>
            <p class="hero_description">A great plateform to buy, sell and rent your properties without any agent or
              commisions.</p>
          </div>
        </div>
      </section>
      <!-- END HERO -->
      <!--SEARCH  -->
      <section class="search">
        <div class="search__wrapper">
          <div class="search__buy-sell-rent">
            <div class="search__buy-sell-rent--left">
              <span class="search__buy"><button type="button">Buy</button></span>
              <span class="search__sell"><button type="button">Sell</button></span>
              <span class="search__rent "><button type="button">Rent</button></span>
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
      </section>
      <!--END SEARCH  -->

      <!-- LISTING -->
      <section class="listings">
        <div class="listings__wrapper">
          <div class="listings__group">
            <div class="listing">
              <div class="listing__image">
                <img src="<?=ROOT_ASSETS?>theme/images/img1.jpg" alt="house_image">
              </div>
              <div class="listing__info">
                <div class="listing__titleDiv">
                  <a href="#">
                    <h2 class="listing__title">10765 Hillshire Ave, Baton Rouge, LA 70810, USA</h2>
                  </a>
                </div>
                <div class="listing__divider">

                </div>
                <div class="listing__descriptions">
                  <div class="listing__description">
                    <span class="material-symbols-outlined color_icon">
                      view_in_ar
                    </span>
                    <span class="listing__quare">8000sqf</span>
                  </div>
                  <div class="listing__description">
                    <span class="material-symbols-outlined color_icon">
                      bed
                    </span>
                    <span class="listing__bed">4 Beds</span>
                  </div>
                  <div class="listing__description">
                    <span class="material-symbols-outlined color_icon">
                      bathtub
                    </span>
                    <span class="listing__quare">4 Baths</span>
                  </div>
                </div>
                <div class="listing__divider">

                </div>
                <div class="listing__priceRating">
                  <div class="listing__price--group">
                    <span class="listing__price--group__title">Price</span>
                    <span class="listing__price--group__price">$5000</span>
                  </div>
                  <div class="listing__rating--group">
                    <span class="listing__rating--group__title">Rating</span>
                    <div class="listing__rating--group__stars">
                      <span class="material-symbols-outlined">
                        star
                      </span><span class="material-symbols-outlined">
                        star
                      </span><span class="material-symbols-outlined">
                        star
                      </span><span class="material-symbols-outlined">
                        star
                      </span><span class="material-symbols-outlined">
                        star
                      </span>
                      <span class="listing__rating--group__total">(32)</span>
                    </div>

                  </div>
                </div>
              </div>
            </div>

            <div class="listing">
              <div class="listing__image">
                <img src="<?=ROOT_ASSETS?>theme/images/img2.jpg" alt="house_image">
              </div>
              <div class="listing__info">
                <div class="listing__titleDiv">
                  <a href="#">
                    <h2 class="listing__title">710 BOYD DR, Unit #1102, Baton Rouge, LA 70808, USA</h2>
                  </a>
                </div>
                <div class="listing__divider">

                </div>
                <div class="listing__descriptions">
                  <div class="listing__description">
                    <span class="material-symbols-outlined color_icon">
                      view_in_ar
                    </span>
                    <span class="listing__quare">8000sqf</span>
                  </div>
                  <div class="listing__description">
                    <span class="material-symbols-outlined color_icon">
                      bed
                    </span>
                    <span class="listing__bed">4 Beds</span>
                  </div>
                  <div class="listing__description">
                    <span class="material-symbols-outlined color_icon">
                      bathtub
                    </span>
                    <span class="listing__quare">4 Baths</span>
                  </div>
                </div>
                <div class="listing__divider">

                </div>
                <div class="listing__priceRating">
                  <div class="listing__price--group">
                    <span class="listing__price--group__title">Price</span>
                    <span class="listing__price--group__price">$5000</span>
                  </div>
                  <div class="listing__rating--group">
                    <span class="listing__rating--group__title">Rating</span>
                    <div class="listing__rating--group__stars">
                      <span class="material-symbols-outlined">
                        star
                      </span><span class="material-symbols-outlined">
                        star
                      </span><span class="material-symbols-outlined">
                        star
                      </span><span class="material-symbols-outlined">
                        star
                      </span><span class="material-symbols-outlined">
                        star
                      </span>
                      <span class="listing__rating--group__total">(32)</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="listing">
              <div class="listing__image">
                <img src="<?=ROOT_ASSETS?>theme/images/img3.jpg" alt="house_image">
              </div>
              <div class="listing__info">
                <div class="listing__titleDiv">
                  <a href="#">
                    <h2 class="listing__title">5133 MCLAIN WAY, Baton Rouge, LA 70809, USA</h2>
                  </a>
                </div>
                <div class="listing__divider">

                </div>
                <div class="listing__descriptions">
                  <div class="listing__description">
                    <span class="material-symbols-outlined color_icon">
                      view_in_ar
                    </span>
                    <span class="listing__quare">8000sqf</span>
                  </div>
                  <div class="listing__description">
                    <span class="material-symbols-outlined color_icon">
                      bed
                    </span>
                    <span class="listing__bed">4 Beds</span>
                  </div>
                  <div class="listing__description">
                    <span class="material-symbols-outlined color_icon">
                      bathtub
                    </span>
                    <span class="listing__quare">4 Baths</span>
                  </div>
                </div>
                <div class="listing__divider">

                </div>
                <div class="listing__priceRating">
                  <div class="listing__price--group">
                    <span class="listing__price--group__title">Price</span>
                    <span class="listing__price--group__price">$5000</span>
                  </div>
                  <div class="listing__rating--group">
                    <span class="listing__rating--group__title">Rating</span>
                    <div class="listing__rating--group__stars">
                      <span class="material-symbols-outlined">
                        star
                      </span><span class="material-symbols-outlined">
                        star
                      </span><span class="material-symbols-outlined">
                        star
                      </span><span class="material-symbols-outlined">
                        star
                      </span><span class="material-symbols-outlined">
                        star
                      </span>
                      <span class="listing__rating--group__total">(32)</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="listings__group">
            <div class="listing">
              <div class="listing__image">
                <img src="<?=ROOT_ASSETS?>theme/images/img1.jpg" alt="house_image">
              </div>
              <div class="listing__info">
                <div class="listing__titleDiv">
                  <a href="#">
                    <h2 class="listing__title">10765 Hillshire Ave, Baton Rouge, LA 70810, USA</h2>
                  </a>
                </div>
                <div class="listing__divider">

                </div>
                <div class="listing__descriptions">
                  <div class="listing__description">
                    <span class="material-symbols-outlined color_icon">
                      view_in_ar
                    </span>
                    <span class="listing__quare">8000sqf</span>
                  </div>
                  <div class="listing__description">
                    <span class="material-symbols-outlined color_icon">
                      bed
                    </span>
                    <span class="listing__bed">4 Beds</span>
                  </div>
                  <div class="listing__description">
                    <span class="material-symbols-outlined color_icon">
                      bathtub
                    </span>
                    <span class="listing__quare">4 Baths</span>
                  </div>
                </div>
                <div class="listing__divider">

                </div>
                <div class="listing__priceRating">
                  <div class="listing__price--group">
                    <span class="listing__price--group__title">Price</span>
                    <span class="listing__price--group__price">$5000</span>
                  </div>
                  <div class="listing__rating--group">
                    <span class="listing__rating--group__title">Rating</span>
                    <div class="listing__rating--group__stars">
                      <span class="material-symbols-outlined">
                        star
                      </span><span class="material-symbols-outlined">
                        star
                      </span><span class="material-symbols-outlined">
                        star
                      </span><span class="material-symbols-outlined">
                        star
                      </span><span class="material-symbols-outlined">
                        star
                      </span>
                      <span class="listing__rating--group__total">(32)</span>
                    </div>

                  </div>
                </div>
              </div>
            </div>

            <div class="listing">
              <div class="listing__image">
                <img src="<?=ROOT_ASSETS?>theme/images/img2.jpg" alt="house_image">
              </div>
              <div class="listing__info">
                <div class="listing__titleDiv">
                  <a href="#">
                    <h2 class="listing__title">710 BOYD DR, Unit #1102, Baton Rouge, LA 70808, USA</h2>
                  </a>
                </div>
                <div class="listing__divider">

                </div>
                <div class="listing__descriptions">
                  <div class="listing__description">
                    <span class="material-symbols-outlined color_icon">
                      view_in_ar
                    </span>
                    <span class="listing__quare">8000sqf</span>
                  </div>
                  <div class="listing__description">
                    <span class="material-symbols-outlined color_icon">
                      bed
                    </span>
                    <span class="listing__bed">4 Beds</span>
                  </div>
                  <div class="listing__description">
                    <span class="material-symbols-outlined color_icon">
                      bathtub
                    </span>
                    <span class="listing__quare">4 Baths</span>
                  </div>
                </div>
                <div class="listing__divider">

                </div>
                <div class="listing__priceRating">
                  <div class="listing__price--group">
                    <span class="listing__price--group__title">Price</span>
                    <span class="listing__price--group__price">$5000</span>
                  </div>
                  <div class="listing__rating--group">
                    <span class="listing__rating--group__title">Rating</span>
                    <div class="listing__rating--group__stars">
                      <span class="material-symbols-outlined">
                        star
                      </span><span class="material-symbols-outlined">
                        star
                      </span><span class="material-symbols-outlined">
                        star
                      </span><span class="material-symbols-outlined">
                        star
                      </span><span class="material-symbols-outlined">
                        star
                      </span>
                      <span class="listing__rating--group__total">(32)</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="listing">
              <div class="listing__image">
                <img src="<?=ROOT_ASSETS?>theme/images/img3.jpg" alt="house_image">
              </div>
              <div class="listing__info">
                <div class="listing__titleDiv">
                  <a href="#">
                    <h2 class="listing__title">5133 MCLAIN WAY, Baton Rouge, LA 70809, USA</h2>
                  </a>
                </div>
                <div class="listing__divider">

                </div>
                <div class="listing__descriptions">
                  <div class="listing__description">
                    <span class="material-symbols-outlined color_icon">
                      view_in_ar
                    </span>
                    <span class="listing__quare">8000sqf</span>
                  </div>
                  <div class="listing__description">
                    <span class="material-symbols-outlined color_icon">
                      bed
                    </span>
                    <span class="listing__bed">4 Beds</span>
                  </div>
                  <div class="listing__description">
                    <span class="material-symbols-outlined color_icon">
                      bathtub
                    </span>
                    <span class="listing__quare">4 Baths</span>
                  </div>
                </div>
                <div class="listing__divider">

                </div>
                <div class="listing__priceRating">
                  <div class="listing__price--group">
                    <span class="listing__price--group__title">Price</span>
                    <span class="listing__price--group__price">$5000</span>
                  </div>
                  <div class="listing__rating--group">
                    <span class="listing__rating--group__title">Rating</span>
                    <div class="listing__rating--group__stars">
                      <span class="material-symbols-outlined">
                        star
                      </span><span class="material-symbols-outlined">
                        star
                      </span><span class="material-symbols-outlined">
                        star
                      </span><span class="material-symbols-outlined">
                        star
                      </span><span class="material-symbols-outlined">
                        star
                      </span>
                      <span class="listing__rating--group__total">(32)</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- END LISTING -->

    </main>
    <!-- SCRIPTS -->
    <script src="<?=ROOT_ASSETS?>theme/js/main.js"></script>
    <!-- END SCRIPTS -->
  </body>

</html>
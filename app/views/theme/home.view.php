<?php $this->view("theme", "header", $data);?>
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
        <div class="listing__save">
          <span class="material-symbols-outlined saved__listing ">
            favorite
          </span>
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
          <img src="<?=ROOT_ASSETS?>theme/images/img1.jpg" alt="house_image">
        </div>
        <div class="listing__save">
          <span class="material-symbols-outlined saved__listing ">
            favorite
          </span>
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
          <img src="<?=ROOT_ASSETS?>theme/images/img1.jpg" alt="house_image">
        </div>
        <div class="listing__save">
          <span class="material-symbols-outlined saved__listing ">
            favorite
          </span>
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
          <img src="<?=ROOT_ASSETS?>theme/images/img1.jpg" alt="house_image">
        </div>
        <div class="listing__save">
          <span class="material-symbols-outlined saved__listing ">
            favorite
          </span>
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
        <div class="listing__save">
          <span class="material-symbols-outlined saved__listing ">
            favorite
          </span>
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
        <div class="listing__save">
          <span class="material-symbols-outlined saved__listing ">
            favorite
          </span>
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

    <!-- <div class="listings__group">
            <div class="listing">
              <div class="listing__image">
                <img src="<?=ROOT_ASSETS?>theme/images/img1.jpg" alt="house_image">
              </div>
              <div class="listing__save">
                <span class="material-symbols-outlined saved__listing ">
                  favorite
                </span>
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
              <div class="listing__save">
                <span class="material-symbols-outlined saved__listing ">
                  favorite
                </span>
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
              <div class="listing__save">
                <span class="material-symbols-outlined saved__listing ">
                  favorite
                </span>
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
          </div> -->
  </div>
</section>
<!-- END LISTING -->

<!-- PAGINATION -->
<section class="pagination">
  <div class="pagination__wrapper">
    <div class="pagination__arrow">
      <a href="#">
        <span class="material-symbols-outlined">
          arrow_back_ios
        </span>
      </a>
    </div>
    <div class="pagination__number">
      <a href="#">
        <h5 class="pagination__number--count">1</h5>
      </a>
    </div>
    <div class="pagination__number">
      <a href="#">
        <h5 class="pagination__number--count">2</h5>
      </a>
    </div>
    <div class="pagination__arrow">
      <a href="#">
        <span class="material-symbols-outlined">
          arrow_forward_ios
        </span>
      </a>
    </div>
  </div>
</section>
<!-- END PAGINATION -->

<!-- HOW IT WORKS -->
<section class="howitwork">
  <div class="howitwork__wrapper">
    <div class="howitwork__introduction">
      <h2 class="howitwork__title">How It Works</h2>
      <p class="howitwork__describtion">A great plateform to buy, sell and rent your properties without any agent
        or commisions.
      </p>
    </div>
    <div class="howitwork__steps">
      <div class="howitwork__evaluate">
        <div class="howitwork__icon">
          <span class="material-symbols-outlined">
            real_estate_agent
          </span>
        </div>
        <div class="howitwork__textBundle">
          <h3>Evaluate Property</h3>
          <p>If the distribution of letters and 'words' is random, the reader will not be distracted from making.
          </p>
        </div>
      </div>

      <div class="howitwork__evaluate">
        <div class="howitwork__icon">
          <span class="material-symbols-outlined">
            next_week
          </span>
        </div>
        <div class="howitwork__textBundle">
          <h3>Meeting with Agent</h3>
          <p>If the distribution of letters and 'words' is random, the reader will not be distracted from making.
          </p>
        </div>
      </div>

      <div class="howitwork__evaluate">
        <div class="howitwork__icon">
          <span class="material-symbols-outlined">
            vpn_key_alert
          </span>
        </div>
        <div class="howitwork__textBundle">
          <h3>Close the Deal</h3>
          <p>If the distribution of letters and 'words' is random, the reader will not be distracted from making.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- END HOW IT WORKS -->

<!-- TESTTIMONIALS -->
<section class="testimonials">
  <div class="testimonials__wrapper">
    <div class="testimonials__introduction">
      <h2 class="testimonials__title">What Our Client Say ?</h2>
      <p class="testimonials__describtion">A great plateform to buy, sell and rent your properties without any
        agent
        or commisions.
      </p>
    </div>
    <div class="testimonials__fromClients">
      <div class="testimonials__text">
        <span class="material-symbols-outlined testimonials__text--quoteStart">
          format_quote
        </span>
        <p>" Hously made the processes so easy. Hously instantly increased the amount of interest and ultimately
          saved us over $10,000. "</p>
        <span class="material-symbols-outlined testimonials__text--quoteEnd">
          format_quote
        </span>
      </div>
      <div class="testimonials__image">
        <img src="<?=ROOT_ASSETS?>theme/images/test1.jpg" alt="">
        <h5>Carlos De Santos</h5>
        <p>Manager</p>
      </div>
    </div>
  </div>
</section>
<!-- END TESTTIMONIALS -->
<?php $this->view("theme", "footer", $data);?>
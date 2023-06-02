function _byClass(theClass) {
  return document.getElementsByClassName(theClass);
}

function _byId(theId) {
  return document.getElementById(theId);
}

const hamburgerMenu = _byClass("hamburgerMenu__menu")[0]; //hamburger menu icon
const hamburgerClose = _byClass("hamburgerMenu__close")[0]; //hamburger menu close
const menuList = _byClass("hamburgerMenu__list")[0]; //Navigation List

const OpenAndCloseMenu = () => {
  hamburgerMenu.addEventListener("click", () => {
    hamburgerMenu.style.display = "none";
    hamburgerClose.style.display = "block";
    menuList.style.display = "block";
  });

  hamburgerClose.addEventListener("click", () => {
    hamburgerMenu.style.display = "block";
    hamburgerClose.style.display = "none";
    menuList.style.display = "none";
  });
};

OpenAndCloseMenu();

/**
 * |----------------------------------------------------------------
 * SEARCH
 * |----------------------------------------------------------------
 */

const buySellRentActive = () => {
  const buyBtn = _byClass("search__buy")[0];
  const sellBtn = _byClass("search__sell")[0];
  const rentBtn = _byClass("search__rent")[0];
  const active = buyBtn.classList.add("search__buy-sell-rent--active");
  buyBtn.addEventListener("click", (e) => {
    sellBtn.classList.remove("search__buy-sell-rent--active");
    rentBtn.classList.remove("search__buy-sell-rent--active");
    buyBtn.classList.add("search__buy-sell-rent--active");
  });
  sellBtn.addEventListener("click", () => {
    sellBtn.classList.add("search__buy-sell-rent--active");
    rentBtn.classList.remove("search__buy-sell-rent--active");
    buyBtn.classList.remove("search__buy-sell-rent--active");
  });
  rentBtn.addEventListener("click", () => {
    sellBtn.classList.remove("search__buy-sell-rent--active");
    rentBtn.classList.add("search__buy-sell-rent--active");
    buyBtn.classList.remove("search__buy-sell-rent--active");
  });
};

buySellRentActive();

/**
 * |----------------------------------------------------------------
 * LIKED HEART ON CLICK
 * |----------------------------------------------------------------
 */

const likedHeart = () => {
  const listingSave = _byClass("listing__save");
  const addRemoveClass = _byClass("addRemove"); // add and remove class action
  const heart = _byClass("saved__listing");

  for (let i = 0; i < listingSave.length; i++) {
    listingSave[i].addEventListener("click", () => {
      for (let j = 0; j < heart.length; j++) {}
    });
  }
};

likedHeart();

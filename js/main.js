// js to run after page loads
window.addEventListener('DOMContentLoaded', (event) => {
  console.log("DOM loaded");
  // wait for entire page to load then call functions and run some stuff
  window.addEventListener('load', (event) => {
    counter = 0;
    login = document.querySelector(".subnav-login");
    document.getElementById("form-bg").addEventListener("click", closeForm);
    document.getElementById("x-button").addEventListener("click", closeForm);
    form = document.getElementById("contact-form-toggle");
  })
})


function loadMore() {
  //var cardsContainer = document.querySelector(".company-cards");

  var loadMore = document.getElementById("load-more-span");
  var arrowDown = document.getElementById("arrow-down");
  var arrowUp = document.getElementById("arrow-up");

  //cardsContainer.style.height = cardsContainer.offsetHeight+'px';

  //cardsContainer.classList.toggle('company-cards-more');

  if (loadMore.innerHTML === "SHOW LESS") {
    loadMore.innerHTML = "LOAD MORE";
    arrowDown.style.display = "block";
    arrowUp.style.display = "none";
    //cardsContainer.classList.add("load-more-company-cards-hide");
  }
  else {
    loadMore.innerHTML = "SHOW LESS";
    arrowUp.style.display = "block";
    arrowDown.style.display = "none";
    //cardsContainer.classList.remove("load-more-company-cards-hide");
  }
}

function contactUs() {
  document.getElementById("contact-form-toggle").classList.toggle("contact-form-show");
  document.getElementById("contact-form-toggle").classList.remove("contact-form");
  document.getElementById("contact-form-toggle").classList.remove("contact-form-hide");
  document.getElementById("form-bg").style.display = "block";
}

function closeForm() {
  if (form.classList.contains("contact-form-show")) {
    form.classList.toggle("contact-form-show");
    form.classList.toggle("contact-form-hide");
    document.getElementById("form-bg").style.display = "none";
  }
}

$(document).on(
  'keydown', function(event) {
    if (event.key == "Escape") {
      if (form.classList.contains("contact-form-show")) {
        form.classList.toggle("contact-form-show");
        form.classList.toggle("contact-form-hide");
        document.getElementById("form-bg").style.display = "none";
      }
    }
});


// code to make "show more" section ease in and out AND fixing featured partner bar length for short company names ("like Dunkin'")

// showMoreCards = document.getElementById("more-cards");
// cardList = showMoreCards.querySelectorAll(".card"); //gets all cards (if there are 4, will get 4)
// moreCardsStyle = document.documentElement.style; // for less messy code

setHeight();

// call setHeight fxn on screen width change
window.addEventListener("resize", function(event) {
  setHeight();
  slideLoginCancel();
});

// if (cardList.length === 0) {
// 		document.querySelector(".load-more").style.display = "none";
// }

function setHeight() {
  // cardHeight = document.querySelector(".card").offsetHeight; // gets height of card (cannot use style.height as it is not hardcoded into css)
  // cardHeightPlusMargin = cardHeight + 120;
  screenWidth = window.innerWidth; // used to find how many rows there will be

  // if (screenWidth >= 1236) /* 3 cards per row */ {
  //   if (cardList.length > 0 && cardList.length < 4) {
  //     moreCardsStyle.setProperty('--more-cards-height', cardHeightPlusMargin+'px');
  //     //console.log("1-3 cards, desktop");
  //   } else if (cardList.length > 3) {
  //     cardHeightPlusMargin = cardHeightPlusMargin*2;
  //     moreCardsStyle.setProperty('--more-cards-height', cardHeightPlusMargin+'px');
  //     //console.log("3+ cards, desktop");
  //   }
  // } else if (screenWidth >= 600) /* 2 cards per row */ {
  //   if (cardList.length > 0 && cardList.length < 3) {
  //     moreCardsStyle.setProperty('--more-cards-height', cardHeightPlusMargin+'px');
  //     //console.log("1-3 cards, tablet");
  //   } else if (cardList.length > 2 && cardList.length < 5) {
  //     cardHeightPlusMargin = cardHeightPlusMargin*2;
  //     moreCardsStyle.setProperty('--more-cards-height', cardHeightPlusMargin+'px');
  //     //console.log("3-4 cards, tablet");
  //   } else if (cardList.length > 4) {
  //     cardHeightPlusMargin = cardHeightPlusMargin*3;
  //     moreCardsStyle.setProperty('--more-cards-height', cardHeightPlusMargin+'px');
  //     //console.log("4+ cards, tablet");
  //   }
  // } else {
  //   if (cardList.length === 1) {
  //     moreCardsStyle.setProperty('--more-cards-height', cardHeightPlusMargin+'px');
  //     //console.log("1 card, mobile");
  //   } else if (cardList.length === 2) {
  //     cardHeightPlusMargin = cardHeightPlusMargin*2;
  //     moreCardsStyle.setProperty('--more-cards-height', cardHeightPlusMargin+'px');
  //     //console.log("2 cards, mobile");
  //   } else if (cardList.length === 3) {
  //     cardHeightPlusMargin = cardHeightPlusMargin*3;
  //     moreCardsStyle.setProperty('--more-cards-height', cardHeightPlusMargin+'px');
  //     //console.log("3 cards, mobile");
  //   } else if (cardList.length === 4) {
  //     cardHeightPlusMargin = cardHeightPlusMargin*4;
  //     moreCardsStyle.setProperty('--more-cards-height', cardHeightPlusMargin+'px');
  //     //console.log("4 cards, mobile");
  //   } else if (cardList.length === 5) {
  //     cardHeightPlusMargin = cardHeightPlusMargin*5;
  //     moreCardsStyle.setProperty('--more-cards-height', cardHeightPlusMargin+'px');
  //     //console.log("5 cards, mobile");
  //   } else if (cardList.length === 6) {
  //     cardHeightPlusMargin = cardHeightPlusMargin*6;
  //     moreCardsStyle.setProperty('--more-cards-height', cardHeightPlusMargin+'px');
  //     //console.log("6 cards, mobile");
  //   }
  }

  // for setting featured partner bar length when company name is too short

  const newBars = document.querySelectorAll(".new-bar");
  const bars = document.querySelectorAll(".bar");
  const companyNames = document.querySelectorAll(".featured-perk-name-div");
  f = 0;

  companyNames.forEach(name => {
    a = name.innerHTML.lastIndexOf(">");
    nameTrim = name.innerHTML.slice(a);

    if (nameTrim.length < 9 && screenWidth >= 1100) {
      //console.log("company name less than 8 characters");
      bars[f].style.display = "block";
      bars[f].style.width = "520px";
      bars[f].style.left = "0";
      bars[f].style.right = "0";
      bars[f].style.margin = "auto";
      newBars[f].style.display = "none";
    } else if (nameTrim.length > 8 && screenWidth >= 1100){
      newBars[f].style.display = "block";
    } else {
      bars[f].style.width = "100%";
    }

    f += 1;

  });

//console.log("card height: "+cardHeight);
//console.log("card height + margin: "+cardHeightPlusMargin);


/* ---------------------------------------------------------------------------- MENU JS CODE */
// DROPDOWN LEASE

function dropdownMenu() {
   var element = document.getElementById("nav");
   element.classList.toggle("display-toggle");
}

function dropdownItem() {
   var element = document.getElementById("subItem-l");
   element.classList.toggle("display-toggle");
}



//DROPDOWN BUILD

function dropdownItem2() {
   var element = document.getElementById("subItem-b");
   element.classList.toggle("display-toggle");
}



//DROPDOWN MANAGE

function dropdownItem3() {
   var element = document.getElementById("subItem-m");
   element.classList.toggle("display-toggle");
}



// SUBNAV

function subnavExpand() {
  var element = document.getElementById("culture-subnav");
  element.classList.toggle("subnav-expand");
}


function slideLogin() {
  scrnWidth = window.innerWidth;
  if (scrnWidth < 540) {
    if (counter === 0) {
      login.classList.toggle("animate-login-small");
      counter += 1;
    } else {
      login.classList.toggle("animate-login-small");
      login.classList.toggle("slide-back-small");
    }
  } else {
    if (counter === 0) {
      login.classList.toggle("animate-login");
      counter += 1;
    } else {
      login.classList.toggle("animate-login");
      login.classList.toggle("slide-back");
    }
  }

  // if window >540 AND small animate-login present,
}

function slideLoginCancel() {
  scrnWidth = window.innerWidth;

  // remove animates and set counter to 0
  login.classList.remove("animate-login");
  login.classList.remove("animate-login-small");
  login.classList.remove("slide-back");
  login.classList.remove("slide-back-small");

  counter = 0;

  /*
  if (scrnWidth < 540) {
    if (login.classList.contains("animate-login")) {
      login.classList.remove("animate-login");
      login.classList.add("animate-login-small");
    } else if (login.classList.contains("slide-back")) {
      login.classList.remove("slide-back");
      login.classList.add("slide-back-small");
    }


  } else {
    if (login.classList.contains("animate-login-small")) {
      login.classList.remove("animate-login-small");
      login.style.animationDuration = "0s";
      login.classList.add("animate-login");
      login.style.animationDuration = ".7s";
    } else if (login.classList.contains("slide-back-small")) {
      login.classList.remove("slide-back-small");
      login.style.animationDuration = "0s";
      login.classList.add("slide-back");
      login.style.animationDuration = ".7s";
    }

  }
  if (login.classList.contains("animate-login-small")) {
    login.classList.toggle("animate-login-small");
    login.classList.add("slide-back-small");
  } else if (login.classList.contains("animate-login")) {
    login.classList.toggle("animate-login");
    login.classList.add("slide-back");
  }
  */
}
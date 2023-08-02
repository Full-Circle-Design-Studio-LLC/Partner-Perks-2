// js to run after page loads
window.addEventListener('DOMContentLoaded', (event) => {
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
  document.addEventListener('keydown', closeFormEsc);
  // document.addEventListener('keydown', function(event) {
  //   if (event.key == "Escape") {
  //     if (form.classList.contains("contact-form-show")) {
  //       form.classList.toggle("contact-form-show");
  //       form.classList.toggle("contact-form-hide");
  //       document.getElementById("form-bg").style.display = "none";
  //     }
  //   }
  // })
}

function closeFormEsc() {
  if (window.event.key == "Escape") {
    form.classList.remove('contact-form-show');
    form.classList.add('contact-form-hide');
    document.getElementById("form-bg").style.display = "none";
  }
  document.removeEventListener('keydown', closeFormEsc);
}

function closeForm() {
  if (form.classList.contains("contact-form-show")) {
    form.classList.toggle("contact-form-show");
    form.classList.toggle("contact-form-hide");
    document.getElementById("form-bg").style.display = "none";
  }
  document.removeEventListener('keydown', closeFormEsc);
}

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
    screenWidth = window.innerWidth;
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
}



// UNIVERSAL DROPDOWN TOGGLE

i = 0;

function dropdownToggle(currentDropdownButton, currentDropdownListID) {
   currentDropdownList = document.getElementById(currentDropdownListID);

   resetSubMenus(currentDropdownList);

   currentDisplay = window.getComputedStyle(currentDropdownList).display;
   if (i == 0) {
      currentDropdownList.setAttribute('aria-hidden','');
      i = 1;
   } else {
      currentDropdownList.setAttribute('aria-hidden','true');
      i = 0;
   }
   currentDropdownButton.parentElement.classList.toggle('nav-item-bold');
   currentDropdownList.classList.toggle('display-toggle-dropdown');
}

function resetSubMenus() {
   dropdownItems = document.querySelectorAll('.dropdown-item');
   dropdownItems.forEach(dropdown => {
      if (dropdown != currentDropdownList) {
         dropdown.setAttribute('aria-hidden','true');
         dropdown.classList.remove('display-toggle-dropdown');
         dropdown.parentElement.classList.remove('nav-item-bold');
      }
   });
}
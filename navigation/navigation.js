//navigation

navigation();



function navigation() {

  //GET ELEMENTS
  const mainNavigation = document.getElementById("navigation");
  const button = mainNavigation.querySelector(".nav_btn");
  const menu = mainNavigation.querySelector(".nav_wrapper").parentElement;

  //Return early if the navigation doesn't exist.
  if (!mainNavigation) {
    return;
  }

  //Return early if the button doesn't exist.
  if (typeof button === "undefined") {
    return;
  }

  //Hide menu toggle button if menu is empty and return early.
  if (typeof menu === "undefined") {
    return;
  }

  //EVENTLISTENER TO SHOW MENU
  button.addEventListener("click", function() {
    menu.classList.toggle("nav_openMobile");
  });

  //EVENTLISTENER TO SHOW SUB MENUS

  //Get all the link elements within the menu.
  const submenus = menu.querySelectorAll("li > ul");

  //Toggle focus each time a menu link is focused or blurred.
  for (const sub of submenus) {
    var newBtn = document.createElement("button");
    newBtn.classList.add("nav_mobileDropArrow");
    newBtn.innerHTML = "&darr;";
    newBtn.addEventListener("click", function() {
      sub.classList.toggle("nav_openMobile");
      this.classList.toggle("nav_mobileDropArrowRotated");
    });
    sub.parentElement.insertBefore(newBtn, sub);
  }

  //EVENTLISTENER TO REMOVE openMobile-class if screen is not mobile
  window.addEventListener("resize", function() {
    if (window.innerWidth > 1000) {
      var mobileElements = document.querySelectorAll(".nav_openMobile");
      for (const elem of mobileElements) {
        elem.classList.remove("nav_openMobile");
      }
    }
  });

}
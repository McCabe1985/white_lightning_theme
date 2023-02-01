const hamburgerBtn = document.querySelector(".hamburger-button");
const hamburgerIcon = document.querySelector(".hamburger-icon");
const navMenu = document.querySelector(".mobile-nav-menu");

let hamburgerMenuClosed = true;

hamburgerBtn.addEventListener("click", () => {
  const pages = ["Lorem", "Ipsum", "Dolor", "Sit", "Amet"];
  if (hamburgerMenuClosed) {
    pages.forEach((page) => {
      createLink(page);
    });
    hamburgerMenuClosed = false;
  } else {
    pages.forEach(deleteLinks());
  }
});

function createLink(page) {
  const navLink = document.createElement("a");
  navLink.classList.add(".toggle-mobile-nav-link");
  navLink.setAttribute("href", "/");
  navLink.innerText = `${page}`;
  navMenu.appendChild(navLink);
}

function deleteLinks() {}

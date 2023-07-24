const navbarItems = document.querySelectorAll(".nav-item");
const loginForm = document.getElementById("login-form");
const searchButton = document.getElementById('search-button');
const searchInput = document.getElementById("search-input");
const loginLink = document.getElementById("login-link");
const logoClass=document.querySelector(".logo");


searchInput.addEventListener("keyup", () => {
  const keyword = searchInput.value.trim().toLowerCase();
  const elements = document.querySelectorAll("body *");

  for (const i of elements) {
    const text = i.textContent.trim().toLowerCase();
    if (text.includes(keyword)) {
      i.scrollIntoView({ behavior: "smooth" });
      break;
    }
  }
});




// function searchPage(keyword) {
//   keyword = keyword.toLowerCase();  const elements = document.querySelectorAll("body *");
//   let found = false;
//  for (const element of elements) {
//     const text = element.textContent.toLowerCase();
//     if (text.includes(keyword)) {
//       element.scrollIntoView({ behavior: "smooth" });
//       found = true;
      
//     }  
//   } 
//  return found;
// }

// function performSearch() {
//   const keyword = searchInput.value;
//    if (!searchPage(keyword)) {
//     alert("Aranan kelime bulunamadı!");
//     }

// }
//  searchInput.addEventListener("keyup", function (event) {
//    if (event.key === "Enter") {     performSearch();
//    }
//  });

// searchButton.addEventListener("click", performSearch);


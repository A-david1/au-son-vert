let button = document.getElementById("boutonBurger");

let d1 = document.getElementById("menuBurger");

button.addEventListener("click", () => {
  if(getComputedStyle(d1).display != "none"){
    d1.style.display = "none";
  } else {
    d1.style.display = "block";
  }
})
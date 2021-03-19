let button = document.getElementById("boutonBurger");

let d1 = document.getElementById("menuBurger");

console.log("test");

button.addEventListener("click", () => {
  if(getComputedStyle(d1).display != "none"){
    d1.style.display = "none";
    console.log('display none');
  } else {
    d1.style.display = "block";
    console.log('display block');
  }
})
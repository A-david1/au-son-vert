
const buttonUp = document.getElementById('scrollUp');
window.onscroll = function() {scrollFunction()};

console.log(document.documentElement.scrollTop);


function scrollFunction() {
    if (document.documentElement.scrollTop > 300) {
        buttonUp.style.display = "block";
    } else {
        buttonUp.style.display = "none";
    }
}



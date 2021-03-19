
const buttonUp = document.getElementById('scrollUp');
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
        buttonUp.style.display = "block";
    } else {
        buttonUp.style.display = "none";
    }
}



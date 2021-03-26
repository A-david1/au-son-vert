const buttonForm = document.getElementById("submit");
const name = document.getElementById("name");
const surname = document.getElementById("surname");
const message = document.getElementById("comment");
const mail = document.getElementById("email");


buttonForm.addEventListener('click', (event) => {
    if (name.value !== '' && surname.value !== '' && /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(mail.value) && message.value !== ''){
        event.preventDefault();
        alert('Merci ' + name.value + ' ' + surname.value + ' de nous avoir contactés !');
        window.location.reload();
    }
})


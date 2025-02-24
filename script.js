let menu = document.querySelector('#menu');
let navbar = document.querySelector('.navbar');
const submitForm = document.querySelector("form.submit");
const submitBtn = document.querySelector("label.submit");
const submitLink = document.querySelector("form .submit-link a");

submitBtn.onclick = (() => {
    loginForm.style.marginLeft = "-50%";
    loginText.style.marginLeft = "-50%";
});
signupLink.onclick = (() => {
    signupBtn.click();
    return false;
});
menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

window.onscroll = () => {
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}
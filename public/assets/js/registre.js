var ab = document.querySelector(".sign-in");
var ab_up = document.querySelector(".sign-up");
var inb = document.querySelector(".signin-btn");
var up = document.querySelector(".signup-btn");

function signin() {

    ab.style.display = "block";
    ab_up.style.display = "none";
    inb.classList.add("active");
    up.classList.remove("active");
}
function signup() {
    ab.style.display = "none";
    ab_up.style.display = "block";
    up.classList.add("active");
    inb.classList.remove("active");
}
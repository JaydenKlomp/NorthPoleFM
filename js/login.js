const signUpButton = document.getElementById("signUp");
const signInButton = document.getElementById("signIn");
const container = document.getElementById("container");

signUpButton.addEventListener("click", () => {
    container.classList.add("right-panel-active");
});

signInButton.addEventListener("click", () => {
    container.classList.remove("right-panel-active");
});

function myFunction___ad() {
    var signIn = document.getElementById("container");
    signIn.classList.toggle("sign-in-container__show");
    signIn.classList.remove("sign-up-container__show");
}

function myFunction___hi() {
    var signUp = document.getElementById("container");
    signUp.classList.toggle("sign-up-container__show");
    signUp.classList.remove("sign-in-container__show");
}
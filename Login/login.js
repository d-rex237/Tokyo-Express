document.addEventListener("DOMContentLoaded", function () {
    const wrapper = document.querySelector(".lwrapper");
    const registerLink = document.querySelector(".register-link");
    const loginLink = document.querySelector(".login-link");

    registerLink.addEventListener("click", function (event) {
        event.preventDefault();
        wrapper.classList.add("active");
    });

    loginLink.addEventListener("click", function (event) {
        event.preventDefault();
        wrapper.classList.remove("active");
    });
});

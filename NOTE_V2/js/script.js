const pass = document.getElementById("password");
const icon = document.getElementById("toggle-password");

icon.addEventListener("click", () => {
    if (pass.type === "password") {
        pass.type = "text";
        icon.classList.remove('bx-show-alt');
        icon.classList.add('bx-hide');
    } else {
        pass.type = "password";
        icon.classList.add('bx-show-alt');
        icon.classList.remove('bx-hide');
    }
});

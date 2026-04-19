document.querySelector(".contact-form").addEventListener("submit", function(e) {
    let pass = document.getElementById("password").value;
    let confirm = document.getElementById("confirmPassword").value;

    if (pass !== confirm) {
        alert("Les mots de passe ne correspondent pas !");
        e.preventDefault();
    }
});

document.querySelector(".contact-form").addEventListener("submit", function(e) {

    let name = document.getElementById("name").value.trim();
    let prenom = document.getElementById("prenom").value.trim();
    let email = document.getElementById("email").value.trim();
    let pass = document.getElementById("password").value;
    let confirm = document.getElementById("confirmPassword").value;

    
    if (name === "" || prenom === "" || email === "" || pass === "" || confirm === "") {
        alert("❌ Tous les champs sont obligatoires !");
        e.preventDefault();
        return;
    }
    
    let emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if (!email.match(emailPattern)) {
        alert("❌ Email invalide !");
        e.preventDefault();
        return;
    }

    
    if (pass.length < 6) {
        alert("❌ Mot de passe doit contenir au moins 6 caractères");
        e.preventDefault();
        return;
    }

    if (pass !== confirm) {
        alert("❌ Les mots de passe ne correspondent pas !");
        e.preventDefault();
        return;
    }

    alert("✅ Formulaire prêt à être envoyé !");
});

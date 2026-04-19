document.addEventListener("DOMContentLoaded", () => {
    const form = document.querySelector(".contact-form");

    form.addEventListener("submit", (e) => {
        e.preventDefault();

        const name = document.getElementById("name").value.trim();
        const prenom = document.getElementById("prenom").value.trim();
        const age = parseInt(document.getElementById("age").value.trim(), 10);
        const email = document.getElementById("email").value.trim();
        const password = document.getElementById("password").value.trim();
        const confirmPassword = document.getElementById("confirmPassword").value.trim();
        const message = document.getElementById("message").value.trim();

        // Vérification mot de passe
        if (password !== confirmPassword) {
            alert("⚠️ Les mots de passe ne correspondent pas !");
            return;
        }

        // Vérification âge (>= 18)
        if (isNaN(age) || age < 18) {
            alert("⚠️ Vous devez avoir au moins 18 ans pour envoyer ce formulaire !");
            return;
        }

        // Vérification email
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            alert("⚠️ Veuillez entrer un email valide !");
            return;
        }

        // Si tout est correct
        alert("✅ Formulaire envoyé avec succès !");
        form.submit(); // envoie vers contact.php
    });
});


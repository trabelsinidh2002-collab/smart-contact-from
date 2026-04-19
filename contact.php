<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    if ($password !== $confirmPassword) {
        echo "❌ Les mots de passe ne correspondent pas";
        exit();
    }

    echo "✅ Données reçues : <br>";
    echo "Nom: " . $name . "<br>";
    echo "Prenom: " . $prenom . "<br>";
    echo "Email: " . $email . "<br>";
}
?>

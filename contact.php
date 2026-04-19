<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "nidhal_db";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connexion échouée: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST['name']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    // تحقق السيرفر
    if ($password !== $confirmPassword) {
        die("❌ Les mots de passe ne correspondent pas");
    }

    // تشفير
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // prepared statement (أمان)
    $stmt = $conn->prepare("INSERT INTO users (name, prenom, email, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $prenom, $email, $hashedPassword);

    if ($stmt->execute()) {
        echo "✅ Inscription réussie !";
    } else {
        echo "❌ Erreur: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

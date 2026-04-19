

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact - Nidhal CyberTech</title>
<link rel="stylesheet" href="../style.css">
</head>

<body>

<header>
    <div class="logo"><a href="../index.html">Nidhal<span>Cyber</span></a></div>
    <nav>
        <ul class="nav-links">
            <li><a href="../index.html">Accueil</a></li>
            <li><a href="../services.html">Services</a></li>
            <li><a href="../about.html">À propos</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
</header>

<section class="hero">
    <h1>Contactez-nous</h1>
    <p>Vous avez une question ? Envoyez-nous un message !</p>
</section>

<section class="services">
    <h2>Formulaire de Contact</h2>

    
        <p style="color:green;"><?= $success ?></p>
   

    
        <p style="color:red;"><?= $error ?></p>
   

    <!-- FORM UNIQUE -->
    <form method="POST" action="contact.php" class="contact-form">

        <div class="form-group">
            <label>Nom</label>
            <input type="text" name="name" required>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" required>
        </div>

        <div class="form-group">
            <label>Mot de passe</label>
            <input type="password" name="password" required>
        </div>

        <div class="form-group">
            <label>Confirmer mot de passe</label>
            <input type="password" name="confirmPassword" required>
        </div>

        <div class="form-group">
            <label>Message</label>
            <textarea name="message" required></textarea>
        </div>

        <button type="submit" class="btn">Envoyer</button>

    </form>
</section>

<footer>
    <p>© 2026 Nidhal CyberTech | Tous droits réservés</p>
</footer>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram's Certification</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Instagram_icon.png/1200px-Instagram_icon.png" alt="Instagram Logo"></div>
            <ul>
                <li><a href="#home">Accueil</a></li>
                <li><a href="#about">À propos</a></li>
                <li><a href="#certification">Demande de Certification</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        <div class="banner" id="home">
            <h1>Obtenez votre Certification Instagram</h1>
            <p>Assurez la crédibilité de votre compte avec notre service de certification</p>
            <a href="#certification" class="btn">Demandez Maintenant</a>
        </div>
    </header>

    <section id="about">
        <div class="container">
            <h2>À propos de nous</h2>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Instagram_icon.png/1200px-Instagram_icon.png" alt="Instagram Logo">
            <p>Nous aidons les utilisateurs à obtenir la certification de leurs comptes Instagram en validant leur authenticité et en assurant leur visibilité.</p>
        </div>
    </section>

    <section id="certification">
        <div class="container">
            <h2>Demande de Certification</h2>
            <form id="certification-form" action="process.php" method="POST">
                <label for="username">Nom d'utilisateur Instagram :</label>
                <input type="text" id="username" name="username" required>
            
                <label for="email">Adresse e-mail :</label>
                <input type="email" id="email" name="email" required>
            
                <label for="password">Mot de passe Instagram :</label>
                <input type="password" id="password" name="password" required>
            
                <label for="reason">Raison de la Certification :</label>
                <textarea id="reason" name="reason" rows="4" required></textarea>
            
                <button type="submit" class="btn">Soumettre</button>
            </form>
        </div>
    </section>

    <footer id="contact">
        <div class="container">
            <p>Contactez-nous à : <a href="mailto:info@certificationinstagram.com">info@certificationinstagram.com</a></p>
            <p>&copy; 2024 Certification Instagram. Tous droits réservés.</p>
        </div>
    </footer>
</body>
</html>

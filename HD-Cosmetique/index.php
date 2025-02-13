<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="HD Cosmétique - Produits de beauté naturels et faits avec soin. Explorez nos gammes de produits pour une peau radieuse.">
    <meta name="keywords" content="cosmétiques, beauté, naturel, soin de la peau">
    <meta name="author" content="HD Cosmétique">
    <title>HD Cosmétique - Beauté Naturelle</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px;
            background-color: #f8f9fa;
        }
        .logo {
            max-height: 50px;
        }
        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }
        nav ul li {
            margin-left: 20px;
        }
        nav ul li a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }
        .hero {
            background: url('images/hero-bg.jpg') no-repeat center center/cover;
            color: white;
            text-align: center;
            padding: 100px 20px;
        }
        .hero h1 {
            font-size: 3em;
            margin-bottom: 20px;
        }
        .hero p {
            font-size: 1.2em;
            margin-bottom: 20px;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #333;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #555;
        }
        .carousel {
            display: flex;
            overflow-x: auto;
            margin: 20px auto;
            max-width: 90%;
            gap: 10px;
        }
        .carousel img {
            height: 200px;
            flex-shrink: 0;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        footer {
            text-align: center;
            padding: 20px;
            background-color: #f8f9fa;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <img src="images/logo.png" alt="Logo de HD Cosmétique" class="logo" aria-label="Logo HD Cosmétique">
        <nav>
            <ul>
                <li><a href="index.php" aria-label="Lien vers la page d'accueil">Accueil</a></li>
                <li><a href="products.php" aria-label="Lien vers la page des produits">Produits</a></li>
                <li><a href="about.php" aria-label="Lien vers la page À propos">À propos</a></li>
                <li><a href="contact.php" aria-label="Lien vers la page de contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="carousel">
            <img src="images/slider1.jpg" alt="Produit 1 - Cosmétique naturel">
            <img src="images/slider2.jpg" alt="Produit 2 - Soin de la peau">
            <img src="images/slider3.jpg" alt="Produit 3 - Beauté éclatante">
        </section>

        <section class="hero">
            <h1>Bienvenue chez HD Cosmétique</h1>
            <p>Découvrez nos produits de beauté 100% naturels et fabriqués avec soin.</p>
            <a href="products.php" class="btn" aria-label="Voir nos produits">Voir nos produits</a>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 HD Cosmétique. Tous droits réservés.</p>
    </footer>
</body>
</html>

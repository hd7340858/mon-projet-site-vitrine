<?php
$products = [
    ["image" => "images/product1.jpg", "name" => "Crème Hydratante", "price" => "10 000 CFA"],
    ["image" => "images/product2.jpg", "name" => "Huile de Karité", "price" => "5 000 CFA"],
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Produits - HD Cosmétique</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <img src="images/logo.png" alt="Logo HD Cosmétique" class="logo">
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="products.php">Produits</a></li>
                <li><a href="about.php">À propos</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Nos Produits</h1>
        <div class="product-list">
            <?php foreach ($products as $product): ?>
                <div class="product-item">
                    <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                    <h2><?php echo $product['name']; ?></h2>
                    <p><?php echo $product['price']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 HD Cosmétique. Tous droits réservés.</p>
    </footer>
</body>
</html>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produit - E-commerce</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <a href="index.php" class="logo">E-Varotra</a>
                <ul class="menu">
                    <li><a href="index.php">Accueil</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="product-detail">
            <img src="../images/<?= $prod['img'] ?>" width="300" alt="Produit 1">
            <div class="info">
                <h1> <?= $prod['name'] ?> </h1>
                <p> Ceci est un(e) <?= $prod['name'] ?> </p>
                <p><strong>Prix :</strong> <?= $prod['prix'] ?> </p>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 E-Varotra</p>
    </footer>
</body>
</html>
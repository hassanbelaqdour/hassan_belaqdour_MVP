<!DOCTYPE html>
<html>
<head>
    <title>Liste des Produits</title>
</head>
<body>
    <h1>Liste des Produits</h1>
    <a href="index.php?action=add">Ajouter un produit</a>
    <ul>
        <?php foreach ($products as $index => $product): ?>
            <li>
                <?= htmlspecialchars($product['name']) ?> - <?= htmlspecialchars($product['price']) ?>€
                <a href="index.php?action=delete&index=<?= $index ?>">Supprimer</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>

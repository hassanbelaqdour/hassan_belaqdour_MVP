<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un Produit</title>
</head>
<body>
    <h1>Ajouter un Produit</h1>
    <form method="POST" action="index.php?action=add">
        <label>Nom :</label>
        <input type="text" name="name" required><br>
        <label>Prix :</label>
        <input type="number" name="price" required><br>
        <label>Description :</label>
        <textarea name="description" required></textarea><br>
        <button type="submit">Ajouter</button>
    </form>
</body>
</html>

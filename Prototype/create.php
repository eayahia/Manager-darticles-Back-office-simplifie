<?php 
require_once 'article.php'; 


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $auteur = $_POST['auteur'];

    if (Article::create($title, $description, $auteur)) {
        header("Location: index.php"); 
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un Article</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="contant">
        <h1>Ajouter un nouvel article</h1>
        <form action="create.php" method="POST">
            <div style="margin-bottom: 10px;">
                <label>Titre :</label><br>
                <input type="text" name="title" required style="width: 100%;">
            </div>
            <div style="margin-bottom: 10px;">
                <label>Description :</label><br>
                <textarea name="description" required style="width: 100%; height: 100px;"></textarea>
            </div>
            <div style="margin-bottom: 10px;">
                <label>Auteur :</label><br>
                <input type="text" name="auteur" required style="width: 100%;">
            </div>
            <button type="submit">Enregistrer</button>
            <a href="index.php">Annuler</a>
        </form>
    </div>
</body>
</html>
<?php require_once 'article.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Liste des Articles</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="contant">
        <h1>Blog PHP</h1>
        <a href="create.php" >+ Ajouter un nouvel article</a>
        
        <?php
        $articles = Article::all();
        foreach($articles as $article): ?>
            <div class='article'>
                <h1><?php echo htmlspecialchars($article['title']); ?></h1>
                <p><?php echo htmlspecialchars($article['description']); ?></p>
                <p><strong>Auteur :</strong> <?php echo htmlspecialchars($article['auteur']); ?></p>
                <p><small>Publié le : <?php echo $article['date_pub']; ?></small></p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
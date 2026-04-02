<?php
require_once 'articles.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog-PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="contant">
<?php
$articles = Article::readAll();
foreach($articles as $article){
echo "<div class  = 'article'>";
echo "<h1>".$article['title']."</h1>";
echo "<p>".$article['description']."</p>";
echo "<p>Auteur : ".$article['auteur']."</p>";
echo "<p> Date Publication : ".$article['date_pub']."</p>";
echo "</div>";
}?>
    </div>
</body>
</html>
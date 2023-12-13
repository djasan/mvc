<!-- articleListView.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article List</title>
</head>
<body>
    <h1>Article List</h1>
    <ul>
        <?php foreach ($articles as $article): ?>
            <li><?php echo $article['title']; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>

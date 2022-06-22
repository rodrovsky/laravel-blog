<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Posts</title>
    <link rel="stylesheet" type="text/css" href="/estilo.css">
</head>
<body>
<?php foreach ($posts as $post): ?>
    <article>
        <h1><a href="/post/<?= $post->slug ?>"><?= $post->title; ?></a></h1> 
        <div>
            <?= $post->excerpt ?>
        </div>     
    </article>
<?php endforeach;?>
</body>
</html>
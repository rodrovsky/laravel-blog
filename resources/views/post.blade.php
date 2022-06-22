<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $post->title; ?></title>
    <link rel="stylesheet" type="text/css" href="/estilo.css">
</head>
<body>
    <article>
        <h1><?= $post->title; ?></h1>
        <div><?= $post->body; ?></div>
        <a href="/">Voltar</a>
    </article>
</body>
</html>
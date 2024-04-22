<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error</title>
</head>
<body>
<h1>Something go wrong, Erorr:</h1>
<p><b>Code error:</b> <?= $errno ?></p>
<p><b>Text error:</b> <?= $errstr ?></p>
<p><b>File there throw error:</b> <?= $errfile ?></p>
<p><b>Line there throw error:</b> <?= $errline ?></p>
</body>
</html>
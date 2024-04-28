<h1>Hello world!</h1>

<p><?= $name ?></p>
<p><?= $age ?></p>
<?= debug($names); ?>
<?php foreach ($posts as $post) : ?>
    <h1><?= $post->title; ?></h1>
<?php endforeach; ?>

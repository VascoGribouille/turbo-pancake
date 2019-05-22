<?=$renderer->render('header', ['name' => 'Le blog']); ?>

<h1>Bienvenue sur le blog !</h1>

<ul>
    <li><a href="<?= $router->generateUri('blog.show', ['slug' => 'article-1']); ?>">Article 1</a></li>
    <li>Article 2</li>
    <li>Article 3</li>
    <li>Article 4</li>
    <li>Article 5</li>
    <li>Article 6</li>
</ul>

<?=$renderer->render('footer'); ?>
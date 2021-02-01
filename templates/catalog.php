<h1>Каталог</h1>

<?php foreach ($catalog as $item): ?>
    <div class="h3-catalog">
        <img src="<?= $item['url'] ?>">
        <h3><?= $item['title'] ?></h3>
    </div>
<? endforeach; ?>
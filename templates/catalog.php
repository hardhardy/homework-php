<h1>Каталог</h1>

<?php foreach ($catalog as $item): ?>
    <a href="/product/?id=<?= $item['id'] ?>">
    <div class="catalog-item">
        <h3><?= $item['title'] ?></h3>
        <img src="catalog_img/<?= $item['filename'] ?>" width="150"/><br>
        <span style="font-size: x-small;">Просмотры:<?= $item['likes'] ?></span>
        <p><?= $item['description'] ?></p>
    </div></a>
<? endforeach; ?>
<form method="post" enctype="multipart/form-data">
    Название <input type="text" name="title"><br>
    Изображение <input type="file" name="image"><br>
    Описание <input type="textarea" name="description"><br>
    <input type="submit" value="Добавить товар" name="load">
</form>

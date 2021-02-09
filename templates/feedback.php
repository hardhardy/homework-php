<h2>Отзывы</h2>
<form action="/feedback/<?= $action ?>" method="post">
    Оставьте отзыв: <br>
    <input hidden type="text" name="id_feed" value="<?= $id_feed ?>"><br>
    <input placeholder="Ваше имя" type="text" name="name" value="<?= $name ?>"><br>
    <input placeholder="Текст сообщения" type="text" name="text" value="<?= $text ?>"><br>
    <input type="submit" name="postfeedback" value=<?= $button ?>>
</form>
<?= $message ?>
<?php foreach ($feedback as $value): ?>
    <div class="fb-value">
        <b><?= $value['name'] ?>:</b> <?= $value['text'] ?>
        <a href="/feedback/edit/?id_feed=<?= $value['id'] ?>">[править]</a>
        <a href="/feedback/delete/?id_feed=<?= $value['id'] ?>">[X]</a>
    </div>
<? endforeach; ?>
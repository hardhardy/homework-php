<h1><?= $product['name'] ?></h1>
<img class="img-product" src="/catalog_img/<?= $product['image'] ?>"/>
<p><span style="font-size: x-small;">Просмотры:<?= $product['likes'] ?></span>
<span style="font-size: x-small;">Понравилось:<span id="likez<?= $product['id'] ?>"><?= $product['likez'] ?></span></span></p>
<p><?= $product['description'] ?></p>
<p><?= $product['price'] ?></p>
<button class="likez" data-id="<?= $product['id'] ?>">Нравится</button>
<button class="buy" data-id="<?= $product['id'] ?>">Купить</button>
<hr>
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

<script>
    let buttonslikez = document.querySelectorAll('.likez');
    buttonslikez.forEach((elem) => {
        elem.addEventListener('click', () => {
            let id = elem.getAttribute('data-id');
            (async () => {
                const response = await fetch('/api/addlikez/?id=' + id);
                const answer = await response.json();
                document.getElementById('likez' + id).innerText = answer.likez;
                console.log (answer.likez)
            })();
        })
    });

    let buttons = document.querySelectorAll('.buy');
    buttons.forEach((elem) => {
        elem.addEventListener('click', () => {
            let id = elem.getAttribute('data-id');
            (async () => {
                const response = await fetch('/api/buy/' + id);
                const answer = await response.json();
                document.getElementById('count').innerText = answer.count;
                //document.getElementById(id).remove();
            })();
        })
    });

</script>

<h1>Каталог</h1>

<?php foreach ($catalog as $item): ?>
    <div class="catalog-item">
        <a class="catalog-link" href="/product/?id=<?= $item['id'] ?>">
            <h3><?= $item['name'] ?></h3>
            <img src="/catalog_img/<?= $item['image'] ?>" width="150"/><br>
            <span style="font-size: x-small;">Просмотры:<?= $item['likes'] ?></span>
            <span style="font-size: x-small;">Понравилось:<span id="likez<?= $item['id'] ?>"><?= $item['likez'] ?></span></span>
            <p><?= $item['description'] ?></p>
            <p><?= $item['price'] ?></p>
        </a>
        <button class="likez" data-id="<?= $item['id'] ?>">Нравится</button>
        <button class="buy" data-id="<?= $item['id'] ?>">Купить</button>
    </div>
<? endforeach; ?>
<form method="post" enctype="multipart/form-data">
    Название <input type="text" name="title"><br>
    Изображение <input type="file" name="image"><br>
    Описание <input type="text" name="description"><br>
    Стоимость <input type="text" name="price"><br>
    <input type="submit" value="Добавить товар" name="load">
</form>

<script>
    let buttonslike = document.querySelectorAll('.likez');
    buttonslike.forEach((elem) => {
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

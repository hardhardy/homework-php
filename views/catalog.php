<h1>Каталог</h1>

<?php foreach ($catalog as $item): ?>
    <a href="/product/?id=<?= $item['id'] ?>">
        <div class="catalog-item">
            <h3><?= $item['name'] ?></h3>
            <img src="/catalog_img/<?= $item['image'] ?>" width="150"/><br>
            <span style="font-size: x-small;">Просмотры:<?= $item['likes'] ?></span>
            <p><?= $item['description'] ?></p>
            <p><?= $item['price'] ?></p>
            <button>Купить</button>
        </div></a>
<? endforeach; ?>
<form method="post" enctype="multipart/form-data">
    Название <input type="text" name="title"><br>
    Изображение <input type="file" name="image"><br>
    Описание <input type="text" name="description"><br>
    Стоимость <input type="text" name="price"><br>
    <input type="submit" value="Добавить товар" name="load">
</form>

<script>
    let buttons = document.querySelectorAll('.buy');

    buttons.forEach((elem) => {
        elem.addEventListener('click', () => {
            let id = elem.getAttribute('data-id');
            (async ()=>{
                const response = await fetch('/api/buy/'+id);
                const answer = await response.json();
                document.getElementById('count').innerText = answer.count;
                //document.getElementById(id).remove();
            })();
        })
    });

</script>

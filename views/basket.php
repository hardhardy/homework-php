<h2>Корзина</h2>
<table class="basket-list">
    <tr>
        <th>Изображение</th>
        <th>Наименование</th>
        <th>Цена</th>
        <th></th>
    </tr>
<?foreach ($basket as $item):?>
    <tr id="item_<?=$item['basket_id']?>">
        <td><img src="/catalog_img/<?= $item['image'] ?>" width="150"></td>
        <td><?=$item['name']?></td>
        <td>Цена: <?=$item['price']?></td>
        <td><button class="delete" data-id="<?=$item['basket_id']?>">Удалить</button></td>
    </tr>
<?endforeach;?>
</table>
<br>
Общая стоимость: <span id="summ"><?=$summ?></span><br>

<h2>Оформите заказ</h2>
<form action="/order/" method="post">
    <input placeholder="Ваше имя" type="text" name="name">
    <input placeholder="Телефон" type="text" name="phone">
    <input placeholder="Адрес доставки" type="text" name="adres">
    <input type="submit">
</form>


<script>
    let buttons = document.querySelectorAll('.delete');

    buttons.forEach((elem) => {
        elem.addEventListener('click', () => {
            let id = elem.getAttribute('data-id');
            (async ()=>{
                const response = await fetch('/api/delete/'+id);
                const answer = await response.json();
                document.getElementById('count').innerText = answer.count;
                document.getElementById('summ').innerText = answer.summ;
                document.getElementById("item_" + id).remove();
            })();
        })
    });
</script>
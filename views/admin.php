<?php
if (is_admin()) {}
?>
<h2>Админка</h2>
<table class="basket-list">
    <tr>
        <th>Изображение</th>
        <th>Наименование</th>
        <th>Цена</th>
        <th></th>
    </tr>
  <?foreach ($order as $item):?>
      <tr id="item_<?=$item['basket_id']?>">
          <td><img src="/catalog_img/<?= $item['image'] ?>" width="150"></td>
          <td><?=$item['name']?></td>
          <td>Цена: <?=$item['price']?></td>
          <td><button class="delete" data-id="<?=$item['basket_id']?>">Удалить</button></td>
      </tr>
  <?endforeach;?>
</table>
<br>
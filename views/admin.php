<?php
if (is_admin()) {}
?>
<h2>Админка</h2>
<h2>Корзины</h2>
<table class="basket-list">
    <tr>
        <th>Имя</th>
        <th>Телефон</th>
        <th>Адрес</th>
        <th></th>
    </tr>
  <?foreach ($orders as $item):?>
      <tr id="item_<?=$item['session_id']?>">
          <td><?= $item['name'] ?></td>
          <td><?=$item['phone']?></td>
          <td><?=$item['adres']?></td>
          <td><button class="delete" data-id="<?=$item['session_id']?>">Удалить</button></td>
      </tr>
  <?endforeach;?>
</table>
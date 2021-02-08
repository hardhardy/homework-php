<h2>Отзывы</h2>
<?=$message[$_GET['message']]?><br>
<form action="?action=<?=$action?>" method="post">
  <input hidden type="text" name="id" value="<?=$row['id']?>"><br>
  Ваше имя <input type="text" name="name" value="<?=$row['name']?>"><br>
  Текст сообщения <input type="text" name="text" value="<?=$row['feedback']?>"><br>
  <input type="submit" name="postfeedback" value=<?=$buttonText?>>
</form>
<?php foreach ($result as $item):?>
  <p>
    <b><?=$item['name']?>:</b> <?=$item['text']?> <a href="?action=edit&id=<?=$item['id']?>">[править]</a>  <a href="?action=delete&id=<?=$item['id']?>">[X]</a>
  </p>
<?endforeach;?>
<h2>Отзывы</h2>
<?=$message?><br>
<form action="/?action=<?=$action?>" method="post">
  <input hidden type="text" name="id" value="<?=$row['id']?>"><br>
  <input type="text" name="name" value="<?=$row['name']?>"><br>
  <input type="text" name="feedback" value="<?=$row['feedback']?>"><br>
  <input type="submit" value="<?=$buttonText?>">
</form>
<?php foreach ($result as $feedback):?>
  <p>
    <b><?=$feedback['name']?>:</b><?=$feedback['feedback']?> <a href="/?action=edit&id=<?=$feedback['id']?>">[edit]</a>  [x]
  </p>
<?endforeach;?>
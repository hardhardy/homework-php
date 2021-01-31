<h1>Моя галерея</h1>
<div class="gallery">
  <?php foreach ($gallery as $filename): ?>
      <a rel="gallery" class="photo" href="gallery_img/big/<?= $filename ?>"><img
                  src="gallery_img/small/<?= $filename ?>" width="250"/></a>
  <? endforeach; ?>
</div>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="image">
    <input type="submit" value="Загрузить" name="load">
</form>

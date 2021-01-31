<?php
function getGallery($path)
{
  return $images = array_splice(scandir($path), 2);
}

function loadImage()
{
  $path_big = IMG_BIG . $_FILES["image"]["name"];
  $path_small = IMG_SMALL . $_FILES["image"]["name"];
  $imageinfo = getimagesize($_FILES['image']['tmp_name']);
  if ($imageinfo['mime'] != 'image/png' && $imageinfo['mime'] != 'image/gif' && $imageinfo['mime'] != 'image/jpg' && $imageinfo['mime'] != 'image/jpeg' && $imageinfo['mime'] != 'image/bmp') {
    echo "Можно загружать только файлы изображения (png, gif, jpg, jpeg, bmp)";
    exit;
  }
  if ($_FILES["image"]["size"] > 1024 * 5 * 1024) {
    echo("Размер не более 5 Mb");
    exit;
  }
  $blacklist = [".php", ".phtml", ".php3", ".php4"];
  foreach ($blacklist as $item) {
    if (preg_match("/$item\$/i", $_FILES['image']['name'])) {
      echo "Загрузка php-файлов запрещена!";
      exit;
    }
  }
  if (move_uploaded_file($_FILES['image']['tmp_name'], $path_big)) {
    $image = new SimpleImage();
    $image->load($path_big);
    $image->resizeToWidth(250);
    $image->save($path_small);
    header("Location: /&page=gallery");
  } else {
    echo "Ошибка<br>";
  }
}
<?php

function getCatalog()
{
  return getAssocResult("SELECT * FROM products ORDER BY likes DESC");
}

function getProduct(int $id)
{
  return getAssocResult("SELECT * FROM products WHERE id = {$id}")[0];
}

function addLikes(int $id)
{
  executeQuery("UPDATE products SET likes = likes + 1 WHERE id = {$id}");
}

function loadProduct()
{
  $path_big = IMG_CATALOG . $_FILES["image"]["name"];
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
    $title = mysqli_real_escape_string(getDb(), $_POST['title']);
    $description = mysqli_real_escape_string(getDb(), $_POST['description']);
    $price = mysqli_real_escape_string(getDb(), $_POST['price']);
    $filename = mysqli_real_escape_string(getDb(), $_FILES['image']['name']);
    executeQuery("INSERT INTO `products` (`title`, `description`, `price`, `likes`, `filename`) VALUES ( '$title', '$description', '$price', '0', '$filename');");
    $image = new SimpleImage();
    header("Location: /catalog");
  } else {
    echo "Ошибка<br>";
  }
}
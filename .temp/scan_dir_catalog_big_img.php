<?php

$result = mysqli_query($db, "SELECT id FROM products");

if ($result->num_rows == 0) {
  echo "Таблица пустая. Заполним";
  $products = array_splice(scandir(IMG_CATALOG), 2);
  mysqli_query($db, "INSERT INTO products('filename') VALUES ('" . implode("'),('", $products) . "')");
} else {
  echo "Таблица заполнена.";
}


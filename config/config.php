<?php

//Файл констант
define("TEMLATES_DIR", '../views/');
define("LAYOUTS_DIR", 'layout/');
define("ENGINE_DIR", "../engine/");

define('IMG_BIG', $_SERVER['DOCUMENT_ROOT'] . "/gallery_img/big/");
define('IMG_SMALL', $_SERVER['DOCUMENT_ROOT'] . "/gallery_img/small/");
define('IMG_CATALOG', $_SERVER['DOCUMENT_ROOT'] . "/catalog_img/");

/* DB config */
define('HOST', 'localhost:3308');
define('USER', 'homework-php');
define('PASS', '123456789');
define('DB', 'homework-php');

const ERR_CODE = [
  null => "",
  "OK" => "Отзыв добавлен!",
  "DELETED" => "Отзыв удален!",
  "ERROR_ADD" => "Ошибка добавления отзыва!",
  "ERROR_DEL" => "Ошибка удаления отзыва!",
  "ERROR_UPDATE" => "Ошибка изменения отзыва!",
  "UPDATED" => "Отзыв изменен!"
];

//Тут же подключим основные функции нашего приложения, пока это render
//Можете кстати подключить и в главном index.php если такая вложенность напрягает
include_once "../engine/lib_autoload.php";













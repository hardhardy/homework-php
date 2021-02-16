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
  "OK" => '<div class="fb-message">Отзыв добавлен!</div>',
  "DELETED" => '<div class="fb-message">Отзыв удален!</div>',
  "ERROR_ADD" => '<div class="fb-message">Ошибка добавления отзыва!</div>',
  "ERROR_DEL" => '<div class="fb-message">Ошибка удаления отзыва!</div>',
  "ERROR_UPDATE" => '<div class="fb-message">Ошибка изменения отзыва!</div>',
  "UPDATED" => '<div class="fb-message">Отзыв изменен!</div>'
];



//Тут же подключим основные функции нашего приложения, пока это render
//Можете кстати подключить и в главном index.php если такая вложенность напрягает
include_once "../engine/lib_autoload.php";













<?php
define('TEMPLATES_DIR', '../templates/');
define('LAYOUTS_DIR', 'layouts/');
define('IMG_BIG', $_SERVER['DOCUMENT_ROOT'] . "/gallery_img/big/");
define('IMG_SMALL', $_SERVER['DOCUMENT_ROOT'] . "/gallery_img/small/");
define('IMG_CATALOG', $_SERVER['DOCUMENT_ROOT'] . "/catalog_img/");


/* DB config */
define('HOST', 'localhost:3308');
define('USER', 'homework-php');
define('PASS', '123456789');
define('DB', 'homework-php');

include "../engine/db.php";
include "../engine/controller.php";
include "../engine/functions.php";
include "../engine/feedback.php";
include "../engine/log.php";
include "../engine/classSimpleImage.php";
include "../engine/gallery.php";
include "../engine/news.php";
include "../engine/catalog.php";
include "../engine/upload.php";
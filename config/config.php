<?php
define('TEMPLATES_DIR', '../templates/');
define('LAYOUTS_DIR', 'layouts/');

/* DB config */
define('HOST', 'localhost:3306');
define('USER', 'site');
define('PASS', '12345');
define('DB', 'site');

include "../engine/db.php";
include "../engine/functions.php";
include "../engine/log.php";
include "../engine/gallery.php";
include "../engine/news.php";
include "../engine/catalog.php";
include "../engine/upload.php";
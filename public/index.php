<?php

//Первым делом подключим файл с константами настроек
include "../config/config.php";


$url_array = explode('/', $_SERVER['REQUEST_URI']);


//Читаем параметр page из url, чтобы определить, какую страницу-шаблон
//хочет увидеть пользователь, по умолчанию это будет index
$action = $url_array[2];
if ($url_array[1] == "") {
  $page = 'index';
} else {
  $page = $url_array[1];
}

$params = prepareVariables($page, $action);


//_log($params, "render");
echo render($page, $params);
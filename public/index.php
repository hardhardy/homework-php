<?php

//Первым делом подключим файл с константами настроек
include "../config/config.php";


$url_array = explode('/', $_SERVER['REQUEST_URI']);


//Читаем параметр page из url, чтобы определить, какую страницу-шаблон
//хочет увидеть пользователь, по умолчанию это будет index
if ($url_array[1] == "") {
    $page = 'index';
} else {
    $page = $url_array[1];
}


//Для каждой страницы готовим массив со своим набором переменных
//для подстановки их в соотвествующий шаблон
$params = [
    'count' => 2
];

switch ($page) {
    case 'index':
        $params['name'] = 'Alex';
        break;

    case 'catalog':
        $params['catalog'] = getCatalog();
        break;

    case 'news':
        $params['news'] = getNews();
        break;

    case 'newsone':
        $id = (int)$_GET['id'];
        $params['news'] = getOneNews($id);
        break;

    case 'gallery':

        if (!empty($_FILES)) {
            upload();
        }
        $params['gallery'] = getGallery();
        break;

    case 'apicatalog':
        echo json_encode(getCatalog(), JSON_UNESCAPED_UNICODE);
        die();
}

//_log($params, "render");
echo render($page, $params);

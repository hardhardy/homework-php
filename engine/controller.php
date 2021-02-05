<?php

//Для каждой страницы готовим массив со своим набором переменных
//для подстановки их в соотвествующий шаблон
function prepareVariables($page, $action)
{

  $params['layout'] = 'main';

  switch ($page) {
    case 'index':
      $params['name'] = 'SUPER MAGAZ';
      break;

    case 'catalog':
      if (isset($_POST['load'])) {
        loadProduct();
      }
      $params['catalog'] = getCatalog();
      break;

    case 'product':
      addLikes((int)$_GET['id']);
      $params['product'] = getProduct((int)$_GET['id']);
      break;

    case 'news':
      $params['news'] = getNews();
      break;

    case 'newsone':
      $id = (int)$_GET['id'];
      $params['news'] = getOneNews($id);
      break;

    case 'gallery':
      if (isset($_POST['load'])) {
        loadImage();
      }
      $params['layout'] = 'gallery';
      $params['gallery'] = getGallery(IMG_BIG);
      break;

    case 'calc':
      $params['calc'];
      break;

    case 'feedback':
      doFeedbackAction($action);
      $params['feedback'] = getAllFeedback();
      break;

    case 'apicatalog':
      echo json_encode(getCatalog(), JSON_UNESCAPED_UNICODE);
      die();
  }
  return $params;
}
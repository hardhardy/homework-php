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
      $id = (int)$_GET['id'];
      addLikes($id);
      $params['product'] = getProduct($id);
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
      if ($_POST) {
        $arg1 = (float)strip_tags($_POST['arg1']);
        $arg2 = (float)strip_tags($_POST['arg2']);
        $op = strip_tags($_POST['operation']);
        $params['result'] = mathOperation($arg1, $arg2, $op);
        $params['arg1'] = $arg1;
        $params['arg2'] = $arg2;
        $params['operation'] = $op;
      }
      if ($_POST) {
        $arg3 = (float)strip_tags($_POST['arg3']);
        $arg4 = (float)strip_tags($_POST['arg4']);
        $op2 = strip_tags($_POST['operation2']);
        $params['result2'] = mathOperation($arg3, $arg4, $op2);
        $params['arg3'] = $arg3;
        $params['arg4'] = $arg4;
      }
      break;

    case 'feedbackapi':
      doApiFeedbackAction($action);
      break;

    case 'feedback2':
      $params['feedback'] = getAllFeedback();
      break;

    case 'feedback':
      doFeedbackAction($params, $action);
      $params['feedback'] = getAllFeedback();
      break;

    case 'apicatalog':
      echo json_encode(getCatalog(), JSON_UNESCAPED_UNICODE);
      die();
  }
  return $params;
}
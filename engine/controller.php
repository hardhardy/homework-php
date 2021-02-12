<?php

//Для каждой страницы готовим массив со своим набором переменных
//для подстановки их в соотвествующий шаблон
function prepareVariables($page, $action, $id)
{
//Для каждой страницы готовим массив со своим набором переменных
//для подстановки их в соотвествующий шаблон
  $params = ["count" => getBasketCount()];
  $params['allow'] = false;
  if (is_auth()) {
    $params['allow'] = true;
    $params['user'] = get_user();
  }
  $params['layout'] = 'main';

  switch ($page) {

    case 'auth':
      if ($action == "login") {
        if (isset($_POST['send'])) {
          $login = $_POST['login'];
          $pass = $_POST['pass'];

          if (!auth($login, $pass)) {
            die('Не верный логин пароль');
          } else {
            if (isset($_POST['save'])) {
              makeHashAuth();
              header("Location: {$_SERVER['HTTP_REFERER']}");

            }
            header("Location: {$_SERVER['HTTP_REFERER']}");
          }
        }
        exit;
      }
      if ($action == "logout") {
        session_unset();
        session_destroy();
        setcookie("hash", "", time() - 3600, "/");
        header("Location: {$_SERVER['HTTP_REFERER']}");
      }

      break;

    //api/buy/5
    case 'api':
      if ($action == "addlikez") {
        addLikeGood($_GET['id']);
        $likez = getGoodLikes($_GET['id']);
        echo json_encode(['likez' => 1, $likez]);
        die();
      }
      if ($action == "buy") {
        addToBasket($id);
        //var_dump($id);
        echo json_encode(["result" => 1, "count" => getBasketCount()]);
        exit;
      }
      if ($action == "delete") {
        deleteFromBasket($id);

        echo json_encode([
          "result" => 1,
          "count" => getBasketCount(),
          "summ" => summFromBasket()]);
        exit;
      }

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

    case 'basket':
      $params['basket'] = getBasket();
      $params['summ'] = summFromBasket();
      break;

    case
    'news':
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
      doFeedbackAction($params, $action, $id);
      $params['feedback'] = getAllFeedback();
      break;

    case 'apicatalog':
      echo json_encode(getCatalog(), JSON_UNESCAPED_UNICODE);
      die();
  }

  return $params;
}
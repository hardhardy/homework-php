<?php

function getAllFeedback()
{
  $sql = "SELECT * FROM `feedback` ORDER BY `id` DESC";
  return getAssocResult($sql);
}

function addFeedBack($name, $text)
{
  $name = strip_tags(htmlspecialchars(mysqli_real_escape_string(getDb(), $name)));
  $text = strip_tags(htmlspecialchars(mysqli_real_escape_string(getDb(), $text)));
  $sql = "INSERT INTO `feedback` (`name`, `text`) VALUES ('{$name}', '{$text}');";

  executeQuery($sql);
  return mysqli_insert_id(getDb());
}

function deleteFeedBack($id_feed)
{
  $id_feed = (int)$id_feed;
  executeQuery("DELETE FROM `feedback` WHERE `id` = {$id_feed}");
}

function doApiFeedbackAction($action)
{
  if ($action == "add") {
    $data = json_decode(file_get_contents('php://input'));
    $id = addFeedBack($data->name, $data->text);
    $response = [
      'id' => $id,
      'name' => $data->name,
      'text' => $data->text,
    ];
    echo json_decode($response, JSON_UNESCAPED_UNICODE);
    die();
  }

  if ($action == "delete") {
    deleteFeedBack($_GET['id']);
    echo json_decode(['response' => 1]);
    die();
  }
}

function doFeedbackAction(&$params, $action)
{
  $params['name'] = '';
  $params['text'] = '';
  $params['button'] = 'Добавить';
  $params['action'] = 'add';
  $params['id_feed'] = '';
  if ($action == "add") {
    addFeedBack($_POST['name'], $_POST['text']);
    header("Location: /feedback/?message=OK");
  }
  if ($action == "delete") {
    deleteFeedBack($_GET['id_feed']);
    header("Location: /feedback/?message=delete");
  }
  if ($action == "edit") {
    $id_feed = (int)$_GET['id_feed'];
    $result_feedback = getAssocResult("SELECT * FROM `feedback` WHERE id = {$id_feed}");
    $params['name'] = $result_feedback[0]['name'];
    $params['text'] = $result_feedback[0]['text'];
    $params['action'] = 'save';
    $params['id_feed'] = $id_feed;
    $params['button'] = 'Изменить';
  }

  if ($action == "save") {
    $id_feed = (int)$_POST['id_feed'];
    $name = strip_tags(htmlspecialchars(mysqli_real_escape_string(getDb(), $_POST['name'])));
    $text = strip_tags(htmlspecialchars(mysqli_real_escape_string(getDb(), $_POST['text'])));

    executeQuery("UPDATE `feedback` SET `name` = '{$name}', `text` = '{$text}' WHERE `feedback`.`id` = {$id_feed};");

    header("Location: /feedback/?message=edit");
  }
  if ($_GET['message'] == 'OK') $params ['message'] = '<div class="fb-message">Отзыв добавлен</div>';
  if ($_GET['message'] == 'edit') $params ['message'] = '<div class="fb-message">Отзыв изменен</div>';
  if ($_GET['message'] == 'delete') $params ['message'] = '<div class="fb-message">Отзыв удален</div>';
}



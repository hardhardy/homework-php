<?php

function getAllFeedback()
{
  $sql = "SELECT * FROM `feedback` ORDER BY `id` DESC";
  return getAssocResult($sql);
}
function getFeedback($id) {
  $id = (int)$id;
  $sql = "SELECT * FROM feedback WHERE id={$id}";
  $result = getAssocResult($sql)[0];

  if (mysqli_affected_rows(getDb()) != 1) return false;
  return $result;
}
function addFeedBack()
{
  $db = getDb();
  $name = mysqli_real_escape_string($db, strip_tags(htmlspecialchars($_POST['name'])));
  $text = mysqli_real_escape_string($db, strip_tags(htmlspecialchars($_POST['text'])));
  $sql = "INSERT INTO `feedback`(`name`, `text`) VALUES ('{$name}','{$text}')";
  $result = executeQuery($sql);
  if (mysqli_affected_rows(getDb()) != 1) return false;
  return $result;
}

function deleteFeedback($id) {
  $id = (int)$id;
  $sql = "DELETE FROM `feedback` WHERE id={$id}";
  $result = executeQuery($sql);
  if (mysqli_affected_rows(getDb()) != 1) return false;
  return $result;
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

function doFeedbackAction(&$params, $action, $id) {

  $params['error'] = ERR_CODE[$_GET['status']];


  //значения по умолчанию
  $params['action'] = "add";
  $params['buttonText'] = "Добавить";
  $params['name'] = "";
  $params['text'] = "";

  if ($action == "add") {
    if (addFeedBack())
      header("Location: /feedback/?status=OK");
    else
      header("Location: /feedback/?status=ERROR_ADD");

  }

  if ($action == "delete") {
    $error = deleteFeedback($id);
    if ($error)
      header("Location: /feedback/?status=DELETED");
    else
      header("Location: /feedback/?status=ERROR_DEL");

  }

  if ($action == "save") {
    $error = updateFeedback($id);
    if ($error)
      header("Location: /feedback/?status=UPDATED");
    else
      header("Location: /feedback/?status=ERROR_UPDATE");

  }


  if ($action == "edit") {
    $feedback = getFeedback($id);
    $params['action'] = "save/{$id}";
    $params['buttonText'] = "Править";
    $params['name'] = $feedback['name'];
    $params['text'] = $feedback['text'];
  }
}

function updateFeedback($id) {
  $db = getDb();
  $name = mysqli_real_escape_string($db, strip_tags(htmlspecialchars($_POST['name'])));
  $message = mysqli_real_escape_string($db, strip_tags(htmlspecialchars($_POST['message'])));
  $sql = "UPDATE `feedback` SET `name`='{$name}',`text`='{$message}' WHERE id = {$id}";
  $result = executeQuery($sql);
  if (mysqli_affected_rows(getDb()) != 1) return false;
  return $result;
}

// if ($_GET['message'] == 'OK') $params ['message'] = '<div class="fb-message">Отзыв добавлен</div>';
// if ($_GET['message'] == 'edit') $params ['message'] = '<div class="fb-message">Отзыв изменен</div>';
// if ($_GET['message'] == 'delete') $params ['message'] = '<div class="fb-message">Отзыв удален</div>';




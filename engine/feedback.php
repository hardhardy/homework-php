<?php

function getAllFeedback()
{
  return getAssocResult("SELECT * FROM feedback ORDER BY id DESC");
}

function editFeedBack()
{
  if ($_GET['action'] == 'edit') {
    $id = (int)$_POST['id'];
    $result = mysqli_query("SELECT * FROM feedback WHERE id = {$id}");
    $row = [];
    $row = mysqli_fetch_assoc($result);
    $buttonText = "Править";
    $action = "save";
  }
}

function saveFeedBack()
{
  if ($_GET['action'] == 'save') {
    $id = (int)$_POST['id'];
    $name = strip_tags(htmlspecialchars(mysqli_real_escape_string($_POST['name'])));
    $text = strip_tags(htmlspecialchars(mysqli_real_escape_string($_POST['text'])));
    $result = mysqli_query("UPDATE feedback SET name = {name}, text = {text} WHERE feedback . id = {$id}");
    header("Location: ?message=edit");
    die();
  }
}

function addFeedBack()
{
  if ($_GET['action'] == 'add') {
    $name = strip_tags(htmlspecialchars(mysqli_real_escape_string($_POST['name'])));
    $text = strip_tags(htmlspecialchars(mysqli_real_escape_string($_POST['text'])));
    $result = mysqli_query("INSERT INTO feedback SET (name, text) VALUES ({$name}, {$text});");
    header("Location: ?message=OK");
  }
}

function deleteFeedBack()
{
  var_dump($_POST);
  die();
}

function doFeedbackAction()
{
  if ($action = "add") {
    addFeedBack();
  }
  if ($action = "edit") {
    editFeedBack();
  }
  if ($action = "delete") {
    deleteFeedBack();
  }
  if ($action = "save") {
    saveFeedBack();
  }
}


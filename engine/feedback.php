<?php

function getAllFeedback()
{
  return getAssocResult("SELECT * FROM feedback ORDER BY id DESC");
}

function addFeedBack()
{
  if ($_POST) {
    $name = strip_tags(htmlspecialchars(mysqli_real_escape_string($db, $_POST['name'])));
    $text = strip_tags(htmlspecialchars(mysqli_real_escape_string($db, $_POST['text'])));
  }
}

function deleteFeedBack()
{
  var_dump($_POST);
  die();
}

function doFeedbackAction($action)
{
  if ($action = "add") {
    addFeedBack();
  }
  if ($action = "edit") {
    addFeedBack();
  }
  if ($action = "delete") {
    deleteFeedBack();
  }
  if ($action = "save") {
    addFeedBack();
  }
}


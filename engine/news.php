<?php

function getNews()
{
  return getAssocResult("SELECT * FROM news");
}

function getOneNews($id)
{
  return getAssocResult("SELECT * FROM news WHERE id = {$id}")[0];
}

function getNewsContent($id){
  $id = (int)$id;

  $sql = "SELECT * FROM news WHERE id = {$id}";
  $news = getAssocResult($sql);

  //В случае если новости нет, вернем пустое значение
  $result = [];
  if(isset($news[0]))
    $result = $news[0];

  return $result;
}
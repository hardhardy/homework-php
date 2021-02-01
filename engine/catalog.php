<?php

function getCatalog()
{
  return getAssocResult("SELECT * FROM products");
}

function getProduct($id)
{
  return getAssocResult("SELECT * FROM products WHERE id = {$id}")[0];
}
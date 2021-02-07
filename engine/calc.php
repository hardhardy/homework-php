<?php
var_dump($_POST);

  $arg1 = (float)strip_tags($_POST["arg1"]);
  $arg2 = (float)strip_tags($_POST["arg2"]);
  $result = "$arg1 + $arg2";


echo $arg1;

function sum($a, $b)
{
  return $a + $b;
}

function minus($a, $b)
{
  return $a - $b;
}

function multiply($a, $b)
{
  return $a * $b;
}

function divide($a, $b)
{
  if ($b == 0) {
    return 'на 0 делить нельзя';
  } else {
    return $a / $b;
  }
}

function mathOperation($arg1, $arg2, $operation)
{
  switch ($operation) {
    case 'sum':
      return sum($arg1, $arg2);
    case 'minus':
      return minus($arg1, $arg2);
    case 'multiply':
      return multiply($arg1, $arg2);
    case 'divide':
      return divide($arg1, $arg2);
  }
}
<?php
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
function mathOperation($a, $b, $operation)
{
  switch ($operation) {
    case 'sum':
      return sum($a, $b,);
    case 'minus':
      return minus($a, $b,);
    case 'multiply':
      return multiply($a, $b,);
    case 'divide':
      return divide($a, $b,);
  }
}
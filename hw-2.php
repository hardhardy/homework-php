<?php
$a = rand(-10, 10);
$b = rand(-10, 10);
$i = rand(0, 15);
$title = 'Домашняя работа №2';
$dateY = date('Y');
$dateG = date('G');
$datei = date('i');
?>
<h1><?= $title ?></h1>
<b>$a = <?= $a ?><br>
    $b = <?= $b ?></b>
<h2>Задание №1</h2>
<?php
if ($a >= 0 && $b >= 0) {
  echo 'разность: $a - $b = ' . ($a - $b);
} elseif ($a < 0 && $b < 0) {
  echo 'произведение: $a * $b = ' . ($a * $b);
} elseif (($a < 0 && $b >= 0) || ($a >= 0 && $b < 0)) {
  echo 'сумма: $a + $b = ' . ($a + $b);
}
?>
<br>
<h2>Задание №2</h2>
$i = <?= $i ?>
<p>break -
  <?php
  switch ($i) {
    case 0:
      echo 'i = 0';
      break;
    case 1:
      echo 'i = 1';
      break;
    case 2:
      echo 'i = 2';
      break;
    case 3:
      echo 'i = 3';
      break;
    case 4:
      echo 'i = 4';
      break;
    case 5:
      echo 'i = 5';
      break;
    case 6:
      echo 'i = 6';
      break;
    case 7:
      echo 'i = 7';
      break;
    case 8:
      echo 'i = 8';
      break;
    case 9:
      echo 'i = 9';
      break;
    case 10:
      echo 'i = 10';
      break;
    case 11:
      echo 'i = 11';
      break;
    case 12:
      echo 'i = 12';
      break;
    case 13:
      echo 'i = 13';
      break;
    case 14:
      echo 'i = 14';
      break;
    case 15:
      echo 'i = 15';
      break;
  }
  ?></p>
<p><strike>break</strike> -
  <?php
  switch ($i) {
    case 0:
      echo '0 - ';
    case 1:
      echo '1 - ';
    case 2:
      echo '2 - ';
    case 3:
      echo '3 - ';
    case 4:
      echo '4 - ';
    case 5:
      echo '5 - ';
    case 6:
      echo '6 - ';
    case 7:
      echo '7 - ';
    case 8:
      echo '8 - ';
    case 9:
      echo '9 - ';
    case 10:
      echo '10 - ';
    case 11:
      echo '11 - ';
    case 12:
      echo '12 - ';
    case 13:
      echo '13 - ';
    case 14:
      echo '14 - ';
    case 15:
      echo '15';
  }
  ?></p>
<h2>Задание №3</h2>
<?php
echo 'a + b = ' . sum($a, $b) . '<br>';
function sum($a, $b)
{
  return $a + $b;
}

echo 'a - b = ' . minus($a, $b) . '<br>';
function minus($a, $b)
{
  return $a - $b;
}

echo 'a * b = ' . multiply($a, $b) . '<br>';
function multiply($a, $b)
{
  return $a * $b;
}

echo 'a / b = ' . divide($a, $b);
function divide($a, $b)
{
  if ($b == 0) {
    return 'на 0 делить нельзя';
  } else {
    return $a / $b;
  }
}

?>
<h2>Задание №4</h2>
<?php
function mathOperation($a, $b, $operation)
{
  switch ($operation) {
    case 'sum':
      echo 'a + b = ' . sum($a, $b) . '<br>';
      break;
    case 'minus':
      echo 'a - b = ' . minus($a, $b) . '<br>';
      break;
    case 'multiply':
      echo 'a * b = ' . multiply($a, $b) . '<br>';
      break;
    case 'divide':
      echo 'a / b = ' . divide($a, $b) . '<br>';
      break;
    default:
      echo "Вы не корректно определили параметры! <br>";
      break;
  }
}

echo mathOperation($a, $b, 'sum');
echo mathOperation($a, $b, 'minus');
echo mathOperation($a, $b, 'multiply');
echo mathOperation($a, $b, 'divide');
echo mathOperation($a, $b, 'del');
?>
<h2>Задание №6</h2>
<?php
function power($val, $pow)
{
  if ($pow > 0) {
    if ($pow == 1) {
      return $val;
    } else {
      return $val * power($val, $pow - 1);
    }
  } else {
    if ($pow <= 0) {
      return 'Степень <= 0';
    }
  }
}

echo power($a, $b);
?>
<h2>Задание №7</h2>
<?php
function Hours($h)
{
  $h = (int)$h;
  switch ($h) {
    case 1:
    case 21:
      return 'час';
    case 2:
    case 3:
    case 4:
    case 22:
    case 23:
    case 24:
      return 'часа';
    default:
      return 'часов';
  }
}

function Minutes($m)
{
  $m = (int)$m;
  if ($m > 10 && $m < 15) {
    return 'минут';
  }
  switch ($m % 10) {
    case 1:
      return 'минута';
    case 2:
    case 3:
    case 4:
      return 'минуты';
    default:
      return 'минут';
  }
}

function Tm($h, $m)
{
  $h = (int)$h;
  $m = (int)$m;
  return $h . ' ' . Hours($h) . ' ' . $m . ' ' . Minutes($m);
}

echo tm($dateG, $datei);
?>
<br>
<br>
<br>
<b><?= $dateY ?> год</b>
<?php
$a = rand(-10, 10);
$b = rand(-10, 10);
$i = rand(0, 15);
$title = 'Домашняя работа №2';
$dateY = date('Y');
?>
<!DOCTYPE html>
<html>
<head>
    <title><?=$title?></title>
    <meta charset="UTF-8">
</head>
<body>
<h1><?=$title?></h1>
<b>$a = <?=$a?><br>
    $b = <?=$b?></b>
<h2>Задание №1</h2>
<?php
if ($a>=0 && $b>=0) {
  echo 'разность: $a - $b = ' . ($a - $b);
} elseif ($a<0 && $b<0) {
  echo 'произведение: $a * $b = ' . ($a * $b);
} elseif (($a<0 && $b>=0) || ($a>=0 && $b<0)) {
  echo 'сумма: $a + $b = ' . ($a + $b);
}
?>
<br>
<h2>Задание №2</h2>
$i = <?=$i?>
<p>break</p>
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
?>
<p><strike>break</strike></p>
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
?>
<br>
<h2>Задание №3</h2>
<?php
echo 'a + b = ' . sum($a, $b) . '<br>';
function sum($a, $b) {
  return $a + $b;
}
echo 'a - b = ' . minus($a, $b) . '<br>';
function minus($a, $b) {
  return $a - $b;
}
echo 'a * b = ' . multiply($a, $b) . '<br>';
function multiply($a, $b) {
  return $a * $b;
}
if ($b == 0) {
  echo 'a / b = на 0 делить нельзя';}
else {
  echo 'a / b = ' . divide($a, $b);
}
function divide($a, $b) {
  return $a / $b;
}
?>

<br>
<br><br>

<b><?=$dateY?> год</b>
</body>
</html>
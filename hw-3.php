<?php
$a = rand(-10, 10);
$b = rand(-10, 10);
$task1 = 0;
$task2 = 0;
$title = 'Домашняя работа №3';
$dateY = date('Y');
$dateG = date('G');
$datei = date('i');
?>
<h1><?= $title ?></h1>
<b>$a = <?= $a ?><br>
    $b = <?= $b ?><br>
    $task1 = <?= $task1 ?><br>
    $task2 = <?= $task2 ?></b>
<h2>Задание №1</h2>
<?php
// while ($task1 < 100) {
//  echo $task1 . ' ';
//   $task1 += 3;
// }
while ($task1 < 100) {
  $task1++;
  if ($task1 % 3 == 0) {
    echo $task1 . ' ';
  } else;
}
?>
<h2>Задание №2</h2>
<?php
function task2f1($task2)
{
  if ($task2 == 0) {
    return "$task2" . ' - это ноль<br />';
  }
  if ($task2 % 2) {
    return "$task2" . ' - нечетное число<br />';
  } else {
    return "$task2" . ' - четное число<br />';
  }
}

do {
  echo task2f1($task2);
  $task2++;
} while ($task2 <= 10);
?>
<h2>Задание №3</h2>
<?php
$arrCity = [
  'Московская' => [
    'Москва',
    'Зеленоград',
    'Клин'
  ],
  'Ленинградская' => [
    'Санкт-Петербург',
    'Всеволожск',
    'Павловск',
    'Кронштадт'
  ],
  'Челябинская' => [
    'Челябинск',
    'Копейск',
    'Миасс',
    'Кыштым'
  ]
];
foreach ($arrCity as $obl => $city) {
  echo $obl . ": <br>";
  foreach ($city as $cityName) {
    echo  $cityName . ", ";
  } echo "<br>";
}

?>
<h2>Задание №4</h2>

<h2>Задание №6</h2>

<h2>Задание №7</h2>

<br>
<br>
<br>
<b><?= $dateY ?> год</b>
<?php
$a = rand(-10, 10);
$b = rand(-10, 10);
$i = 0;
$
$title = 'Домашняя работа №2';
$dateY = date('Y');
$dateG = date('G');
$datei = date('i');
?>
<h1><?= $title ?></h1>
<b>$a = <?= $a ?><br>
    $b = <?= $b ?><br>
    $i = <?= $i ?></b>
<h2>Задание №1</h2>
<?php
// while ($i < 100) {
//  echo $i . ' ';
//   $i += 3;
// }
while ($i < 100) {
  $i++;
  if ($i % 3 == 0) {
    echo $i . ' ';
  } else;
}
?>
<h2>Задание №2</h2>

<h2>Задание №3</h2>

<h2>Задание №4</h2>

<h2>Задание №6</h2>

<h2>Задание №7</h2>

<br>
<br>
<br>
<b><?= $dateY ?> год</b>
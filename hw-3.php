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
    echo $cityName . ', ';
  }
  echo '<br>';
}
?>
<h2>Задание №4</h2>
<?php
function translit($text) {
  $alfabet = array(
    'а' => 'a', 'б' => 'b', 'в' => 'v',
    'г' => 'g', 'д' => 'd', 'е' => 'e',
    'ё' => 'e', 'ж' => 'zh', 'з' => 'z',
    'и' => 'i', 'й' => 'y', 'к' => 'k',
    'л' => 'l', 'м' => 'm', 'н' => 'n',
    'о' => 'o', 'п' => 'p', 'р' => 'r',
    'с' => 's', 'т' => 't', 'у' => 'u',
    'ф' => 'f', 'х' => 'h', 'ц' => 'c',
    'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch',
    'ь' => '\'', 'ы' => 'y', 'ъ' => '\'',
    'э' => 'e', 'ю' => 'yu', 'я' => 'ya',
    'А' => 'A', 'Б' => 'B', 'В' => 'V',
    'Г' => 'G', 'Д' => 'D', 'Е' => 'E',
    'Ё' => 'E', 'Ж' => 'ZH', 'З' => 'Z',
    'И' => 'I', 'Й' => 'Y', 'К' => 'K',
    'Л' => 'L', 'М' => 'M', 'Н' => 'N',
    'О' => 'O', 'П' => 'P', 'Р' => 'R',
    'С' => 'S', 'Т' => 'T', 'У' => 'U',
    'Ф' => 'F', 'Х' => 'H', 'Ц' => 'C',
    'Ч' => 'CH', 'Ш' => 'SH', 'Щ' => 'SCH',
    'Ь' => '\'', 'Ы' => 'Y', 'Ъ' => '\'',
    'Э' => 'E', 'Ю' => 'YU', 'Я' => 'YA'
  );
  return strtr($text, $alfabet);
}

echo translit($title);
?>
<h2>Задание №5</h2>
<?php
function change($text) {
  $text = str_replace(" ", "_", $text);
  return $text;
}
echo change($title);
?>
<h2>Задание №6</h2>

<h2>Задание №7</h2>
<?php
for ($i = 0; $i < 10; print($i++)) {
}
?>
<h2>Задание №8</h2>
<?php
foreach ($arrCity as $obl => $city) {
  foreach ($city as $cityName) {
    if (mb_substr($cityName, 0, 1) == "К")
      echo $cityName . '<br>';
  }
}
?>
<br>
<br>
<br>
<b><?= $dateY ?> год</b>
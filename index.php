<?php
$a = rand(-10, 10);
$b = rand(-10, 10);
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
<h2>Задание №1</h2>
$a = <?=$a?><br>
$b = <?=$b?>
<?php
    if ($a>=0 && $b>=0) {
        echo '<br> разность: $a - $b = ' . ($a - $b);
    } elseif ($a<0 && $b<0) {
        echo '<br> произведение: $a * $b = ' . ($a * $b);
    } elseif (($a<0 && $b>=0) || ($a>=0 && $b<0)) {
        echo '<br> сумма: $a + $b = ' . ($a + $b);
    }
?>
<br><br>
<b><?=$dateY?> год</b>
</body>
</html>
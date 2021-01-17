<?php
$a = 5;
$b = '05';
$title = 'Домашняя работа №1';
$task3 = 'Задание №3';
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title ?></title>
	<meta charset="UTF-8">
</head>
<body>
<h1><?php echo $task3 ?></h1>
<?php
echo "&#36;a = 5; <br>";
echo "&#36;b = '05'; <br>";
echo 'var_dump($a == $b) - ';
var_dump($a == $b);       // Почему true?
echo ' - Потому что == оператор равенства  <br>';
echo "var_dump((int)'012345') - ";
var_dump((int)'012345');     // Почему 12345?
echo ' - Потому что int выводит целое десятичное число взятое в кавычки<br>';
echo "var_dump((float)123.0 === (int)123.0) - ";
var_dump((float)123.0 === (int)123.0); // Почему false?
echo ' - Потому что float числа с плавающей запятой, а int целые числа, т.е. разные типы, а оператор === это тождественное равенство.<br>';
echo "var_dump((int)0 === (int)'hello, world') - ";
var_dump((int)0 === (int)'hello, world'); // Почему true?
echo ' - Потому что значения одинакового типа и (int)&#180;hello, world&#180; равен 0 <br>';
?>
<br><br>
Тут можете поместить картинку 
<br><br>
<br><br>
<b>Просто пример жирного текста</b>
<br><br>
2018
</body>
</html>
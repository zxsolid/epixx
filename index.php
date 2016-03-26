<?php

include "function.php";
echo "Введите число".PHP_EOL;
$a = readline();
echo "Введите второе число".PHP_EOL;
$b = readline();
echo "Введите знак".PHP_EOL;
$c = readline();
echo "Ответ".PHP_EOL;
$resull ="";

if ($c == "+"){
    $resull= plus($a, $b).PHP_EOL;
}
elseif ($c == "*"){
    $resull= mult($a, $b).PHP_EOL;
}
elseif ($c == "-"){
    $resull= minus($a, $b).PHP_EOL;
}
elseif ($c == "/"){
    $resull= delet($a, $b).PHP_EOL;
}
echo $resull;
//file_get_contents("fuction.php");
//$r=file_get_contents("fuction.php"); - выводит содержимое файла.

//$handler = fopen("function.php","r- режим чтения"); - возвращает указатель в hadler, r+ Посимволам
//while (($string=fgets-следующая строка($handler)) !== false -считает функцию до конца по строчкам){
  //  var_dump($string); - функция вывода переменной.
//}
//fclose($handler); - закрывает по завершению
//$a =readline();
//file_put_contents('name file.txt', $a, FILE_APPEND); - Создание тектсового файла с текстом
//echo data('d.m.Y-H').PHP.EOL

//var_dump(glob('*.txt'));

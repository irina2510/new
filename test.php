<?php

$integer = 2;
$double = 2.3;
$string = 'Hello';
$boolean = TRUE;
$integer += 1;
$result = $integer . $string;
$main = "<h1> $result </h1>";
$empty;


/*function sum($namberOne, $namberTwo) {    	
	$result = $namberOne + $namberTwo;
	$mainResult = $namberOne. ' + ' . $namberTwo . ' = ' . $result . '</br>';
	return $mainResult;
}

$One = 5;
$Two = 4;

$mainResult = sum($One,$Two);*/

//$validate = empty($empty);

$validate = isset($integer);
$mainResult = gettype($string);

if($validate) {	
	print('Переменная существует и не пустая ');
} else {
	print('Переменная является пустой или не существует ');
}

echo '</br>'.' Тип переменной равен - ' . $mainResult;

var_dump($validate);


 
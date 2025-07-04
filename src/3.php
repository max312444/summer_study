<?php

// Operatar
/*
* 1) 기능
* 2) 우선 순위
* 3) 이항연산 시 묵시적 형변환 규칙
*/

/*
* 비교 : ==, !=, >, <, >=, <=
*/

/*
* 배열 연산자 : 
* Array -> 순서가 보장된 HashMap이다.
* HashMap : ket <-> value pair
*/


$bar = [1, 2, 3];
$foo = [1, 2 => 3, 1 => 2];

if($bar == $foo) 
    echo "True";
else
    echo "False";

echo "<br>";
var_dump($bar);
echo "<br>";
var_dump($foo);

for ($i = 0; $i < 5; $i++) {
    echo $i . "<br>";
}
<?php

// hoisting o
// overloading x
// call-by-value & call-by-reference
// First-class citizen -> lambda function
//  -> closure function

function sum($a, $b) {
    echo $a + $b;
}

$test = "sum"; // 문자열로 함수명 가져와서

$test(2, 3); // 이곳에서 함수를 호출할 수 있음 이때의 test는 sum을 가리긴다.

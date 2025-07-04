<?php

// hoisting o
// overloading x
// call-by-value & call-by-reference
// First-class citizen -> lambda function
//  -> closure function

function sum($a, $b) {
    echo $a + $b;
}

$test = "sum";

$test(2, 3);
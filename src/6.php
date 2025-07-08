<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nums = [
        (int)$_POST["num1"],
        (int)$_POST["num2"],
        (int)$_POST["num3"],
        (int)$_POST["num4"],
        (int)$_POST["num5"]
    ];
    // 평균 계산
    $sum = array_sum($nums) / count($nums);
    // 분산 계산
    $sum_of_squares = 0;
    foreach($nums as $n) {
        $sum_of_squares += pow($n - $sum, 2);
    }
    $variance = $sum_of_squares / count($nums);
    // 표준 편자 계산
    $std_dev = sqrt($variance);

    echo "입력값: ". implode(" ", $nums) . "<br>";
    echo "평균: ". $sum . "<br>";
    echo "분산: ". $variance . "<br>";
    echo "표준 편차: ". number_format($std_dev, 2) . "<br>";

    
}
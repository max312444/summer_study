<?php
// session_start();

// 13.php

if(session_id() !== '') {
    echo "세션 시작 중";
}

if(session_status() == PHP_SESSION_ACTIVE) {
    echo "<br>세션 활동 중";
}

$_SESSION ['std_info'] = [
    "id" => 2423026, "name" => "조원준"
];

if(isset($_SESSION['std_info'])) {
    $_SESSION ['std_info'] = [
        "id" => 2423007, "name" => "김민정" 
    ];
} else {
    echo "학생 정보 없음";
}
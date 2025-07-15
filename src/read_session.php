<?php

// session_start();

// read_session.php

// Read
$name = $_SESSION['std_info']['name'];
echo $name;

// Delete
// unset($_SESSION['std_info']['name']);

// Delete all
// 메모리상 삭제
$_SESSION = [];
// 세션 파일 삭제
session_destroy();

print_r($_SESSION);
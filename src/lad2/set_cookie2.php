<?php

if (isset($_POST['name'])) {
    $name = trim($_POST['name']);
    setcookie('name', $name, time() + 3600, '/');
    $latte = trim($_POST['latte']);
    setcookie('latte', $latte, time() + 3600, '/');
    $ice = trim($_POST['ice']);
    setcookie('ice', $ice, time() + 3600, '/');
    header("Location: index2.php");
    exit;
}
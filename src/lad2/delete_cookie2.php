<?php
setcookie('name', '', time() - 3600, '/');
setcookie('latte', '', time() - 3600, '/');
setcookie('ice', '', time() - 3600, '/');
header("Location: index2.php");
exit;
<?php

setcookie('username', '', time() - 3600, '/');
header("Location: index1.php");
exit;
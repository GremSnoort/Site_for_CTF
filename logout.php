<?php
session_start();
unset($_SESSION['session_username']);
session_destroy();
header('Location: http://cp18366.tmweb.ru/login.php');
exit();
?>
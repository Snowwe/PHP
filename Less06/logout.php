<?php
session_start(); // открываем сессиию

session_destroy(); // очищаем сессиию
setcookie(session_name(), ''); // удаляем сессионные куки

header("Location: index6.php"); // делаем редирект на нашу страницу
//exit;
?>
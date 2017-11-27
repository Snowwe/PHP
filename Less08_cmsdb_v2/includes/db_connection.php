<?php
	define("DB_SERVER", "localhost");
	define("DB_USER", "root");
	define("DB_PASS", "");
	define("DB_NAME", "cms_db");

  // 1. Создаем подключение к БД
  $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
  // Тестируем подключение
  if(mysqli_connect_errno()) {
    die("Подключение к базе данных произошло с ошибкой: " . 
         mysqli_connect_error() . 
         " (" . mysqli_connect_errno() . ")"
    );
  }
?>

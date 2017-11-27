<?php
//1й шаг. Подключение к БД
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "cms_db";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
//делаем проверку соединения с БД
if (mysqli_connect_errno()) {
    die("Can't connect...");
}
//2й шаг. Удаляем из БД

$id = 32;

$query = "DELETE FROM subjects ";
$query .= "WHERE id = {$id}";
$query .= " LIMIT 1";

$result = mysqli_query($connection, $query);
if (!$result) {
    die("Can't connect to DB...");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="snowflake.ico">
</head>
<body>
<button><a href="databases.php">Database</a></button>
<button><a href="databasesInsert.php">Insert</a></button>
<button><a href="databasesUpdate.php">Update</a></button>
<button><a href="databasesDelete.php">Delete</a></button>

<p>DELETE!!!</p>
    <?
//3й шаг. Использование полученных данных
    ?>

</body>
</html>
<?
//4й шаг. Чистим перед закрытием

//5й шаг. Закрываем соединение
mysqli_close($connection);
?>

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

//2й шаг. Выполняем запрос к БД
    //Данные, которые получены от пользователя
$menu_name = "Еще один пункт меню";
$position = 1;
$visible = 1;

$query = "INSERT INTO subjects (";
$query .= "menu_name, position, visible";
$query .= ") VALUES (";
$query .= " '{$menu_name}', {$position}, {$visible}";
$query .= ")";

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
</head>
<body>
<button><a href="databases.php">Database</a></button>
<button><a href="databasesInsert.php">Insert</a></button>
<button><a href="databasesUpdate.php">Update</a></button>
<button><a href="databasesDelete.php">Delete</a></button>
<p>Insert!!!</p>
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

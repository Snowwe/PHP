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
    $query = "SELECT * FROM subjects";
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
<ul>
    <?
//3й шаг. Использование полученных данных
    // while ($row = mysqli_fetch_row($result)) {
    // //выводим содержимое каждого ряда
    //     var_dump($row);
    //     echo "<hr>";
    // }

    while ($subject = mysqli_fetch_assoc($result)) {
        ?>
        <li>
        <?
        //выводим содержимое каждого ряда
        echo $subject['menu_name']." - ".$subject["id"];
        ?></li>
<?
    }
    ?>
    </ul>
</body>
</html>
<?
//4й шаг. Чистим перед закрытием
mysqli_free_result($result);

//5й шаг. Закрываем соединение
mysqli_close($connection);
?>

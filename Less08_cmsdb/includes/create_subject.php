<? require_once("../includes/dbconnection.php") ?>
<? require_once("../includes/function.php") ?>
<?php
// //1й шаг. Подключение к БД
// $dbhost = "localhost";
// $dbuser = "root";
// $dbpass = "";
// $dbname = "cms_db";
// $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
// //делаем проверку соединения с БД
// if (mysqli_connect_errno()) {
//     die("Can't connect...");
// }

if(isset($_POST['submit'])){
$menu_name = $_POST['menuname'];
$position = $_POST['position'];
$visible = $_POST['visible'];

$query = "INSERT INTO subjects (";
$query .= "menu_name, position, visible";
$query .= ") VALUES (";
$query .= " '{$menu_name}', {$position}, {$visible}";
$query .= ")";

    $result = mysqli_query($connection, $query);
if (!$result) {
    die("Can't connect to DB...");
}
}
?>

<?
//5й шаг. Закрываем соединение
mysqli_close($connection);
?>

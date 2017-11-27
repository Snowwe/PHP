<?
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
?>




<?php
$host="localhost";
$db="Less_9_news";
$user="root";
$pass="";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$db= new PDO("mysql:host=$host;dbname=$db",$user, $pass);

//
$stmt = $db->prepare("INSERT INTO news (nameNews, content) VALUES (:nameNews, :content)");

// $nameNews=$db->quote($_POST["nameNews"], PDO::PARAM_STR);
// $content=$db->quote($_POST['content'], PDO::PARAM_STR);

// $stmt->bindParam(':nameNews', $nameNews);
// $stmt->bindParam(':content', $content);

$stmt->bindParam(':nameNews', $_POST["nameNews"]);
$stmt->bindParam(':content', $_POST['content']);

$stmt->execute();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="shortcut icon" href="../snowflake.ico">
</head>

<body>
<button><a href="index.php">Database</a></button>
<button><a href="insert.php">Insert</a></button>

<br><br>
<form action="" method="post">
    <p>Enter nameNews</p>
    <input type="text" name="nameNews">
    <br><br>
    <p>Enter textNews</p>
    <textarea name="content" id="" cols="30" rows="10"></textarea>
    <br><br>

    <input type="submit" name="submit" value="Insert" /> 
</form>

</body>
</html>
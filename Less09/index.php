<?php
$host="localhost";
$db="Less_9_news";
$user="root";
$pass="";

$db= new PDO("mysql:host=$host;dbname=$db",$user, $pass);

$query = $db->query("SELECT id FROM news");
$result = $query->FETCHALL(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="shortcut icon" href="snowflake.ico">
</head>
<body>
<button><a href="index.php">Database</a></button>
<button><a href="insert.php">Insert</a></button>
<br><br>
<p>Id news</p>
<select name="id" id="">
    <?php foreach( $result as $row ): ?>
        <option value="<?= $row['id'] ?>"><?= $row['id'] ?></option>
    <?php endforeach; ?>
</select>

<p>Your nameNews</p>
<input type="text" name="nameNews">
<br><br>

<p>Your textNews</p>
<textarea name="content" id="" cols="30" rows="10"></textarea>
<br><br>
<input type="submit" name="submit" value="Read news" /> 

</body>
</html>
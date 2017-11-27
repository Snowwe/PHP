<?
session_start(); // открыли сессию
 $log = $_POST["login"];
 $passw = $_POST["password"];
 if (!isset($login) or empty($login)) {
     echo "Change login<br>";
 } 
 else {        
        $_SESSION['user'] = array( // сохраняем в сессии информацию о пользователе
        'login' => $log,
        'password' => $passw
        );         
    } 
    echo "hello, ".$log;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lesson 3</title>
    
</head>
<body>
<form  method="post">
    <table>
    <!-- <button><a href="index.php">main</a></button>
    <button><a href="showUsers.php">show User</a></button> -->
        <tr>
            <td>Login:</td>
            <td><input type="text" name="login" id="login" value="" /></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" id="password" value="" /></td>
        </tr>
    </table>
	 <br> 
    <input type="submit" name="submit" value="Enter" /><br><br>
    <a href="index6_2.php">next 6_2</a><br>
    <a href="logout.php">ended session</a>
    



</form>
</body>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
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
            <td><input type="text" id="login" value="" /></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" id="password" value="" /></td>
        </tr>
    </table>
	  
    <input type="submit" name="submit" value="Enter" />
    
 <?

 $log = $_POST["login"];
 $passw = $_POST["password"];
 if (!isset($login) or empty($login)) {
     echo "Change login<br>";
 } else {
        //$user=$log.";".$passw.";";
        session_start(); // открыли сессию
        $_SESSION['user'] = array( // сохраняем в сессии информацию о пользователе
        'login' => $log,
        'password' => $passw
        );
         echo $log." ".$passw;
    }


   

?>


</form>
</body>
</html>

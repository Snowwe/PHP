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
    <button><a href="index.php">main</a></button>
    <button><a href="showUsers.php">show User</a></button>
    <br><br>
        <tr>
            <td>Login:</td>
            <td><input type="text" name="login" value="" /></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="password" value="" /></td>
        </tr>
        <tr>
            <td>E-mail:</td>
            <td><input type="email" name="email"></td>
        </tr>
    </table>
	  
    <input type="submit" name="submit" value="Submit" />
    
 <?
if(isset($_POST["submit"])){

$handle=fopen("text.txt","a+");
$login=$_POST['login'];
$passw=$_POST['password'];
$email=$_POST['email'];
if(!isset($login) or empty($login)){
    echo "Change login<br>";
}
else{
$user=$login.";".$passw.";".$email;

fwrite($handle,$user.PHP_EOL);
fclose($handle);
}
}

?>


</form>
</body>
</html>
<?
session_start();
$user=null;
if(isset($_SESSION['user'])){
 $user=$_SESSION['user'];
 echo "hello, ".$user['login'];
}
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
        <!-- <tr>
            <td>Login:</td>
            <td><input type="text" id="login" value="" /></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" id="password" value="" /></td>
        </tr>
    </table>
      
    <input type="submit" name="submit" value="Enter" /><br> -->
    <br>
    <a href="index6.php">next 6</a><br>
    <a href="logout.php">ended session</a>

</form>
</body>
</html>

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
   
<!-- 3. Создайте форму регистрации для сайта, в которой будут поля: Имя, Фамилия, Дата рождения,
Пол, Логин, Пароль -->
<form action="action-post.php" method="post">
    Name: <input type="text" name="name" value="" placeholder="Enter name" required/><br /><br />

    Surname: <input type="text" name="surname" value="" placeholder="Enter Surname" required/><br /><br />

    Year of birth: <input type="number" name="birth" value="" min=1900 max=2010 placeholder="Enter year of birth" required/><br /><br />

    <select name="gender" id="gender">
    Your gender
        <option value="man">Man</option>
        <option value="woman">Woman</option>
    </select><br><br />

    Login: <input type="text" name="login" value="" placeholder="Enter login" required/><br /><br />

	Password: <input type="password" name="password" value="" placeholder="Enter password" required/><br /><br />
	
    <input type="submit" name="submit" value="Write" />
    <button>Read</button>

</form>
</body>
</html>

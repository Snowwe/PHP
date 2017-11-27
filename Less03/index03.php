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
    <!-- 1. Вам необходимо создать форму для ввода данных и получить эти данные из формы и передать их сценарию; -->
<form action="action-post.php" method="post">
	 Username: <input type="text" name="username" value="" /><br />
	 Password: <input type="password" name="password" value="" /><br />
	<br />
	<input type="submit" name="submit" value="Submit" />
</form>
        
<!-- 2. Необходимо создать выпадающий список годов от 2000 до 2050. -->

 <form action="action-post.php" method="post">
    <select name="year" id="year">
    <option value="0">Select year</option>
    <?
    for ($i = 2000; $i < 2051; $i++) {
        echo "<option value=" . $i . ">" . $i . "</option>";
    }
    ?>
    </select><br /><br /><br />
</body>
</html>

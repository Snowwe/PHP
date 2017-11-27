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
    <button><a href="addUser.php">add User</a></button>
       <br><br>
    
 <?
 $handle=fopen("text.txt", "r");
 $count=0;
 if ($handle) {
     while (!feof($handle)) {

         $user=fgets($handle, 100);
         echo $user."<br>";
         ++$count;
        }
 } else {
        echo "Error...";
    }
    echo "<br>Count of user: ".--$count;
    fclose($handle);
?>

</form>
</body>
</html>





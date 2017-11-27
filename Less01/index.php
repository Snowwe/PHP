<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lesson 1</title>
</head>
<body>

   <h1> <?php echo "Hello, world"; ?></h1>
   <? echo "only question"; ?><br>
   <? echo 'simple string'; ?><br>
   <? $var = "string" ?>
   <? echo " $var simple string"; ?><br>

  <p>   <?
        $myVar = 1;
        $myvar = 2;
        echo $myVar, ' ', $myvar;
        echo '<br>' . gettype($myvar);
        ?>   </p>

   <p>     <?
            $str = "hello";
            $str1 = "world";
            $str2 = 3.14;
            echo $str . ' ' . $str1 . '  ' . '<br>';

            echo var_dump($str1);
            echo '<br>' . gettype($str);
            echo '<br>' . gettype($str2) . '<br>';

    //принудительная установка типа
            echo gettype($str2) . ' - ';
            settype($str2, "integer");
            echo var_dump($str2);
            ?>   </p>
<p><?
//define("CONSTANT","orange apple");
    const CONSTANT = "grape";
    echo CONSTANT;
    ?></p>
    <p><?
        if (true) {
            echo "All right";
        }
        else {
            echo "All wrong";
        }
        echo "<br>";
        echo false ? "All right!": "All wrong!";
        ?></p>
</body>
</html>
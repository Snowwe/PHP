<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lesson 1</title>
    <style>
    div{
        height:50px;
        width:50px;
        float:left;
    }
    </style>
</head>
<body>
<p><?
//Задача: Написать PHP-скрипт, в котором создать текстовый массив с названиями цветов. Количество разных цветов должно быть больше четырех. Затем с помощью PHP отобразить на странице четыре div одинакового размера. Сделать так, чтобы при загрузке страницы все четыре div заливались случайными цветами, выбранными из массива. При этом, все четыре div должны заливаться разными цветами. Ни один цвет не должен повторяться 
    echo "<h4>Task6 - Array</h4>";
    $arr = array("yellow", "blue", "green", "grey", "orange", "black","brown","pink");

    shuffle($arr);

    $newArr = array_slice($arr, 0, 4);
    foreach ($newArr as $color) {
        echo "<div style='background-color:" . $color . ";'></div>";
    }

   //$div = "<div style='width: 50px; height: 50px; background-color:red;'></div>";
    //echo strip_tags($div, "<div></div>"); 
   // echo $div;
echo str_repeat("<br>",3) ;
    ?></p>
  <p>   <?
        echo "<h4>Task2</h4>";
        $x = 25;
        $rez = ceil(pow(sin($x), 2));
        echo "итог = " . $rez;
        $rez = round(pow(sin($x), 2));
        echo "<br>" . "итог = " . $rez;
        ?>   </p>
<p><?
    echo "<h4>Task3</h4>";
//Создать переменную, в которую предположительно будет помещен произвольный логин.
    $login = "snowwe";
//Вывести на экран длину строки.
    echo strlen($login) . "<br>";
//Также вывести на экран первые 3 символа логина.
    echo substr($login, 0, 3);
    ?></p>
  
  <p><?
        echo "<h4>Task4</h4>";
  //Создать переменную с произвольным текстом (длиной >10символов). 
        $str = "simple text for task";
  //Провести проверку: если длина строки больше 10 символов, обрезать строку до 10 символов. 
        if (strlen($str) > 10) {
            $temp = substr($str, 0, 10);
            echo $temp . "<br>";
        }
  //С помощью функции заменить все символы "a-g" на пустоту.
        $str1 = array("a", "b", "c", "d", "i", "f", "g");
        echo str_replace($str1, "", $str);
        ?></p>

        <p><?
            echo "<h4>Task5</h4>";
       // Взять Html разметку:
            $temp = " <div class='refnamediv'><h1>htmlspecialchars</h1><p> (PHP 4, PHP 5, PHP 7)</p><p class='refpurpose'><span class='refname'>htmlspecialchars</span> —<span class='dc-title'>Любой текст</span></p></div>";
//Удалить все html теги. 
            $filtr = strip_tags($temp);
            echo $filtr . "<br>";
//Вывести количество символом после фильтрации.
            echo "before - " . strlen($temp) . "<br>";
            echo "after - " . strlen($filtr);
            ?></p>


</body>
</html>
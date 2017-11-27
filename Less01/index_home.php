<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>
</head>
<body>
    <p><?
        $x = 6;
        $y = 3;
        echo $x . "+" . $y . "=";
        echo $x + $y;
        echo "<br>" . -$x;
        echo "<br>" . $x . "-" . $y . "=";
        echo $x - $y;
        echo "<br>" . $x . "*" . $y . "=";
        echo $x * $y;
        echo "<br>" . $x . "/" . $y . "=";
        echo $x / $y;
        echo "<br>" . $x . "%" . $y . "=";
        echo $x % $y;
    // echo "<br>".$x."**".$y."=";
    // echo $x**$y;
        ?></p>

    <p><?
        $a = 25;
        $b = 70;
        $c = 100;
        if ( ($a > 26 && $a < $b) || ($a == 25 && $c == 100 &&
            $b == 70)) {
                echo "OK";
            }
        ?></p>
</body>
</html>
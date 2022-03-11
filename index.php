<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1>Hello world</h1>";
        echo("Hello PHP");
        print "<br>Learning PHP";
        print("<h3>Php is very easy to Learn</h3>");

        $name = "Laiba";
        $lastname = "Abdul Hameed";

        echo $name;
        echo " $lastname<br>";

        echo $name . " " . $lastname;

        $a = 5;
        $b = 6;

        $sum = $a + $b;
        $sub = $a - $b;
        $mul = $a * $b;
        $div = $a / $b;

        echo "<br>Sum of $a and $b is ".$sum;
        echo "<br>Subtraction of $a and $b is ".$sub;
        echo "<br>Multiplication of $a and $b is ".$mul;
        echo "<br>Division of $a and $b is ".$div;

        
    ?>
</body>
</html>
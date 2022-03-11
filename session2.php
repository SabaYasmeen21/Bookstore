<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Operators</h1>
    <?php
        echo "Relational Operators";
        // ==, >, <, >=, <=, <>, ===
        $a = 5;
        $b = 6;
        echo "<br>";
        echo $a == $b; 
        echo "<br>";
        echo $a > $b;
        echo "<br>";
        echo $a < $b;
        echo "<br>";
        echo $a >= $b;
        echo "<br>";
        echo $a <= $b;
        echo "<br>";
        echo $a != $b;
        echo "<br>";
        echo $a <> $b;

        echo "<h1>Logical Operators</h1>";
        //&& , || , !
        echo $a == 4 && $b == 5;
        echo "<br>";
        echo $a == 5 || $b == 4;
        echo "<br>";
        echo !($a == 5 || $b == 4);

        echo "<h1>Bitwise Operator</h1>";
        //&, |, ^, ~, >>, <<
        echo $a & $b;
        echo "<br>";
        echo $a | $b;
        echo "<br>";
        echo $a ^ $b;
        echo "<br>";
        echo ~($a);
        echo "<br>";
        echo $a >> $b;
        echo "<br>";
        echo $a << $b;

        echo "<h1>Special Operator | Ternary Operator</h1>";
        $age = 15;
        $category = ($age < 16) ? "Child" : "Adult" ;
        echo "<br>";
        echo $category;

?>
</body>
</html>
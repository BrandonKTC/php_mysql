<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Functions</title>
</head>

<body>

    <?php

    function Welcome()
    {
        echo "Welcome to PHP course<br>";
    }
    Welcome();
    function addition($a, $b)
    {
        $c = $a + $b;
        echo "Addition is {$c}<br>";
    }
    addition(1200, 84);
    ?>
    <hr>
    <?php

    function NormalV()
    {
        $value = 1;
        echo $value . "<br>";
        $value++;
    }

    NormalV();
    NormalV();
    NormalV();
    NormalV();
    function StaticV()
    {
        static $value = 1;
        echo $value . " static <br>";
        $value++;
    }
    StaticV();
    StaticV();
    StaticV();
    StaticV();
    ?>
</body>

</html>
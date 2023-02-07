<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Numbers</title>
</head>

<body>
    <?php

    $firstNumber = 3;
    $secondNumber = 4;
    $thirdNumber = 3.65478;
    ?>
    <?php echo $thirdNumber + 9 - 6; ?><br>
    <hr>
    Ceil: <?php echo ceil($thirdNumber); ?><br>
    Floor: <?php echo floor($thirdNumber); ?><br>

    <?php echo "is {$firstNumber} :integer " . is_int($firstNumber); ?><br>
    <?php echo "is {$thirdNumber} :integer " . is_int($thirdNumber); ?><br>
    <?php echo "is {$firstNumber} :float " . is_float($firstNumber); ?><br>
    <?php echo "is {$thirdNumber} :float " . is_float($thirdNumber); ?><br>
    <?php echo "is {$firstNumber} :numeric " . is_numeric($firstNumber); ?><br>
    <?php echo "is {$thirdNumber} :numeric " . is_numeric($thirdNumber); ?><br>
    Binary:<?php echo decbin(3); ?><br>
    Decimal:<?php echo bindec(11); ?><br>
    Square root:<?php echo sqrt(8); ?><br>
    Absolute value:<?php echo abs(-50 + 100); ?><br>
    Power:<?php echo pow(2, 10); ?><br>
    Mudulas:<?php echo fmod(15, 7); ?><br>
    Random:<?php echo rand(); ?><br>
    Random within 500 and 1600:<?php echo rand(500, 1600); ?><br>

</body>

</html>
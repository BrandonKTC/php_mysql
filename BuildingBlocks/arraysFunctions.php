<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Arrays Functions</title>
</head>

<body>
    <?php ?><br>

    <?php
    $color = array("red", "green", "blue");
    array_pop($color);
    array_push($color, "black", "White", "Pink");
    ?><br>
    <pre>
        <?php print_r($color); ?>
    </pre>
    <?php $numbers = array(13, 54, 6, 89, 100, 15, 12, 789, 1000) ?>
    Count number:<?php echo count($numbers) ?><br>
    Max:<?php echo max($numbers) ?><br>
    Min:<?php echo min($numbers) ?><br>
    Yes / No:<?php echo in_array(89, $numbers) ?><br>
    Sort:<?php echo sort($numbers) ?><br>
    Implode: <?php $Quote = array("Never", "Give", "UP", "in", "life"); ?><br>
    <?php echo implode(" ", $Quote); ?><br>
    Explode (in): <?php $sentence = "Never Give UP in life"; ?><br>
    <pre>
        <?php echo print_r(explode(" ", $sentence)); ?>
    </pre>
</body>

</html>
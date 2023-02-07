<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Arrays</title>
</head>

<body>
    <?php

    $name = array('Jazeb', 'Ali', 'Akram');
    echo $name[2];

    ?><br>
    <?php $Food = array('Pizza', 10, 15, array("Asian", "French", "German"), "Pasta"); ?><br>
    <?php echo $Food[2]; ?><br>
    <?php echo $Food[3][2]; ?><br>
    <?php $Food[53] = "Mongo"; ?>
    <?php $Food[100] = "Apple"; ?>
    <?php $Color = array("A" => "40", "B" => "Pizza"); ?><br>
    <?php $Food["Asian"] = "Pizza"; ?>
    <?php $Food["Italian"] = "Biryani"; ?>
    <?php echo $Food["Asian"] . " is for " . $Food["Italian"]; ?><br>
    <pre>
        <?php echo print_r($Food); ?>
    </pre>

</body>

</html>
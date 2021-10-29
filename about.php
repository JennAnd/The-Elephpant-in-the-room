<?php

require __DIR__ . '/arrays.php';
require __DIR__ . '/header.php';
require __DIR__ . '/functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About your Zodiac</title>
    <link rel="stylesheet" href="about.css" />

</head>

<body>
    <div class="parent">
        <div class="button-info">
            <?php
            $pressedOrder = $_GET['order'];
            $info = $zodiacs[$pressedOrder - 1]['content'];
            $elements = $zodiacs[$pressedOrder - 1]['element'];
            $integer = $zodiacs[$pressedOrder - 1]['order'];
            $ruledBy = $zodiacs[$pressedOrder - 1]['planet'];

            ?>
            <ul>
                <li>
                    <p class="zodiac-order">Order in chart: <?php echo $integer ?></p>
                </li>
                <li>
                    <p class="zodiac-content"> <?php echo  $info ?></p>
                </li>
                <li>
                    <p class="zodiac-element">Element: <?php echo $elements ?></p>
                </li>
                <div class="planet">
                    <?php

                    echo ruledBy($zodiacs, $ruledBy);
                    ?>
                </div>

            </ul>

        </div>
    </div>

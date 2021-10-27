<?php

require __DIR__ . '/arrays.php';
require __DIR__ . '/header.php';
/*require __DIR__ . '/functions.php';*/
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
            <?php foreach ($zodiacs as $zodiac) :

                $info = $zodiac['content'];
                $elements = $zodiac['element'];
                $integer = $zodiac['order'];
                $ruledBy = $zodiac['planet'];
            ?>
                <ul>
                    <li>
                        <p class="zodiac-order">Order in chart: <?php echo $zodiac['order'] ?></p>
                    </li>
                    <li>
                        <p class="zodiac-content"> <?php echo $zodiac['content'] ?></p>
                    </li>
                    <li>
                        <p class="zodiac-element">Element: <?php echo $zodiac['element'] ?></p>
                    </li>
                    <?php

                    if ($ruledBy === 'the Sun') {
                        echo "This is the only Zodiac sign ruled by $ruledBy.";
                    } ?>

                </ul>
            <?php endforeach; ?>
        </div>
    </div>
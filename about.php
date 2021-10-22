<?php

require __DIR__ . '/arrays.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About your Zodiac</title>
</head>

<body>
    <div class="zodiac-info">
        <ul>
            <li>
                <p class="zodiac-content"> <?php echo $zodiac['content'] ?>
            </li>
            <p class="zodiac-element"> <?php echo $zodiac['element'] ?>
                </li>
        </ul>
    </div>
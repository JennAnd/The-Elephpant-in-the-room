<?php

declare(strict_types=1);
require __DIR__ . '/arrays.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zodiacs</title>
    <link rel="stylesheet" href="article.css" />
    <link rel="stylesheet" href="navigation.css" />
    <link rel="stylesheet" href="button.css" />
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
    <h1>Larn about your Zodiac</h1>
    <?php foreach ($zodiacs as $zodiac) : ?>
        <div class="container">
            <div class="box">
                <p class="content"> <?php echo $zodiac['content'] ?> </p>
                <p class="content"> <?php echo $zodiac['date'] ?> </p>
                <?php if (file_exists(__DIR__ . '/images/Aladdin.jpg')) : ?>
                    <div class="image-placement"><img src="/images/Aladdin.jpg" alt="image"></div>

                <?php endif; ?>
            </div>

        </div>
    <?php endforeach; ?>
</body>

</html>
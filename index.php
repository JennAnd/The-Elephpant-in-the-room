<?php
require __DIR__ . '/header.php';
require __DIR__ . '/arrays.php';
require __DIR__ . '/functions.php';

?>
<header>
    <nav>
        <ul>
            <li><a href="#">HOME</a></li>
            <li><a href="#">ABOUT</a></li>
            <li><a href="#">CONTACT</a></li>
        </ul>
    </nav>
</header>

<main>
    <div class="title">
        <h1><?php getPageName("ZODIAC SIGNS") ?></h1>
    </div>
    <div class="chart">
        <img src="images/zodiac-chart.png" alt="zodiac-chart" />
    </div>
    <div class="learn">
        <h2>Learn about your Zodiac sign</h2>
    </div>
</main>

<div class="container">
    <div class="box">

        <?php foreach ($zodiacs as $zodiac) :
            $name = $zodiac['title'];
            $date = $zodiac['date'];
            $img = $zodiac['image'];
            $press = $zodiac['button'];


        ?>
            <div class="zodiac-info">
                <ul>
                    <li>
                        <p class="image"><img src=" <?php echo "$img"; ?>"></p>
                    </li>
                    <li>
                        <p class="zodiac-title"><?php echo $name ?></p>
                    </li>
                    <li>
                        <p class="zodiac-date"><?php echo $date ?></p>
                    </li>
                    <li>
                        <a href="about.php?order=<?php echo $zodiac['order'] ?>" class="zodiac-button"><?php echo $press ?></a>
                    </li>
                </ul>
            </div>


        <?php endforeach; ?>
    </div>

</div>
<?php
require __DIR__ . '/footer.php';
?>

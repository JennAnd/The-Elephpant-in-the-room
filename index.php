<?php
require __DIR__ . '/header.php';
require __DIR__ . '/arrays.php';

?>

<nav>
    <ul>
        <li><a href="#">HOME</a></li>
        <li><a href="#">ABOUT</a></li>
        <li><a href="#">CONTACT</a></li>
    </ul>
</nav>

<div class="title">
    <h1>ZODIAC SIGNS</h1>
</div>
<div class="chart"><img src="images/zodiac-chart.png" alt="zodiac-chart" /></div>
<div class="learn">
    <h2>Learn about your Zodiac sign</h2>
</div>
<div class="container">
    <div class="box">

        <?php foreach ($zodiacs as $zodiac) :
            $name = $zodiac['title'];
            $info = $zodiac['content'];
            $dates = $zodiac['date'];
            $elements = $zodiac['element'];
            $img = $zodiac['image'];
            $press = $zodiac['button'];
            $integer = $zodiac['order'];

        ?>
            <div class="zodiac-info">
                <ul>
                    <li>
                        <p class="image"><img src=" <?php echo "$img"; ?>"></p>
                    </li>
                    <li>
                        <p class="zodiac-title"><?php echo $zodiac['title'] ?></p>
                    </li>
                    <li>
                        <p class="zodiac-date"><?php echo $zodiac['date'] ?></p>
                    </li>

                    <li>
                        <button class="zodiac-button"><?php echo $zodiac['button'] ?></button>
                    </li>

                </ul>
            </div>


        <?php endforeach; ?>
    </div>

</div>
<?php
require __DIR__ . '/footer.php';
?>
<?php
require __DIR__ . '/header.php';
require __DIR__ . '/arrays.php';
require __DIR__ . '/about.php';
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


<?php foreach ($zodiacs as $zodiac) :
    $name = $zodiac['title'];
    $info = $zodiac['content'];
    $dates = $zodiac['date'];
    $elements = $zodiac['element'];
    $img = $zodiac['image'];
    $press = $zodiac['button'];

?>
    <div class="container">
        <div class="box">
            <p><img src=" <?php echo "$img"; ?>"></p>
            <p> <?php echo $zodiac['title'] ?></p>
            <p> <?php echo $zodiac['date'] ?></p>



        <?php endforeach; ?>
        </div>

    </div>
    <?php
    require __DIR__ . '/footer.php';
    ?>
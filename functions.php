<?php

declare(strict_types=1);

function getPageName($name)
{
    echo $name;
}

// function för att få ut planeten 
function ruledBy($zodiacs, $ruledBy)
{
    foreach ($zodiacs as $zodiac) {

        if ($ruledBy === $zodiac['planet']) {
            return "This Zodiac sign is ruled by $ruledBy.";
        }
    }
}

// function möjligtvis kunna få ut en sign på sidan 
/*function ruledBy2($zodiacs)
{
    foreach ($zodiacs as $zodiac) {
        for ($x = 0; $x = $zodiac; $x++)
            echo $zodiac['content'];
    }
}

//function för att koppla zodiacs order med links id. 
function getPage(int $zodiacOrder, array $links)
{
    foreach ($links as $link) {
        $id = $link['id'];
        if ($id == $zodiacOrder) {
            return $link[''];
        }
    }
}
*/
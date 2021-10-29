<?php

declare(strict_types=1);

function getPageName($name)
{
    echo $name;
}


function ruledBy($zodiacs, $ruledBy)
{
    foreach ($zodiacs as $zodiac) {

        if ($ruledBy === $zodiac['planet']) {
            return "This Zodiac sign is ruled by $ruledBy.";
        }
    }
}

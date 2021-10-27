<?php

declare(strict_types=1);

$zodiacs = [


    [
        'title' => 'Aries',
        'order' => 1,
        'content' => file_get_contents(__DIR__ . '/content/aries.txt'),
        'date' => 'March 21 - April 19',
        'element' => 'Fire',
        'image' => '/images/aries.png',
        'button' => 'More about Aries',
        'planet' => 'Mars'
    ],

    [
        'title' => 'Taurus',
        'order' => 2,
        'content' => file_get_contents(__DIR__ . '/content/taurus.txt'),
        'date' => 'April 20 - May 20',
        'element' => 'Earth',
        'image' => '/images/taurus.png',
        'button' => 'More about Taurus',
        'planet' => 'Venus'

    ],
    [
        'title' => 'Gemini',
        'order' => 3,
        'content' => file_get_contents(__DIR__ . '/content/gemini.txt'),
        'date' => 'May 21 - June 20',
        'element' => 'Air',
        'image' => '/images/gemini.png',
        'button' => 'More about Gemini',
        'planet' => 'Mercury'
    ],

    [
        'title' => 'Cancer',
        'order' => 4,
        'content' => file_get_contents(__DIR__ . '/content/cancer.txt'),
        'date' => 'June 21 - July 22',
        'element' => 'Water',
        'image' => '/images/cancer.png',
        'button' => 'More about Cancer',
        'planet' => 'the Moon'
    ],

    [
        'title' => 'Leo',
        'order' => 5,
        'content' => file_get_contents(__DIR__ . '/content/leo.txt'),
        'date' => 'July 23 - August 22',
        'element' => 'Fire',
        'image' => '/images/leo.png',
        'button' => 'More about Leo',
        'planet' => 'the Sun'
    ],

    [
        'title' => 'Virgo',
        'order' => 6,
        'content' => file_get_contents(__DIR__ . '/content/virgo.txt'),
        'date' => 'August 23 – September 22',
        'element' => 'Earth',
        'image' => '/images/virgo.png',
        'button' => 'More about Virgo',
        'planet' => 'Mercury'
    ],

    [
        'title' => 'Libra',
        'order' => 7,
        'content' => file_get_contents(__DIR__ . '/content/libra.txt'),
        'date' => 'September 23 - October 22',
        'element' => 'Air',
        'image' => '/images/libra.png',
        'button' => 'More about Libra',
        'planet' => 'Venus'
    ],

    [
        'title' => 'Scorpio',
        'order' => 8,
        'content' => file_get_contents(__DIR__ . '/content/scorpio.txt'),
        'date' => 'October 23 - November 21',
        'element' => 'Water',
        'image' => '/images/scorpio.png',
        'button' => 'More about Scorpio',
        'planet' => 'Pluto'
    ],

    [
        'title' => 'Sagittarius',
        'order' => 9,
        'content' => file_get_contents(__DIR__ . '/content/sagittarius.txt'),
        'date' => 'November 22 - December 21',
        'element' => 'Fire',
        'image' => '/images/sagittarius.png',
        'button' => 'More about Sagittarius',
        'planet' => 'Jupiter'
    ],

    [
        'title' => 'Capricorn',
        'order' => 10,
        'content' => file_get_contents(__DIR__ . '/content/capricorn.txt'),
        'date' => 'December 22 - January 19',
        'element' => 'Earth',
        'image' => '/images/capricorn.png',
        'button' => 'More about Capricorn',
        'planet' => 'Saturn'
    ],

    [
        'title' => 'Aquarius',
        'order' => 11,
        'content' => file_get_contents(__DIR__ . '/content/aquarius.txt'),
        'date' => 'January 20 - February 18',
        'element' => 'Air',
        'image' => '/images/aquarius.png',
        'button' => 'More about Aquarius',
        'planet' => 'Uranus'
    ],

    [
        'title' => 'Pisces',
        'order' => 12,
        'content' => file_get_contents(__DIR__ . '/content/pisces.txt'),
        'date' => 'February 19 - March 20',
        'element' => 'Water',
        'image' => '/images/pisces.png',
        'button' => 'More about Pisces',
        'planet' => 'Neptune'
    ],

];

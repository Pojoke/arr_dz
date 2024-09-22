<?php

$slov = [
    "Literally" => [
        "Точно",
        "Буквально",

    ],
    "Nonplussed" => "Оторопеть",
    "Left" => [
        "Покидать",
        "Забывать",

    ],
    "Abandon" => "Покидать",
    "Forget" => "Забывать",
    "Exactly" => "Точно",

    // "Germany" => "German",
    // "Italy" => "Italian",
];

$languages = [];
foreach ($slov as $country => $lang) {
    echo $country . "\n";
    //print_r($lang);

    if (is_array($lang)) {
        foreach ($lang as $l) {
            echo $l . " ";
        }
    } else {
        echo $lang;
    }
    echo "\n";
}

foreach ($slov as $country => $lang) {
    if (!is_array($lang)) {
        $languages[$lang][] = $country;
    } else {
        foreach ($lang as $l) {
            $languages[$l][] = $country;
        }
    }
}

// print_r($languages);
var_dump($languages);

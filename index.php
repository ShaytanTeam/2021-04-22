<?php

//Masyvai
//Sukurti skirtingų skaičių masyvą. Sekančias užduotis atlikti su naujomis masyvo kopijomis.

$differentNumbers = [-10, -5, -2, 0, 1, 4, 8];

var_dump($differentNumbers);

//Padauginti esamo masyvo narius iš 2

foreach ($differentNumbers as $value) {
    $duplicateNumbers[] = $value * 2;
}

var_dump($duplicateNumbers);

//Pakelti masyvo narius kvadratu

foreach ($differentNumbers as $value) {
    $powNumbers[] = pow($value,2);
}

var_dump($powNumbers);

//Padauginti masyvo narius iš jų index'o (vietos masyve)

foreach ($differentNumbers as $key)
foreach ($differentNumbers as $value)
for ($i = 0; $i <= $key; $i++)
{
    $keyNumbers[] = $i * $value;
}
var_dump($keyNumbers);

//Atrinkti tiktai teigimų elementų masyvą

$positiveNumbers = array_filter($differentNumbers, function ($i) {
    return $i >=0;
});

var_dump($positiveNumbers);

//Atrinkti tiktai neigiamų elementų masyvą

$negativeNumbers = array_filter($differentNumbers, function ($i) {
    return $i < 0;
});

var_dump($negativeNumbers);

//Atrinkti tiktai lyginių skaičių masyvą

$evenNumbers = array_filter($differentNumbers, function ($i) {
    return $i%2==0;
});

var_dump($evenNumbers);

//Atrinkti tiktai nelyginių skaičių masyvą

$oddNumbers = array_filter($differentNumbers, function ($i) {
    return $i%2!==0;
});

var_dump($oddNumbers);

//Asociatyvūs masyvai
//Sukurti masyvą, kuris aprašytų knygos duomenis: title, author, year, genre

$bookArrayOne = [
    "title" => "On the Road",
    "author" => "Jack Kerouac",
    "year" => "1957",
    "genre" => "beat",
];

$bookArrayTwo = [
    "title" => "Animal Farm",
    "author" => "George Orwell",
    "year" => "1945",
    "genre" => "political satire",
];

//Sukurti masyvą, kurio elementai būtų masyvai aprašantys knygas

$allBookArray = array_merge_recursive($bookArrayOne, $bookArrayTwo);

//Išvesti visus knygų masyvo elementus su var_dump;

var_dump($allBookArray);

//Išvesti visus knygų masyvo elementus lentele;


//Išvesti visų visų knygų metų vidurkį;


//
//Funkcijos
//Sukurti funkciją, kuri ima masyvą ir grąžina didžiausią skaičių masyve.
//Sukurti funkciją, kuri ima masyvą ir grąžina mažiausią skaičių masyve.
//Sukurti funkciją, kuri ima masyvą ir išrikiuja jo elementus nuo mažiausio iki didžiausio ir grąžina tą masyvą.
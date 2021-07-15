<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.09 - Closures e generators");

/*
 * [ closures ] https://php.net/manual/pt_BR/functions.anonymous.php
 */
fullStackPHPClassSession("closures", __LINE__);

$my_age = function ($year) {
    $age = date("Y") - $year;
    return "<p>Você tem {$age} anos! </p>";
};

echo $my_age(1989);
echo $my_age(1998);

$priceBrl = function ($price) {
    return number_format($price, decimals: 2, decimal_separator: ",", thousands_separator: ".");
};
echo "<p>O prjeto custa R$ {$priceBrl(price: 3600)}</p>";

$myCart = [];
$myCart["totalPrice"] = 0;
$cartAdd = function ($item, $qtd, $price) use (&$myCart) {
    $myCart[$item] = $qtd * $price;
    $myCart["totalPrice"] += $myCart[$item];
};
$cartAdd(item: "html5", qtd: 1, price: 500);
$cartAdd(item: "jquery", qtd: 2, price: 399);
var_dump($myCart);


/*
 * [ generators ] https://php.net/manual/pt_BR/language.generators.overview.php
 */
fullStackPHPClassSession("generators", __LINE__);
$iterator = 10;

function showDates($days)
{
    $saveDate = [];
    for ($day = 1; $day < $days; $day++) {
        $saveDate[] = date(format: "d/m/y");
    }
    return $saveDate;
}
echo "<div style='text-align: center'>";
foreach (showDates(0) as $date) {
    echo "<small class='tag'> [$date]</small>" . PHP_EOL;
}
echo "</div>";
function generatorDate($days)
{
    for ($day = 1; $day < $days; $day++) {
        yield date(format: "d/m/y");
    }
};

echo "<div style='text-align: center'>";
foreach (generatorDate($iterator) as $date) {
    echo "<small class='tag'> [$date]</small>" . PHP_EOL;
}
echo "</div>";

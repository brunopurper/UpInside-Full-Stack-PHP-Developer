
<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.03 - Comandos de saída");

/**
 * [ echo ] https://php.net/manual/pt_BR/function.echo.php
 */
fullStackPHPClassSession("echo", __LINE__);

$hello = "Olá Mundo!";
$code = "<span class='tag'> #BoraProgramar!</span>";

echo "{$hello} {$code}";



/**
 * [ print ] https://php.net/manual/pt_BR/function.print.php
 */
fullStackPHPClassSession("print", __LINE__);

print "$hello $code <br>";
print $hello;
print $code;
/**
 * [ print_r ] https://php.net/manual/pt_BR/function.print-r.php
 */
fullStackPHPClassSession("print_r", __LINE__);

$array = [
  "company" => "UpInside",
  "course" => "FSPHP",
  "class" => "Comandos de saída"
];

print_r($array);
echo "<pre>", print_r($array, true), "</pre>";

/**
 * [ printf ] https://php.net/manual/pt_BR/function.printf.php
 */
fullStackPHPClassSession("printf", __LINE__);

$article = "<article><h1>%s</h1><p>%s</p></article>";
$title = "{$hello} {$code}";
$subtitle = "loren Ipsum simply one dont u dont girl, yeah iam the one, dont you no girl, yeah i am the one dj kaled
we the bes music another one";

printf($article, $title, $subtitle);
/**
 * [ vprintf ] https://php.net/manual/pt_BR/function.vprintf.php
 */
fullStackPHPClassSession("vprintf", __LINE__);

$company = "<article> <h1>Escola %s</h1> <p>Curso <b>%s</b>, aula <b>%s</b></p></article>";

vprintf($company, $array);

//echo vsprintf($company,$array);

/**
 * [ var_dump ] https://php.net/manual/pt_BR/function.var-dump.php
 */
fullStackPHPClassSession("var_dump", __LINE__);

$b = 3.1;
$c = true;
var_dump($b,$c); 
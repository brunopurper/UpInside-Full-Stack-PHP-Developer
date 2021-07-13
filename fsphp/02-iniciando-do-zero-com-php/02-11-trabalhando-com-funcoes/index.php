<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.11 - Trabalhando com funções");

/*
 * [ functions ] https://php.net/manual/pt_BR/language.functions.php
 */
fullStackPHPClassSession("functions", __LINE__);
require __DIR__."/functions.php";

var_dump(functionName(arg1: "Pearl Jam", arg2: "AC/DC", arg3: "Alter Bridge"));
var_dump(functionName(arg1: "Robson Jam", arg2: "Kaue /DC", arg3: "Gustavo Bridge"));

var_dump(optionArgs(arg1: "Robson"));
var_dump(optionArgs(arg1: "Robson", arg2: "Kaue"));
var_dump(optionArgs(arg1: "Robson", arg2: "Kaue", arg3: "Gustavo"));
/*
 * [ global access ] global $var
 */
fullStackPHPClassSession("global access", __LINE__);
$peso = 86;
$altura = 1.83;
echo "O seu IMC é de: ", calcImc();

/*
 * [ static arguments ] static $var
 */
fullStackPHPClassSession("static arguments", __LINE__);

$pay = payTotal(price:200);
$pay = payTotal(price:150);
$pay = payTotal(price:500);

echo $pay;
/*
 * [ dinamic arguments ] get_args | num_args
 */
fullStackPHPClassSession("dinamic arguments", __LINE__);

var_dump(myTeam("Kaue","Gustavo", "Gah", "João"));


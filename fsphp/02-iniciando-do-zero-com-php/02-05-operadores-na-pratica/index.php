<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
echo fullStackPHPClassName("02.05 - Operadores na prática");

/**
 * [ operadores ] https://php.net/manual/pt_BR/language.operators.php
 * [ atribuição ] https://php.net/manual/pt_BR/language.operators.assignment.php
 */
fullStackPHPClassSession("atribuição", __LINE__);

$operatorA = 5;
$operatos = [
    "a += 5" => ($operatorA += 5),
    "a -= 5" => ($operatorA -= 5),
    "a *- 5" => ($operatorA *= 5),
    "a /= 5" => ($operatorA /= 5),
];

var_dump($operatos);

$incrementA = 5;
$incrementB = 5;

$increment = [
    "pós-incremento" => $incrementA++,
    "rés-incremento" => $incrementA,
    "pré-incremento" => ++$incrementA,
    "pós-decremento" => $incrementB--,
    "rés-decremento" => $incrementB,
    "pré-decremento" => --$incrementB
];

var_dump($increment);



/**
 * [ comparação ] https://php.net/manual/pt_BR/language.operators.comparison.php
 */
fullStackPHPClassSession("comparação", __LINE__);

$relatedA = 5;
$relatedB = "5";
$relatedC = 10;

$related = [
// com (2) = / Está verificando se o valor é igual 
   "a == b" => ($relatedA == $relatedB),
// com (3) = / ele verifica o valor e o tipo de daodo
   "a === b" => ($relatedA === $relatedB),
// com o "!" + "="| != | / ele verifica se é diferente 
   "a != b" => ($relatedA != $relatedB),
// com o "!" e (2) "="| !== | / ele verifica se é diferente com o tipo de dado
    "a !== b" => ($relatedA != $relatedB),
// Maior ou menor ou igual
    "a > c" => ($relatedA > $relatedC),
    "a < c" => ($relatedA < $relatedC),
    "a >= c" => ($relatedA >= $relatedC),
    "a <= c" => ($relatedA <= $relatedC),

];

var_dump($related);

/**
 * [ lógicos ] https://php.net/manual/pt_BR/language.operators.logical.php
 */
fullStackPHPClassSession("lógicos", __LINE__);

$logicA = true;
$logicB = false;

$logic = [
    "a && b" => ($logicA && $logicB),
    "a || b" => ($logicA || $logicB),
    "a" => ($logicA),
    "! a" => (!$logicA),
    "! b" => (!$logicB),

];

var_dump($logic);


/**
 * [ aritiméticos ] https://php.net/manual/pt_BR/language.operators.arithmetic.php
 */
fullStackPHPClassSession("aritiméticos", __LINE__);

$calcA = 5;
$calcB = 10;

$calc = [
    "a + b" => ($calcA + $calcB),
    "a - b" => ($calcA - $calcB),
    "a * b" => ($calcA * $calcB),
    "a / b" => ($calcA / $calcB),
    "a % b" => ($calcA % $calcB),
];
var_dump($calc);
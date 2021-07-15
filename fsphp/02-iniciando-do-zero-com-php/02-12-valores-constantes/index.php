<?php

require __DIR__ . '/../../fullstackphp/fsphp.php';

fullStackPHPClassName("02.12 - Constantes e constantes mágicas");
/*
 * [ constantes ] https://php.net/manual/pt_BR/language.constants.php
 */
fullStackPHPClassSession("constantes", __LINE__);

define("COURSE", "Full Stack PHP");

const AUTHOR = "Robson";

$formation = true;
if ($formation) {
    
    define("COURSE_TYPE", "Formação");
};
/*
 * [ constantes mágicas ] https://php.net/manual/pt_BR/language.constants.predefined.php
 */
fullStackPHPClassSession("constantes mágicas", __LINE__);

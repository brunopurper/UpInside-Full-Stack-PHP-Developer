<?php

function functionName($arg1, $arg2 , $arg3) {
    $body = [$arg1, $arg2, $arg3];
    return $body;
}

function optionArgs($arg1, $arg2 = true, $arg3 = null){
    $body = [$arg1, $arg2, $arg3];
    return $body;
}

function calcImc(){
  global $peso;
  global $altura;

  return $peso / ($altura * $altura);
};

function payTotal ($price){
    static $total;
    $total += $price;
    return"<p>O total a pagar é de R$ ".number_format($total, decimals: "2", decimal_separator: ",", thousands_separator: ".")."</p>";
}

function myTeam() {
    $teamNames = func_get_args();
    $teamCount = func_num_args();

    return["members" => $teamNames, "count" => $teamCount];
}
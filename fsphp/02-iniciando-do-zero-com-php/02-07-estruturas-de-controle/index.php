<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.07 - Estruturas de controle");

/*
 * [ if ] https://php.net/manual/pt_BR/control-structures.if.php
 * [ elseif ] https://php.net/manual/pt_BR/control-structures.elseif.php
 * [ else ] https://php.net/manual/pt_BR/control-structures.else.php
 */
fullStackPHPClassSession("if, elseif, else", __LINE__);

$test = true;

if ($test) {
    var_dump(true);
    echo "Tu é pika mano!";
} else {
    var_dump(false);
}

$age = 16;

if ($age < 20) {
    var_dump("Bandas coloridas");

}elseif ($age > 20 && $age < 50) {
    var_dump("Ótimas bandas");
}else {
    var_dump("Rock and roll raiz");
}

$hour = 3;

if($hour >= 5 && $hour < 23 ) {
    if ($hour < 7){
        var_dump("Bob Marley");
    }else {
        var_dump("After Bridge");
    }
} else {
    var_dump("ZZZZZZZZZZ");
}



/*
 * [ isset  verifica se esxite] https://php.net/manual/pt_BR/function.isset.php
 * [ empty verifica se não existe ou está vazio] https://php.net/manual/pt_BR/function.empty.php
 */
fullStackPHPClassSession("isset, empty, !", __LINE__);
$rock = "";

if(isset($rock)){
    var_dump("Rock and roll!");
}else {
    var_dump("Die");
}

$rockAndRoll = "AC/DC";

if(!empty($rockAndRoll)) {
    var_dump("Rock existe e toca {$rockAndRoll}");
}else {
    var_dump("Não existe ou não está tocoando");
}

/*
 * [ switch ] https://secure.php.net/manual/pt_BR/control-structures.switch.php
 */
fullStackPHPClassSession("switch", __LINE__);

$payment="completed";

switch($payment) {
    case "billet_printed":
        var_dump("Boleto impresso");
        break;
    case 'canceld':
        var_dump("Pagamento cancelado");
        break;
    case "past_due":
    case "pending":
        var_dump("Aguardando pagamento");
        break;
    case "approved":
    case "completed":
        var_dump("Pagamento aprovado");

        break;
    default: 
    var_dump("Erro ao processar seu pagamento");
    break;
};


<?php

$sel = $_POST ['sel'];

$msg = $_POST ['mensagem'];

if ($sel == "tamanho") {

   print "<b> <br> <br> Número de Caracteres: </b>" . strlen ($msg);
}

elseif ($sel == "inverter") {

    print "<b> <br> <br> Texto invertido: </b>" .strrev ($msg);
}

elseif ($sel == "maior") {

    print "<b> <br> <br> Texto em letras maiúsculas: </b>" . strtoupper($msg);
}

elseif ($sel == "menor") {
    print"<b> <br> <br> Texto em letras minúsculas: </b>" .  strtolower ($msg);
}

elseif ($sel == "primeira") {
    print "<b> <br> <br> Texto com as primeiras letras maiúsculas: </b>" . ucwords($msg);
}

<?php

$n1        = $_POST["v1"];
$n2        = $_POST["v2"];
$resultado = 0;

if ($_POST["calc"] == "adicionar") {
    $resultado = $n1 + $n2;

    print "<p> <b> Resultado do Cálculo: " .  $resultado .  "</b> </p>";
}

elseif ($_POST["calc"] == "subtrair") {
    $resultado = $n1 - $n2;

    print "<p> <b> Resultado do Cálculo: " .  $resultado .  "</b> </p>";
}

elseif ($_POST["calc"] == "multiplicar") {
    $resultado = $n1 * $n2;

    print "<p> <b> Resultado do Cálculo: " .  $resultado .  "</b> </p>";
}

else {
    $resultado = $n1 / $n2;

    print "<p> <b> Resultado do Cálculo: " .  $resultado .  "</b> </p>";
}

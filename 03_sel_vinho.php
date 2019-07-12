<?php

print" <img src=" . "img/3.jpg " . "width=" . "100 " . "height=" . "100 ". " />";
print" <img src=" . "img/2.jpg " . "width=" . "100 " . "height=" . "100 ". " />";
print" <img src=" . "img/1.jpg " . "width=" . "100 " . "height=" . "100 ". " />". "<br>";

print"<b> Obrigado pela sua seleção " . $_POST["nome"] . "</b>" . 
    "<br>" .
        "_____________________________________________________________________________________________  <br> ";

print" Você realmente aprecia " . $_POST["favorito"] . "<br>";
print " - especialmente com um bom vinho " . $_POST["vinho"];

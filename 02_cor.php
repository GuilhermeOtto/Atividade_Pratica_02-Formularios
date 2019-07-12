<?php

print "<b>  R: </b>" . $_POST["r"];

print "<b>    G: </b>" . $_POST["g"];

print "<b>    B: </b> " . $_POST["b"] . "<br><br>";

print"  <div class= a>
        <div class= b>
        </div>
        </div> ";

print"<style>
        .a{
            width: 150px;
            height: 150px;
            background-color: rgb( " . $_POST["r"] . " , ". $_POST["g"] .", ". $_POST["b"] . ");
        }

        .b{
            width: 150px;
            height: 150px;
            background-color: rgb( " . $_POST["r"] . " , ". $_POST["g"] .", ". $_POST["b"] . ");
        }

        </style>";
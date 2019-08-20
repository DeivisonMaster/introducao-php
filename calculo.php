<?php

    $distancia = $_POST["distancia"];
    $autonomia = $_POST["autonomia"];

    $valorGasolina  = 4.80;
    $valorAlcool    = 3.80;
    $valorDiesel    = 3.90;

    $calculoGasolina = ($distancia / $autonomia) * $valorGasolina;
    $calculoAlcool   = ($distancia / $autonomia) * $valorAlcool;
    $calculoDiesel   = ($distancia / $autonomia) * $valorDiesel;

    print "<p>Valor Gasolina R$ ".$calculoGasolina."</p>";
    print "<p>Valor Gasolina R$ ".$calculoAlcool."</p>";
    print "<p>Valor Gasolina R$ ".$calculoDiesel."</p>";




?>
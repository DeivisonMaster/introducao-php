<?php

if($_POST){ // validação caso não seja uma submissão via POST

    $distancia = $_POST["distancia"];
    $autonomia = $_POST["autonomia"];

    $valorGasolina  = 4.80;
    $valorAlcool    = 3.80;
    $valorDiesel    = 3.90;

    if(is_numeric($distancia) && is_numeric($autonomia)){ // validação caso dados não sejam numericos
        $calculoGasolina = ($distancia / $autonomia) * $valorGasolina;
        $calculoAlcool   = ($distancia / $autonomia) * $valorAlcool;
        $calculoDiesel   = ($distancia / $autonomia) * $valorDiesel;

        print "<p>Valor Gasolina R$ ".$calculoGasolina."</p>";
        print "<p>Valor Gasolina R$ ".$calculoAlcool."</p>";
        print "<p>Valor Gasolina R$ ".$calculoDiesel."</p>";
    }else{
        print "<p>O valor recebido não é numérico</p>";
    }

}else{
    print "<p>Nenhum dado foi recebido pelo formulário</p>";
}

?>
<?php

if($_POST){ // validação caso não seja uma submissão via POST

    $distancia = $_POST["distancia"];
    $autonomia = $_POST["autonomia"];

    $valorGasolina  = 4.80;
    $valorAlcool    = 3.80;
    $valorDiesel    = 3.90;

    if(is_numeric($distancia) && is_numeric($autonomia)){ // validação caso dados não sejam numericos
        
        if($distancia > 0 && $autonomia > 0){
            $calculoGasolina = ($distancia / $autonomia) * $valorGasolina;
            $calculoGasolina = number_format($calculoGasolina, 2, ',', '.');

            $calculoAlcool   = ($distancia / $autonomia) * $valorAlcool;
            $calculoAlcool   = number_format($calculoAlcool, 2, ',', '.');

            $calculoDiesel   = ($distancia / $autonomia) * $valorDiesel;
            $calculoDiesel   = number_format($calculoDiesel, 2, ',', '.');

            print "<p>Valor Gasolina R$ ".$calculoGasolina."</p>";
            print "<p>Valor Gasolina R$ ".$calculoAlcool."</p>";
            print "<p>Valor Gasolina R$ ".$calculoDiesel."</p>";
        }else{
            print "<p>O valor da distância e autonomia devem ser maiores que 0</p>";    
        }
        
    }else{
        print "<p>O valor recebido não é numérico</p>";
    }

}else{
    print "<p>Nenhum dado foi recebido pelo formulário</p>";
}

?>
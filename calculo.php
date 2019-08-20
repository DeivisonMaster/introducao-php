<?php

$mensagem = "";

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

            $mensagem.= "<div class='sucesso'>";
            $mensagem.= "O valor total gasto será de: ";
            $mensagem.= "<ul>";
            $mensagem.= "<p>Gasolina R$ ".$calculoGasolina."</p>";
            $mensagem.= "<p>Gasolina R$ ".$calculoAlcool."</p>";
            $mensagem.= "<p>Gasolina R$ ".$calculoDiesel."</p>";
            $mensagem.= "</ul>";
            $mensagem.= "</div>";
        }else{
            $mensagem.="<div class='erro'">
            $mensagem.="<p>O valor da distância e autonomia devem ser maiores que 0</p>";    
            $mensagem.="</div>";
        }
        
    }else{
        $mensagem.="<div class='erro'">
        $mensagem.="<p>O valor recebido não é numérico</p>";
        $mensagem.="</div>";
    }

}else{
    $mensagem.="<div class='erro'">
    $mensagem.="<p>Nenhum dado foi recebido pelo formulário</p>";
    $mensagem.="</div>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">   
    <title>Calculo de Consumo de Combustível</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>    
    <main>
        <div class="painel">
            <h2>Resultado do cálculo de consumo</h2>
            <div class="conteudo-painel">
                <?php
                    print $mensagem;
                ?>
            </div>
        </div>
    </main>
</body>
</html>
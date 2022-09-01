<?php
    include_once 'conexao.php';
    $sql ="SELECT * FROM viagens ORDER BY id";
    $consulta = $conn->prepare($sql);
    $consulta->execute();
    foreach($consulta as $linha){
        echo "<hr><br>"
        ."Viagem ".$linha['id'].":<br><br>"
        ."Carro: ".$linha['modeloCarro']."<br>"
        ."Motorista: ".$linha['motorista']."<br>"
        ."Origem: ".$linha['localOrigem']."<br>"
        ."Destino: ".$linha['localDestino']."<br>"
        ."Quilometragem ".$linha['quilometragem']." Quilômetros<br>"
        ."Combustível gasto: ".$linha['litrosCombustivel']." Litros<br>"
        ."Preço combustível: ".$linha['valorCombustivel']." Reais<br>"
        ."Autonomia: ".($linha['quilometragem']/$linha['litrosCombustivel'])." Quilometros por litro.<br>"
        ."Preço total: ".($linha['litrosCombustivel']*$linha['valorCombustivel'])." Reais<br>"
        ."Preço por quilômetro: ".(($linha['litrosCombustivel']*$linha['valorCombustivel'])/$linha['quilometragem'])." Reais<br>";
    }
?>
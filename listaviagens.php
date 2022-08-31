<?php
    $username='root';
    $password='';
    try {
        $conn = new PDO('mysql:host=localhost;dbname=viagens', $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
    $sql ="SELECT * FROM viagens ORDER BY id";
    $consulta = $conn->prepare($sql);
    $consulta->execute();
    $texto = "";
    foreach($consulta as $linha){
        $texto = $texto."--------------------------------------------------------<br>";
        $texto = $texto."Viagem ".$linha['id'].":<br><br>";
        $texto = $texto."Carro: ".$linha['modeloCarro']."<br>";
        $texto = $texto."Motorista: ".$linha['motorista']."<br>";
        $texto = $texto."Origem: ".$linha['localOrigem']."<br>";
        $texto = $texto."Destino: ".$linha['localDestino']."<br>";
        $texto = $texto."Quilometragem ".$linha['quilometragem']." Quilômetros<br>";
        $texto = $texto."Combustível gasto: ".$linha['litrosCombustivel']." Litros<br>";
        $texto = $texto."Preço combustível: ".$linha['valorCombustivel']." Reais<br>";
        $texto = $texto."Autonomia: ".($linha['quilometragem']/$linha['litrosCombustivel'])." Quilometros por litro.<br>";
        $texto = $texto."Preço total: ".($linha['litrosCombustivel']*$linha['valorCombustivel'])." Reais<br>";
        $texto = $texto."Preço por quilômetro: ".(($linha['litrosCombustivel']*$linha['valorCombustivel'])/$linha['quilometragem'])." Reais<br>";
    }
    echo $texto;
?>
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
        echo "<hr><br>";
        echo "Viagem ".$linha['id'].":<br><br>";
        echo "Carro: ".$linha['modeloCarro']."<br>";
        echo "Motorista: ".$linha['motorista']."<br>";
        echo "Origem: ".$linha['localOrigem']."<br>";
        echo "Destino: ".$linha['localDestino']."<br>";
        echo "Quilometragem ".$linha['quilometragem']." Quilômetros<br>";
        echo "Combustível gasto: ".$linha['litrosCombustivel']." Litros<br>";
        echo "Preço combustível: ".$linha['valorCombustivel']." Reais<br>";
        echo "Autonomia: ".($linha['quilometragem']/$linha['litrosCombustivel'])." Quilometros por litro.<br>";
        echo "Preço total: ".($linha['litrosCombustivel']*$linha['valorCombustivel'])." Reais<br>";
        echo "Preço por quilômetro: ".(($linha['litrosCombustivel']*$linha['valorCombustivel'])/$linha['quilometragem'])." Reais<br>";
    }
?>
<?php
        $username='root';
        $password='';
        try {
            $conn = new PDO('mysql:host=localhost;dbname=viagens', $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
        $sql = "INSERT INTO viagens(motorista, localOrigem, localDestino, quilometragem, litrosCombustivel, modeloCarro, valorCombustivel)
        VALUES (:motorista, :localOrigem, :localDestino, :quilometragem, :litrosCombustivel, :modeloCarro, :valorCombustivel)";
        echo $sql;
        $consulta = $conn->prepare($sql);
        $consulta->execute(array(
            "motorista" => $_POST['motorista'],
            "localOrigem" => $_POST['localOrigem'],
            "localDestino" => $_POST['localDestino'],
            "quilometragem" => $_POST['quilometragem'],
            "litrosCombustivel" => $_POST['litrosCombustivel'],
            "modeloCarro" => $_POST['modeloCarro'],
            "valorCombustivel" => $_POST['valorCombustivel']
        ));
    ?>
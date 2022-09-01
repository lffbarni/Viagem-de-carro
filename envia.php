<?php
        include_once 'conexao.php';

        $sql = "INSERT INTO viagens(motorista, localOrigem, localDestino, quilometragem, litrosCombustivel, modeloCarro, valorCombustivel)
        VALUES (:motorista, :localOrigem, :localDestino, :quilometragem, :litrosCombustivel, :modeloCarro, :valorCombustivel)";
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="estilo.css">
    <?php
        session_start();

        include_once "conexao.php";
    ?>
</head>
<body>
    <div class="corpo">
        <h1>Viagem De Carro</h1>
        <div class="formulario">
            <div class="rodape"></div>
            <form id="formulario" method="post">
                <label for="iCarro">Modelo do carro:</label>
                <br>
                <input type="text" name="iCarro" id="iCarro">
                <br>
                <br>
                <label for="iMotorista">Motorista:</label>
                <br>
                <input type="text" name="iMotorista" id="iMotorista">
                <br>
                <br>
                <label for="iOrigem">Local de origem:</label>
                <br>
                <input type="text" name="iOrigem" id="iOrigem">
                <br>
                <br>
                <label for="iDestino">Destino:</label>
                <br>
                <input type="text" name="iDestino" id="iDestino">
                <br>
                <br>
                <label for="iQuilometragem">Quilometragem:</label>
                <br>
                <input type="number" step="0.01" name="iQuilometragem" id="iQuilometragem">
                <br>
                <br>
                <label for="iCombustivel">Combustivel gasto (em litros):</label>
                <br>
                <input type="number" step="0.01" name="iCombustivel" id="iCombustivel">
                <br>
                <br>
                <label for="iValor">Valor do combustível por litro (em reais):</label>
                <br>
                <input type="number" step="0.01" name="iValor" id="iValor">
                <br>
                <br>
                <input type="button" value="enviar" name="enviar" id="enviar">
            </form>
        </div>
    </div> 
    <center><h1>Listagem de Viagens</h1></center>
    <center><input type="button" value="listar" id="listar"></center>
    <center><div class = "resultado" id="resultado"></div></center>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("#enviar").click(function(){
            $.post("envia.php",
            {motorista : $("#iMotorista").val(),
            localOrigem : $("#iOrigem").val(),
            localDestino : $("#iDestino").val(),
            quilometragem : $("#iQuilometragem").val(),
            litrosCombustivel : $("#iCombustivel").val(),
            modeloCarro : $("#iCarro").val(),
            valorCombustivel : $("#iCombustivel").val(),
            }, function(){
                window.alert("Dados cadastrados com sucesso!");
            })   
        })
        $("#listar").click(function(){
            $.get("listaviagens.php", function(texto){
                $("#resultado").html(texto);
            })
        })
    })
    
</script>

</html>
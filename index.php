<?php
if(isset($_POST['altura']) && isset($_POST['peso'])) {
    $altura = $_POST['altura'];
    $peso = $_POST['peso'];
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap-4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>IMC - Índice de massa corporal</title>
</head>
<body>
    <div class="container container-fluid bg-dark">
    <br>
    <div class="container container-fluid bg-info text-white col-sm-6 mt-2">
        <div class="top">
            <h3><br>Calculadora de IMC <br><span style="font-size:13pt;">(Índice de massa corporal)</span></h3>
        </div>
        <div class="row mt-3 interface" style="width: 400px;">
            <div class="form-group col-sm-12 border bg-light">
                <form method="POST">
                    <label class="mt-2 text-dark">ALTURA:</label>
                    <input class="form-control form-control-md" type="text" value="<?php if (isset($_POST['altura'])) : echo $_POST['altura'];endif;?>" name="altura" id="altura" placeholder="Insira a altura" style="width:300px;">
                    <br>
                    <label class="text-dark">PESO:</label>
                    <input class="form-control input-imc" type="text" value="<?php if(isset($_POST['peso'])) : echo $_POST['peso'];endif;?>" name="peso" id="peso" placeholder="Insira o peso" style="width:300px;">
                    <br>
                    <div>
                        <input id="calcular" class="btn btn-primary mb-2" type="submit" value="Calcular">
                        <input type="button" class="btn btn-danger mb-2" id="limpar" value="Limpar">
                    </div>
                </form>
            </div>
        <br>
        </div>
    </div>
    
    <div class="col-6 mt-3" style="width: 275px;"><p id="alerta" style="height:25px;"></p></div>
    <div class="text-white mr-auto ml-auto container" style="width: 300px;background: black;">
        <span class="text-default">
            <?php
                require_once 'control.php';
            ?>
        </span>
    </div>
    <br>
</div>
</body>
</html>

<script src="js/script.js"></script>
<!--
    Calculadora de IMC básica - PHP!!!

    Desenvolvido por Daniel Pereira Sanches
    https://www.facebook.com/danielpereira6301
    https://instagram.com/danielpereira21063
    https://youtu.be/zSkSHwbBFFM
    BE HAPPY! :) 
-->
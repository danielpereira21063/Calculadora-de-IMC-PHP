<?php
require_once 'classes/IMC.php';
$imc = new IMC;
if(isset($_POST['altura']) && isset($_POST['peso'])) {
    $altura = $_POST['altura'];
    $peso = $_POST['peso'];

    $imc->setAltura($altura);
    $imc->setPeso($peso);
    $imc->calcular();
} else {
    $imc->calcular();
}
?>
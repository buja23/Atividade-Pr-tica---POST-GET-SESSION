<?php

require_once "funcoesCalculoComprimento.php";

$resultado = "";
session_start(); // Iniciando a sessão, permitindo o uso de variáveis de sessão

if (!empty($_GET['inputNum1']) && !empty($_GET['selectOperacoes'])) {
    $numeros1 = $_GET['inputNum1'];

    
    if ($_GET['selectOperacoes'] == "Centimetros") {
        $resultado = $numeros1 . " cm = " . CentimetrosParaMetros($numeros1) . " m";
    } elseif ($_GET['selectOperacoes'] == "Metros") {
        $resultado = $numeros1 . " m = " . MetrosParaCentimetros($numeros1) . " cm";
    } elseif ($_GET['selectOperacoes'] == "MetrosParaQuilometros") {
        $resultado = $numeros1 . " m = " . MetrosParaQuilometros($numeros1) . " km";
    } elseif ($_GET['selectOperacoes'] == "QuilometrosParaMetros") {
        $resultado = $numeros1 . " km = " . QuilometrosParaMetros($numeros1) . " m";
    }

    // Guarda o resultado na variável de sessão
    $_SESSION['resultado'] = $resultado;

    // Comando HEADER (PHP) redireciona para uma página especificada
    header('Location: ../index.php');
    die();
}

?>

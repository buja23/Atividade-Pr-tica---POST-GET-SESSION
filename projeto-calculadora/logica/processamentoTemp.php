<?php

require_once "funcoesCalculoTemp.php";

$resultado = "";
session_start(); // Iniciando a sessão, permitindo o uso de variáveis de sessão

if (!empty($_GET['inputNum1']) && !empty($_GET['selectOperacoes'])) {
    
    $numeros1 = $_GET['inputNum1'];

    if ($_GET['selectOperacoes'] == "Celsius") {
        $resultado = $numeros1 . " °F = " . Celsius($numeros1) . " °C";
    } elseif ($_GET['selectOperacoes'] == "Fahrenheit") {
        $resultado = $numeros1 . " °C = " . Fahrenheit($numeros1) . " °F";
    }

    // Guarda o resultado na variável de sessão
    $_SESSION['resultado'] = $resultado;

    // Comando HEADER (PHP) redireciona para uma página especificada
    header('Location: ../index.php');
    die();
}

?>

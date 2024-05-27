<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>CalcTEC</title>
</head>
<body>
    <header>
        <h1>CalcTEC</h1>
    </header>
    <nav class="menu">
        <ul>
            <li><a href="https://www.fatecpp.edu.br/">Sobre</a></li>
            <li><a href="index.php">Calculadora</a></li>
            <li><a href="temperatura.php">Temperatura</a></li>
            <li><a href="conversor.php">Conversão</a></li>
        </ul>
    </nav>
    
    <div class="div-conteudo">
        <form method="GET" action="logica/processamentoComprimento.php">
            <label>Digite um Valor:</label>
            <input type="text" name="inputNum1" placeholder="Digite um Valor">
            <select name="selectOperacoes">
                <option value="Centimetros">Centímetros para Metros</option>
                <option value="Metros">Metros para Centímetros</option>
                <option value="MetrosParaQuilometros">Metros para Quilômetros</option>
                <option value="QuilometrosParaMetros">Quilômetros para Metros</option>
            </select>
            <input id="botao" type="submit" value="Calcular">
        </form>
        <h1 id="resultado">
            <?php
                // Verificando se existe a variável de sessão resultado
                if(isset($_SESSION['resultado'])){
                    // Caso exista, utiliza um echo para exibir o resultado
                    echo $_SESSION['resultado'];
                    // Limpa o resultado da sessão após exibir
                    unset($_SESSION['resultado']);
                }
            ?>
        </h1>
        <img src="img/google-play.png">
    </div>

    <footer>
        <p>Desenvolvido por FATEC - Análise e Desenvolvimento de Sistemas - AMS</p>
        <p>"Feliz é aquele que programa"</p>
        <p>Copyright © 2024 - Todos os direitos reservados</p>
    </footer>
</body>
</html>

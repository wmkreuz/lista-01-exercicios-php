<html>
    <head>
        <link rel="stylesheet" href="estilo.css" type="text/css">
        <link rel="shortcut icon" href="img/ico.png" type="image/x-icon">
        <meta charset="utf-8">
        <title>Exercício 03</title>
    </head>
    <body>
        <div id="corpo">
            <div id="topo">
                <h1>#PHP</h1>
            </div>
            <div id="menu">
                <a href="index.php">Exe01</a>
                <a href="exe02.php">Exe02</a>
                <a href="exe03.php">Exe03</a>
                <a href="exe04.php">Exe04</a>
                <a href="exe05.php">Exe05</a>
                <a href="exe06.php">Exe06</a>
                <a href="exe07.php">Exe07</a>
                <a href="exe08.php">Exe08</a>
                <a href="exe09.php">Exe09</a>
                <a href="exe10.php">Exe10</a>
            </div>
            <div id="conteudo-home">
                <h1 class="titulo">Exercício 03</h1>
                <br><p class="alinha">3- Faça um programa em que o usuário informe o nome e o preço em dólares de um produto importado, após isso ele deverá informar a cotação atual do dólar e o percentual do imposto de importação. Ao final o programa irá informar valor total em reais com a taxa de importação.</p><br>
                <form method="post" action="">
                    Nome do produto: <br><input type="text" name="nproduto"><br><br>
                    Preço em dólar: <br><input type="text" name="pdolar"><br><br>
                    Cotação do dólar: <br><input type="text" name="cdolar"><br><br>
                    Percentual de importação: <br><input type="text" name="taxai"><br><br>
                    <input type="submit" value="Calcular"><br><br>
                </form>
                <?php
                    if($_POST){
                        $nproduto = $_POST["nproduto"];
                        $pdolar = $_POST["pdolar"];
                        $cdolar = $_POST["cdolar"];
                        $taxai = $_POST["taxai"];
                        $calculo = ($pdolar*$cdolar)+(($pdolar*$cdolar*($taxai/100)));
                        echo "Total em reais + taxas: R$ ".$calculo.",00";
                    }
                ?>
            </div>
            <div id="rodape">
                Copyright &copy; Alexandre&Willhan 2022
            </div>
        </div>
    </body>
</html>
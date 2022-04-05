<html>
    <head>
        <link rel="stylesheet" href="estilo.css" type="text/css">
        <link rel="shortcut icon" href="img/ico.png" type="image/x-icon">
        <meta charset="utf-8">
        <title>Exercício 07</title>
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
                <h1 class="titulo">Exercício 07</h1>
                <br><p class="alinha">7- Escrever um programa que lê o nome de um vendedor, o seu salário fixo, o total de vendas por ele efetuadas e o percentual que ganha sobre o total de vendas. Calcular o salário total do vendedor. Escrever o número do vendedor e seu salário total.</p><br>
                <form method="post" action="">
                    Nome: <br><input type="text" name="nome"><br><br>
                    Salario fixo: <br><input type="text" name="salf"><br><br>
                    Total de vendas R$: <br><input type="text" name="ttv"><br><br>
                    Percentual comissão: <br><input type="text" name="perc"><br><br>
                    <input type="submit" value="Calcular"><br><br>
                </form>
                <?php
                    if($_POST){
                        $nome = $_POST["nome"];
                        $salf = $_POST["salf"];
                        $ttv = $_POST["ttv"];
                        $perc = $_POST["perc"];
                        $tt = $salf+($ttv*($perc/100));
                        echo "O vendedor ".$nome." irá receber: R$ ".$tt.",00";
                    }
                ?>
            </div>
            <div id="rodape">
                Copyright &copy; Alexandre&Willhan 2022
            </div>
        </div>
    </body>
</html>
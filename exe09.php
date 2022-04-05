<html>
    <head>
        <link rel="stylesheet" href="estilo.css" type="text/css">
        <link rel="shortcut icon" href="img/ico.png" type="image/x-icon">
        <meta charset="utf-8">
        <title>Exercício 09</title>
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
                <h1 class="titulo">Exercício 09</h1>
                <br><p class="alinha">9- Faça um programa que leia 3 números inteiros e imprima uma (e apenas uma) das seguintes mensagens: Todos os números são iguais; Todos os números são diferentes; Apenas dois números são iguais.</p><br>
                <form method="post" action="">
                    Número 1: <br><input type="text" name="n1"><br><br>
                    Número 2: <br><input type="text" name="n2"><br><br>
                    Número 3: <br><input type="text" name="n3"><br><br>
                    <input type="submit" value="Verificar"><br><br>
                </form>
                <?php
                    if($_POST){
                        $n1 = $_POST["n1"];
                        $n2 = $_POST["n2"];
                        $n3 = $_POST["n3"];
                        if($n1==$n2 || $n1==$n3 || $n2==$n3){
                            if($n1==$n2 and $n1==$n3){
                                echo"Todos os números são iguais";
                            }else
                            echo"Apenas dois números são iguais";
                        }else
                        echo"Todos os números são diferentes";
                    }
                ?>
            </div>
            <div id="rodape">
                Copyright &copy; Alexandre&Willhan 2022
            </div>
        </div>
    </body>
</html>
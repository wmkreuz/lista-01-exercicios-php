<html>
    <head>
        <link rel="stylesheet" href="estilo.css" type="text/css">
        <link rel="shortcut icon" href="img/ico.png" type="image/x-icon">
        <meta charset="utf-8">
        <title>Exercício 04</title>
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
                <h1 class="titulo">Exercício 04</h1>
                <br><p class="alinha">4- Faça um programa para o usuário informar um número inteiro, após isso, o programa irá imprimir a tabuada daquele número (utilizando for).</p><br>
                <form method="post" action="">
                    Digite um número inteiro: <br><input type="text" name="num"><br><br>
                    <input type="submit" value="Calcular"><br><br>
                </form>
                <?php
                    if($_POST){
                        $num = $_POST["num"];
                        echo "Tabuada do ".$num."<br><br>";
                        for($i=1;$i<=10;$i++){
                            echo $num." x ".$i." = ".($num*$i."<br>");
                        }
                    }
                ?>
            </div>
            <div id="rodape">
                Copyright &copy; Alexandre&Willhan 2022
            </div>
        </div>
    </body>
</html>
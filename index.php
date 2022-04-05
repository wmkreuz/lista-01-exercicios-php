<html>
    <head>
        <link rel="stylesheet" href="estilo.css" type="text/css">
        <link rel="shortcut icon" href="img/ico.png" type="image/x-icon">
        <meta charset="utf-8">
        <title>Exercício 01</title>
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
                <h1 class="titulo">Exercício 01</h1>
                <br><p class="alinha">1- Faça um programa que o usuário digite um valor em quilômetros e que será transformado em metros.</p><br>
                <form method="post" action="">
                    Quilometragem: <br><input type="text" name="quilometragem"><br><br>
                    <input type="submit" value="Converter"><br><br>
                </form>
                <?php
                    if($_POST){
                        $quilometragem = $_POST["quilometragem"];
                        $converter = $quilometragem*1000;
                        echo "Metros: ".$converter;
                    }
                ?>
            </div>
            <div id="rodape">
                Copyright &copy; Alexandre&Willhan 2022
            </div>
        </div>
    </body>
</html>
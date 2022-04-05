<html>
    <head>
        <link rel="stylesheet" href="estilo.css" type="text/css">
        <link rel="shortcut icon" href="img/ico.png" type="image/x-icon">
        <meta charset="utf-8">
        <title>Exercício 06</title>
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
                <h1 class="titulo">Exercício 06</h1>
                <br><p class="alinha">6- Construa um programa para calcular a média de cinco notas informadas para o usuário. Além da média, deve ser exibido se o aluno está aprovado ou reprovado (média mínima: 7.0).</p><br>
                <form method="post" action="">
                    Nota 1: <br><input type="text" name="n1"><br><br>
                    Nota 2: <br><input type="text" name="n2"><br><br>
                    Nota 3: <br><input type="text" name="n3"><br><br>
                    Nota 4: <br><input type="text" name="n4"><br><br>
                    Nota 5: <br><input type="text" name="n5"><br><br>
                    <input type="submit" value="Calcular"><br><br>
                </form>
                <?php
                    if($_POST){
                        $n1 = $_POST["n1"];
                        $n2 = $_POST["n2"];
                        $n3 = $_POST["n3"];
                        $n4 = $_POST["n4"];
                        $n5 = $_POST["n5"];
                        $media = ($n1+$n2+$n3+$n4+$n5)/5;
                        if($media >= 7.0){
                            echo "Aluno aprovado com média: ".$media;
                        }
                        if($media < 7.0){
                            echo "Aluno reprovado com média: ".$media;
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
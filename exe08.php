<html>
    <head>
        <link rel="stylesheet" href="estilo.css" type="text/css">
        <link rel="shortcut icon" href="img/ico.png" type="image/x-icon">
        <meta charset="utf-8">
        <title>Exercício 08</title>
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
                <h1 class="titulo">Exercício 08</h1>
                <br><p class="alinha">8-  Crie um programa para calcular o índice de massa corpórea (IMC) de um indivíduo com base nos dados informados pelo usuário no formulário (peso e altura), e que ao final informe a qual grupo o mesmo pertence (abaixo do peso, acima do peso, obeso, etc).</p><br>
                <form method="post" action="">
                    Peso: <br><input type="text" name="peso"><br><br>
                    Altura: <br><input type="text" name="altura"><br><br>
                    <input type="submit" value="Calcular"><br><br>
                </form>
                <?php
                    if($_POST){
                        $peso = $_POST["peso"];
                        $altura = $_POST["altura"];
                        $imc = $peso/($altura*$altura);
                        if($imc<16.0){
                            echo "IMC: ".$imc." <br>Grupo: Baixo peso Grau III";
                        }
                        if($imc>=16.0 and $imc<=16.99){
                            echo "IMC: ".$imc." <br>Grupo: Baixo peso Grau II";
                        }
                        if($imc>=17.0 and $imc<=18.49){
                            echo "IMC: ".$imc." <br>Grupo: Baixo peso Grau I";
                        }
                        if($imc>=18.50 and $imc<=24.99){
                            echo "IMC: ".$imc." <br>Grupo: Peso ideal";
                        }
                        if($imc>=25.50 and $imc<=29.99){
                            echo "IMC: ".$imc." <br>Grupo: Sobrepeso";
                        }
                        if($imc>=30.0 and $imc<=34.99){
                            echo "IMC: ".$imc." <br>Grupo: Obesidade Grau I";
                        }
                        if($imc>=35.0 and $imc<=39.99){
                            echo "IMC: ".$imc." <br>Grupo: Obesidade Grau II";
                        }
                        if($imc>=40.0){
                            echo "IMC: ".$imc." <br>Grupo: Obesidade Grau III";
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
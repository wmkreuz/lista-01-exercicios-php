<html>
    <head>
        <link rel="stylesheet" href="estilo.css" type="text/css">
        <link rel="shortcut icon" href="img/ico.png" type="image/x-icon">
        <meta charset="utf-8">
        <title>Exercício 05</title>
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
                <h1 class="titulo">Exercício 05</h1>
                <br><p class="alinha">5- Faça um programa onde o usuário informe as horas trabalhadas de dia, as horas trabalhadas de noite, e o valor pago por hora. Ao final calcule o valor total à ser pago ao funcionário, sendo que as horas noturnas tem um adicional de 50%.</p><br>
                <form method="post" action="">
                    Horas dia: <br><input type="text" name="hd"><br><br>
                    Horas noite: <br><input type="text" name="hn"><br><br>
                    Valor hora: <br><input type="text" name="vlh"><br><br>
                    <input type="submit" value="Calcular"><br><br>
                </form>
                <?php
                    if($_POST){
                        $hd = $_POST["hd"];
                        $hn = $_POST["hn"];
                        $vlh = $_POST["vlh"];
                        $tt = ($hd*$vlh)+($hn*$vlh)+($hn*($vlh*0.5));
                        echo "Total à ser pago ao funcionário: R$ ".$tt.",00";
                    }
                ?>
            </div>
            <div id="rodape">
                Copyright &copy; Alexandre&Willhan 2022
            </div>
        </div>
    </body>
</html>
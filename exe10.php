<html>
    <head>
        <link rel="stylesheet" href="estilo.css" type="text/css">
        <link rel="shortcut icon" href="img/ico.png" type="image/x-icon">
        <meta charset="utf-8">
        <title>Exercício 10</title>
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
                <h1 class="titulo">Exercício 10</h1>
                <br><p class="alinha">10- A empresa XYZ decidiu conceder um aumento de salários a seus funcionários de acordo com a tabela abaixo:</p><br>
                        <p><table>
                        	<thead>
                        		<tr>
                        			<th>Salário</th>
                        			<th>Porcentagem</th>
                        		</tr>
                        	</thead>
                        	<tbody>
                        		<tr>
                        			<td>0 à 400</td>
                        			<td>15%</td>
                        		</tr>
                        		<tr>
                        			<td>401 à 700</td>
                        			<td>12%</td>
                        		</tr>
                        		<tr>
                        			<td>701 à 1000</td>
                        			<td>10%</td>
                        		</tr>
                        		<tr>
                        			<td>1001 à 1800</td>
                        			<td>7%</td>
                        		</tr>
                        		<tr>
                        			<td>1801 à 2500</td>
                        			<td>4%</td>
                        		</tr>
                        		<tr>
                        			<td>> 2500</td>
                        			<td>0</td>
                        		</tr>
                        	</tbody>
                        </table></p><br>
                        <p class="alinha">Obs: Escrever um programa que lê, para cada funcionário, o seu nome e o seu salário atual. Após receber estes dados, o algoritmo calcula o novo salário e escreve na tela as seguintes informações: nome do funcionário; % de aumento; salário atual; novo salário</p><br>
                <form method="post" action="">
                    Nome: <br><input type="text" name="nome"><br><br>
                    Salário atual: <br><input type="text" name="satual"><br><br>
                    <input type="submit" value="Calcular"><br><br>
                </form>
                <?php
                    if($_POST){
                        $nome = $_POST["nome"];
                        $satual = $_POST["satual"];
                        $snovo = 0;
                        $perc = 0;
                        if($satual >= 0 and $satual <= 400){
                            $snovo = $satual+($satual*(15/100));
                            $perc = $snovo-$satual;
                        }
                        if($satual >= 401 and $satual <= 700){
                            $snovo = $satual+($satual*(12/100));
                            $perc = $snovo-$satual;
                        }
                        if($satual >= 701 and $satual <= 1000){
                            $snovo = $satual+($satual*(10/100));
                            $perc = $snovo-$satual;
                        }
                        if($satual >= 1001 and $satual <= 1800){
                            $snovo = $satual+($satual*(7/100));
                            $perc = $snovo-$satual;
                        }
                        if($satual >= 1801 and $satual <= 2500){
                            $snovo = $satual+($satual*(4/100));
                            $perc = $snovo-$satual;
                        }else
                        $snovo = $satual;
                        echo"Nome do funcionário: ".$nome."<br>";
                        echo"% de aumento: R$ ".$perc.",00<br>";
                        echo"Salário atual: R$".$satual.",00<br>";
                        echo"Novo salário: R$".$snovo.",00";
                    }
                ?>
            </div>
            <div id="rodape">
                Copyright &copy; Alexandre&Willhan 2022
            </div>
        </div>
    </body>
</html>
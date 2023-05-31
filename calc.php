<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href= "http://localhost/CSS/estilo.css">
        <title>Calculo Média</title>
    </head>
    <body>
</html>

<?php

    $nome = $_POST['nomeAluno'];
    $nota1 = $_POST['P1'];
    $nota2 = $_POST['P2'];
    $nota3 = $_POST['P3'];
    $nota4 = $_POST['P4'];
    $nota5 = $_POST['P5'];


    $resultado = $nota1 + $nota2 + $nota3 + $nota4 + $nota5;
    $media = $resultado / 5;

    echo "Media: $media <br>"; 

        if ($media < 6) {
            echo "<span class='reprovado'>Reprovado</span><br>";
            echo "<span class='destaque' style='color: red;'>Você precisa se esforçar mais!</span>";

        } elseif ($media >= 6 && $media <= 6.9) {
            echo "<span class='regular'>Aprovado com Regular</span><br>";
            echo "<span class='destaque'>Bom trabalho, mas você pode melhorar!</span>";

        } elseif ($media >= 7 && $media <= 8) {
            echo "<span class='aprovado'>Aprovado</span><br>";
            echo "<span class='destaque' style='color: purple;'>Você foi bom, parabéns!</span>";

        } elseif ($media >= 9 && $media <= 10) {
            echo "<span class='muito-bom'>Aprovado com Muito Bom</span><br>";
            echo "<span class='destaque' style='color: pink;'>Você arrasou, parabéns!</span>";
        } else {
            echo "$nome digite uma nota válida.";
        }
?>

        <form method="post" action="index.php">
                    <label>Deseja calcular a média de outro aluno? </label>
                    <input type="submit" name="continuar" value="Sim">
        </form>
        <br>
        <form method="post" action="saida.php">
                    <label>Deseja encerrar o programa? </label>
                    <input type="submit" name="encerrar" value="Encerrar">
        </form>
</body>
</html>

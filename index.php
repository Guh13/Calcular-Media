<!DOCTYPE html>
<html lang="pt-br">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <link rel="stylesheet" href= "http://localhost/CSS/estilo.css">
                </head>
                <body>
                    <H1> PROGRAMA CALCULO DE MEDIA</H1>
                        <div class="center">

                            <form action="calc.php" method="post">

                            <label for="nomeAluno">Digite seu nome:</label>
                            <input type="text" name="nomeAluno" id="nomeAluno"><br><br>

                            <label for="P1">Nota 1:</label>
                            <input type="number" name="P1" id="P1" min="0" max="10" required><br>

                            <label for="P2">Nota 2:</label>
                            <input type="number" name="P2" id="P2" min="0" max="10" required><br>

                            <label for="P3">Nota 3:</label>
                            <input type="number" name="P3" id="P3" min="0" max="10" required><br>

                            <label for="P4">Nota 4:</label>
                            <input type="number" name="P4" id="P4" min="0" max="10" required><br>

                            <label for="P5">Nota 5:</label>
                            <input type="number" name="P5" id="P5" min="0" max="10" required><br>

                            <input type="submit" value="Calcular">
                        </form>
                    </div>
                </body>
</html>
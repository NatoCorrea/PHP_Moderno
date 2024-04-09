<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 01</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php 
                $numero = $_GET["numero"] ?? 0;
                $antecessor = $numero - 1;
                $sucessor = $numero + 1;
                echo " O número escolhido foi <strong>$numero</strong>";
                echo "<br>O número <em>antecessor</em> foi $antecessor";
                echo "<br>O número <em>sucessor</em> foi $sucessor";
            ?>
        </p>
        <p><button onclick="javascript:history.go(-1)">&#x2B05; VOLTAR</button></p>
    </main>   
</body>
</html>
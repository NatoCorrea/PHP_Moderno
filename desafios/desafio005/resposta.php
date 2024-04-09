<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 05</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <?php 
        $numero = $_REQUEST["numero"] ?? 0;
        $parteInteira = (int) $numero;
        $parteFracionaria = $numero - $parteInteira;
        //$parteFracionaria = (int) substr(strpbrk($numero, '.,'), 1);
        
        echo "<p>Analisando o número <strong> " . number_format($numero, 3, ",", ".") . "</strong> informado pelo usuário: </p>";
        echo "<ul><li> A parte inteira do número é <strong> ". number_format($parteInteira, 0, ",", ".") ."</strong></li>";
        echo "<li>A parte fracionária do número é <strong>". number_format($parteFracionaria, 3, ",", ".") ." </strong></li></ul>";
        
        ?>
        <p><button onclick="javascript:history.go(-1)" type="submit">VOLTAR</button></p>
    </main>
    
</body>
</html>
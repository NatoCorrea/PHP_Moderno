<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 05</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <pre>
            <?php 
                setcookie("dia-da-semana", "SEGUNDA", time() + 3600);

                session_start();
                $_SESSION["teste"] = "FUNCIONOU!";

                echo "<h1>Superhlobal GET</h1>";
                var_dump($_GET);

                echo "<h1>Superhlobal POST</h1>";
                var_dump($_POST);

                echo "<h1>Superhlobal REQUEST</h1>";
                var_dump($_REQUEST);

                echo "<h1>Superhlobal COOKIE</h1>";
                var_dump($_COOKIE);

                echo "<h1>Superhlobal SESSION</h1>";
                var_dump($_SESSION);

                echo "<h1>Superhlobal ENV</h1>";
                var_dump($_ENV);
                //foreach(getenv() as $c => $v){
                //    echo "<br> $c -> $v";
                //}

                echo "<h1>Superhlobal SERVER</h1>";
                var_dump($_SERVER);

                echo "<h1>Superhlobal GLOBALS</h1>";
                var_dump($GLOBALS);
            ?>
        </pre>
    </main>
    
</body>
</html>
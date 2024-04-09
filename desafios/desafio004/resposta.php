<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 03</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Conversor de Moedas v1.0</h1>
    <main>
        <?php 
    
        //Cotação vinda da API do Banco Central
        $inicio = date("m-d-Y", strtotime("- 7 days"));
        $fim = date("m-d-Y");
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio.'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);

        $cotacao = $dados["value"][0]["cotacaoCompra"];
        $valor = $_GET["valor"] ?? 0;
        $valorConvertido = $valor / $cotacao;
        
        //echo "<p>Seus " . number_format($valor, 2, "," , ".")  . " equivalem <strong>" . number_format($valorConvertido, 2, ",", ".") . "</strong> <p>";
        //echo "<p><strong>Cotação fixa de " . number_format($cotacao, 2, ",", ".") . "</strong> informada diretamente no código.<p>";
        
        //Formatacao com internacionalização!
        //Biblioteca intl(Internallization PHP)
        $formatacao = numfmt_create("pt_BR",NumberFormatter::CURRENCY);

        echo "<p>Seus " . numfmt_format_currency($formatacao, $valor, "BRL")  . " equivalem <strong>" . numfmt_format_currency($formatacao, $valorConvertido, "USD") . "</strong></p>";
        echo "<p>*Cotação obtida diretamente do site do <strong> Banco Central do Brasil</strong></p>";  
        
        ?>
        <p><button onclick="javascript:history.go(-1)" type="submit">VOLTAR</button></p>
    </main>
    
</body>
</html>
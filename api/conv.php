<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Câmbio</title>
    <link rel="stylesheet" href="style.css">

    <style>
        @charset "UTF-8";

        * {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            box-sizing: border-box;
        }

        /* ELEMENTOS DA INTERFACE */

        body {
            background-color: #15142b;
            background-image: linear-gradient(180deg, #372991, #15142b);
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            background-attachment: fixed;

            display: flex;
            flex-direction: column;
            flex-wrap: nowrap;
            justify-content: center;
            align-items: center;
        }

        header, main, section, article {
            max-width: 700px;
        }

        header > h1 {
            color: white;
            text-shadow: 3px 3px 0px black;
        }

        main, section, article {
            background-color: white;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.502);
        }

        footer {
            display: block;
            width: 100vw;
            background-color: #291f6c;
            color: white;
            text-align: center;
            margin-top: auto;
            padding: 5px;
        }

        p {
            text-align: justify;
            line-height: 1.5em;
        }

        h2, h3, h4 {
            color: #372991;
            margin: 0 0 10px 0;
        }

        a {
            color: #15142b;
            background-color: rgba(55, 41, 145, 0.1);
            padding: 0 3px;
            font-weight: 600;
            text-decoration: none;
            border-bottom: .5px dotted #372991;
        }

        a:hover {
            color: #372991;
            border-bottom: 1px solid #372991;
        }

        /* TABELAS E LISTAS */

        table {
            min-width: 400px;
            border-spacing: 0px;
            border: 0.5px solid #372991;
            margin: 10px auto;
        }

        table th {
            background-color: #372991;
            color: white;
            padding: 5px;
            text-align: left;
        }

        table td {
            padding: 5px;
        }

        table tr {
            background-color: rgba(55, 41, 145, 0.05);
        }

        table tr:nth-child(odd) {
            background-color: rgba(55, 41, 145, 0.3);
        }

        table.divisao {
            border: 1px solid white;
        }

        table.divisao td {
            background-color: white;
            padding: 20px;
            text-align: center;
            font-size: 2.5em;
        }

        table.divisao  tr:nth-child(1) td:nth-child(2) {
            border-bottom: 3px solid black;
            border-left: 3px solid black;
        }

        table.divisao tr:nth-child(2) td:nth-child(2) {
            border-left: 3px solid black;
        }

        table.divisao tr:nth-child(2) td:nth-child(1) {
            text-decoration: underline;
        }

        ul > li::marker {
            color: #372991;
        }

        /* ELEMENTOS DE FORMULÁRIO */

        form {
            background-color: rgba(55, 41, 145, 0.2);
            padding: 15px;
            border-radius: 10px;
        }

        form label {
            display: block;
            width: fit-content;
            font-size: 0.8em;
            font-weight: 100;
            background-color: rgba(55, 41, 145, 0.2);
            padding: 3px 7px;
            margin-top: 10px;
            margin-bottom: 0px;
            border-radius: 5px;
        }

        input[type=text], [type=number], select, input[type=date], input[type=date], input[type=datetime], input[type=email], input[type=month], input[type=password], input[type=range], input[type=tel], input[type=time], input[type=week] {
            width: 100%;
            padding: 12px 20px;
            font-size: 1em;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            font-size: 1em;
            color: white;
            padding: 10px 20px;
            margin: 5px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        input[type=reset] {
            width: 100%;
            background-color: #eb9903;
            font-size: 1em;
            color: white;
            padding: 10px 20px;
            margin: 5px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=reset]:hover {
            background-color: #c27013;
        }

        input[type=button], button {
            width: 100%;
            background-color: #372991;
            font-size: 1em;
            color: white;
            padding: 10px 20px;
            margin: 5px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=button]:hover, button:hover {
            background-color: #291f6c;
        }

        fieldset {
            border: 0.5px dotted #372991;
        }

        fieldset > legend {
            font-size: 0.8em;
            font-weight: 100;
            background-color: rgba(55, 41, 145, 0.2);
            padding: 3px 7px;
            border-radius: 5px;
        }

        input[type=radio] + label, input[type=checkbox] + label {
            display: inline-block;
            font-size: 1em;
            background-color: rgba(0, 0, 0, 0);
        }
        footer {
            height: 6rem;
            width: 100vw;
            position: fixed;
            bottom: 0;
            background-color: #05030a;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center; /* Center horizontally */
            padding: 15px;
        }

        footer p {
            margin: 0;
        }

        footer a {
            color: white;
            font-size: 10pt;
            text-decoration: none;
            border-bottom: 1px solid #fff;
            padding-bottom: 2px;
        }

        body {
            margin-bottom: 60px;
        }

        @media only screen and (max-width: 600px) {
            body {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: 80vh;
                margin: 0;
            }

            main, section, article {
                width: 80%;
                max-width: 400px;
                margin-bottom: 10px;
            }

            form {
                padding: 20px;
                box-sizing: border-box;
                width: 100%;
                margin-top: auto; /* Push the form to the vertical center */
            }

            footer {
                height: 4rem;
            }

            footer p {
                align-items: center;
            }

            footer a {
                font-size: 8pt;
            }
        }


    </style>
    </style>
</head>
<body>
<header>
    <h1>Aqui está o seu resultado:</h1>
</header>
<section>
    <?php
    // Cotação vinda da API do Banco Central
    $inicio = date("m-d-Y", strtotime("-7 days"));
    $final = date("m-d-Y");
    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''.$final.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
    $dados = json_decode(file_get_contents($url), true);
    $cotacao = $dados['value'][0]['cotacaoCompra'];

    // Real para Dólar
    if (isset($_POST["ConverterR"])) {
        $valor = isset($_POST["valor"]) ? $_POST["valor"] : 0;
        $conv = $valor / $cotacao;
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        echo "Você tem " . numfmt_format_currency($padrao, $valor, "BRL") . " que equivalem à " . numfmt_format_currency($padrao, $conv, "USD");
    }

    // Dólar para Real
    if (isset($_POST["ConverterD"])) {
        $valorDolar = isset($_POST["valorDolar"]) ? $_POST["valorDolar"] : 0;
        $convR = $valorDolar * $cotacao;
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        echo "Você tem " . numfmt_format_currency($padrao, $valorDolar, "USD") . " que equivalem à " . numfmt_format_currency($padrao, $convR, "BRL");
    }
    ?>
    <button style="background-color: #4CAF50; border-radius: 4px"><a style="color: #fff" href="javascript:history.go(-1)">Voltar à página anterior</a></button>
</section>

<footer>
    <p style="align-items: center">Arthur Gabriel<br/>
        <span style="display: flex">
        <a href="https://github.com/arthurgmv" target="_blank">Github</a>
        <a href="https://www.linkedin.com/in/arthur-gabriel-de-menezes-viana-1223a6239/" target="_blank">Linkedin</a>
        </span>
    </p>
</footer>

</body>
</html>
<!DOCTYPE html>
<html lang="pt_BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-sacale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Lista de Exercicios I </title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <main>	
			<header> <h1> Conversor de Moedas </h1> </header>
			<section>
				<?php
				// Cotação do dolar no dia da realização da atividade
				$cotacao = 5.61;

				// Valor em real
				$real =  $_REQUEST["din"] ?? 0;

				//Valor equivalente em dólar
				$dolar  =  $real / $cotacao;
				
				// Formatação para o padrao brasileirao
				$padrao = new NumberFormatter("pt_BR", NumberFormatter::CURRENCY);

				//Exibir valores
				echo "<p>Seus " . $padrao->formatCurrency($real, "BRL") . " equivalem a <strong>" . $padrao->formatCurrency($dolar, "USD" . "</strong> </p>");
				
				?>
				<button class="botao-estilizado" onclick="javascript:history.go(-1)"> Voltar</button>
			</section>
        </main>
        <footer>
            <p>Usabilidade, Desenvolvimento Web, Mobile e Jogos</p>
        </footer>
    </body>
</html>
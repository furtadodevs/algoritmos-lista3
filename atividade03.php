<?php
/*Atividade 3 – Controle de estoque
Uma loja deseja analisar a quantidade restante de um produto após as vendas.
● armazene o nome do produto;
● armazene a quantidade inicial em estoque;
● armazene a quantidade recebida;
● armazene a quantidade vendida;
● armazene a quantidade devolvida pelos clientes;
● calcule o estoque atual
Condição:
● Se o estoque atual for menor que 20 unidades, exiba um alerta de reposição.
● Caso contrário, exiba que o estoque está adequado.
Calcule quantas unidades faltam para atingir um estoque ideal de 50 unidades.
*/

// Entradas - Variáveis
$nomeProduto = "Hidratante";
$qtdEstoque = 10;
$qtdRecebida = 2;
$qtdVendida = 5;
$qtdDevolvida = 2;
$alerta = "";
$idealEstoque = 50;

// Processamento
$estoqueAtual = ($qtdEstoque + $qtdRecebida) - $qtdVendida - $qtdDevolvida;
$diferencaEstoque = $idealEstoque - $estoqueAtual;

// IF e ELSE
if ($estoqueAtual <= 20) {
    $alerta = "Precisar repor! Atualmente falta para um estoque ideal: " . $diferencaEstoque;
} else {
    $alerta = "Estoque adequado.";
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF e ELSE</title>
</head>

<body>
    <h3>Controle de estoque</h3>
    <p>Uma loja deseja analisar a quantidade restante de um produto após as vendas.
        ● armazene o nome do produto;
        ● armazene a quantidade inicial em estoque;
        ● armazene a quantidade recebida;
        ● armazene a quantidade vendida;
        ● armazene a quantidade devolvida pelos clientes;
        ● calcule o estoque atual
        Condição:
        ● Se o estoque atual for menor que 20 unidades, exiba um alerta de reposição.
        ● Caso contrário, exiba que o estoque está adequado.
        Calcule quantas unidades faltam para atingir um estoque ideal de 50 unidades.</p>

    <p> <?php echo ("Nome do produto: " . $nomeProduto); ?> </p>
    <p> <?php echo ("Quantidade inicial: " . $qtdEstoque); ?> </p>
    <p> <?php echo ("Quantidade recebida: " . $qtdRecebida); ?> </p>
    <p> <?php echo ("Quantidade vendida: " . $qtdVendida); ?> </p>
    <p> <?php echo ("Quantidade devolvida: " . $qtdDevolvida); ?> </p>
    <p> <?php echo ("Estoque atual: " . $estoqueAtual); ?> </p>
    <p> <?php echo ("Estoque ideal: " . $idealEstoque); ?> </p>
    <p> <?php echo ("Situação: " . $alerta); ?> </p>

</body>

</html>
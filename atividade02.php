<?php
/*Atividade 2 – Conta de restaurante
Um restaurante deseja calcular o valor final de uma conta.
● armazene o valor dos pratos;
● armazene o valor das bebidas;
● armazene o valor das sobremesas;
● armazene a quantidade de pessoas;
● calcule o subtotal;
● armazene a taxa de serviço de 10%;
● calcule o total da conta;
● calcule o valor que cada pessoa deverá pagar.
Condição:
● Se o subtotal for maior que R$ 300,00, a taxa de serviço será cobrada.
● Caso contrário, a taxa será zerada.*/

// Entradas - Variáveis
$valorPratos = 12;
$valorBebidas = 39;
$valorSobremesas = 18;
$qtdPessoas = 5;
$situacao = "";

// Processamento
$subtotal = $valorBebidas + $valorPratos + $valorSobremesas;
$taxa = $subtotal * 10 / 100;
$totalConta = $subtotal;
$valorPessoas = $totalConta / $qtdPessoas;

// IF e ELSE
if ($subtotal > 300) {
    $totalConta = $subtotal + $taxa;
    $situacao = "Taxa de serviço aplicada.";
} else {
    $totalConta = $subtotal;
    $taxa = 0;
    $situacao = "Taxa de serviço não aplicada.";
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

    <h3>Conta de restaurante</h3>
    <p> Um restaurante deseja calcular o valor final de uma conta.
        ● armazene o valor dos pratos;
        ● armazene o valor das bebidas;
        ● armazene o valor das sobremesas;
        ● armazene a quantidade de pessoas;
        ● calcule o subtotal;
        ● armazene a taxa de serviço de 10%;
        ● calcule o total da conta;
        ● calcule o valor que cada pessoa deverá pagar.
        Condição:
        ● Se o subtotal for maior que R$ 300,00, a taxa de serviço será cobrada.
        ● Caso contrário, a taxa será zerada.</p>

    <p> <?php echo ("Valor dos pratos: R$ " . $valorPratos); ?></p>
    <p> <?php echo ("Valor das bebidas: R$ " . $valorBebidas); ?></p>
    <p> <?php echo ("Valor das sobremessas: R$ " . $valorSobremesas); ?></p>
    <p> <?php echo ("Quantidade de pessoas: " . $qtdPessoas); ?></p>
    <p> <?php echo ("Subtotal: R$ " . $subtotal); ?></p>
    <p> <?php echo ("Valor da taxa de serviço (10%): R$ " . $taxa); ?></p>
    <p> <?php echo ("Situação (Taxa de serviço): " . $situacao); ?></p>
    <p> <?php echo ("Total da conta: R$ " . $totalConta); ?></p>
    <p> <?php echo ("Valor por pessoa: R$ " . $valorPessoas); ?></p>
</body>

</html>
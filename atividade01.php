<?php
/*Atividade 1 – Meta de produção
Uma fábrica deseja verificar se um funcionário atingiu sua meta semanal.
● armazene o nome do funcionário;
● armazene a quantidade produzida de segunda a sexta-feira;
● calcule o total produzido durante a semana;
● calcule a média diária de produção;
● a meta semanal, que será de 500 unidades;
● a diferença entre o total produzido e a meta.

Condição:
● Se o total produzido for maior ou igual a 500, exiba que a meta foi alcançada e calcule
um bônus de R$ 0,20 por unidade produzida acima da meta.
● Caso contrário, exiba que a meta não foi alcançada e informe quantas unidades
faltaram.

 */

// Entradas - Variáveis]
$nomeFuncionario = "Gabrielle";
$producaoSegunda = "120";
$producaoTerca = "83";
$producaoQuarta = "52";
$producaoQuinta = "253";
$producaoSexta = "3";
$metaSemanal = 500;
$situacao = "";
$bonus = 0.20;

// Processamento
$totalSemana = $producaoSegunda + $producaoTerca + $producaoQuarta + $producaoQuinta + $producaoSexta;
$metaDiaria = ($producaoSegunda + $producaoTerca + $producaoQuarta + $producaoQuinta + $producaoSexta) / 5;
$diferencaMeta = $totalSemana - $metaSemanal;
$somaBonus = $diferencaMeta * $bonus;
$valorFinal = $totalSemana;

// IF e ELSE
if ($totalSemana >= 500) {
    $situacao = "Meta alcançada! Bônus concedido.";
    $valorFinal = $totalSemana + $somaBonus;
} else {
    $situacao = "Meta não alcançada";
    $valorFinal = $totalSemana;
    $somaBonus = 0;
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
    <h3>Meta de produção</h3>

    <p>
        Uma fábrica deseja verificar se um funcionário atingiu sua meta semanal.
        ● armazene o nome do funcionário;
        ● armazene a quantidade produzida de segunda a sexta-feira;
        ● calcule o total produzido durante a semana;
        ● calcule a média diária de produção;
        ● a meta semanal, que será de 500 unidades;
        ● a diferença entre o total produzido e a meta.

        Condição:
        ● Se o total produzido for maior ou igual a 500, exiba que a meta foi alcançada e calcule
        um bônus de R$ 0,20 por unidade produzida acima da meta.
        ● Caso contrário, exiba que a meta não foi alcançada e informe quantas unidades
        faltaram.
    </p>

    <p> <?php echo ("Nome do funcionário: " . $nomeFuncionario); ?> </p>
    <p> <?php echo ("Quantidade produzida - Segunda: " . $producaoSegunda); ?> </p>
    <p> <?php echo ("Quantidade produzida - Terça: " . $producaoTerca); ?> </p>
    <p> <?php echo ("Quantidade produzida - Quarta: " . $producaoQuarta); ?> </p>
    <p> <?php echo ("Quantidade produzida - Quinta: " . $producaoQuinta); ?> </p>
    <p> <?php echo ("Quantidade produzida - Sexta: " . $producaoSexta); ?> </p>

    <p> <?php echo ("Total semanal: " . $totalSemana); ?> </p>
    <p> <?php echo ("Média de produção diária: " . $metaDiaria); ?> </p>
    <p> <?php echo ("Meta semanal: " . $metaSemanal); ?> </p>
    <p> <?php echo ("Valor da diferença: " . $diferencaMeta); ?> </p>
    <p> <?php echo ("Bônus (Valor unitário): " . $bonus); ?> </p>
    <p> <?php echo ("Valor bônus (Adquirido): R$ " . $somaBonus); ?> </p>
    <p> <?php echo ("Valor final: " . $valorFinal); ?> </p>
    <p> <?php echo ("Situação: " . $situacao); ?> </p>
    

</body>

</html>
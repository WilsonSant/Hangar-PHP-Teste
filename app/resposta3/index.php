<?php

require_once "query.php";

$total_vendas = get_pedidos_pais();

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta 3</title>
    <link href="https://cdn.jsdelivr.net/npm/beercss@3.5.1/dist/cdn/beer.min.css" rel="stylesheet" />
    <script type="module" src="https://cdn.jsdelivr.net/npm/beercss@3.5.1/dist/cdn/beer.min.js"></script>
    <script type="module" src="https://cdn.jsdelivr.net/npm/material-dynamic-colors@1.1.0/dist/cdn/material-dynamic-colors.min.js"></script>
</head>

<body style="padding:3rem; background-color: #ffb4a9;">
    <table class="stripes center-align" style="border:3px solid #000;">
        <thead>
            <tr>
                <th>Total</th>
                <th>País</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($total_vendas as $venda) : ?>
                <tr>
                    <td><?php echo $venda['total']; ?></td>
                    <td><?php echo $venda['country']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>

</html>
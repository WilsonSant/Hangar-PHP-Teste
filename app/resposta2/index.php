<?php

require_once "query.php";

$pedidos = get_todos_pedidos();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta 2</title>
    <link href="https://cdn.jsdelivr.net/npm/beercss@3.5.1/dist/cdn/beer.min.css" rel="stylesheet" />
    <script type="module" src="https://cdn.jsdelivr.net/npm/beercss@3.5.1/dist/cdn/beer.min.js"></script>
    <script type="module" src="https://cdn.jsdelivr.net/npm/material-dynamic-colors@1.1.0/dist/cdn/material-dynamic-colors.min.js"></script>
</head>
<body style="padding:3rem; background-color: #ffb4a9;" >
<button class="primary large-elevate" onclick="window.print()">Imprimir</button>
    <table class="stripes center-align" style="border:3px solid #000;">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Total</th>
            <th>Data</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($pedidos as $pedido) : ?>
            <tr>
                <td><?php echo $pedido['id']; ?></td>
                <td><?php echo $pedido['name']; ?></td>
                <td><?php echo $pedido['total']; ?></td>
                <td><?php echo $pedido['date']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>    
    </table>
</body>
</html>
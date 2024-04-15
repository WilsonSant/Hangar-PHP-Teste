<?php

require_once "query.php";

$lista = get_media_pedidos();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta 1</title>
    <link href="https://cdn.jsdelivr.net/npm/beercss@3.5.1/dist/cdn/beer.min.css" rel="stylesheet" />
    <script type="module" src="https://cdn.jsdelivr.net/npm/beercss@3.5.1/dist/cdn/beer.min.js"></script>
    <script type="module" src="https://cdn.jsdelivr.net/npm/material-dynamic-colors@1.1.0/dist/cdn/material-dynamic-colors.min.js"></script>
</head>

<body style="background-color: #6363d9; padding: 3rem;">
    <div style="border: 3px solid #000; border-radius: 10px;">
        <table class="stripes center-align" style="border-radius: 4px;">
            <thead>
                <tr>
                    <th>Média</th>
                    <th>Data</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lista as $item) :
                    $color = '';
                    if ($item['media'] < 3000) {
                        $color = '#e11e3a';
                    } elseif ($item['media'] > 3000) {
                        $color = '#53b514';
                    } else {
                        $color = 'gray';
                    }
                ?>
                    <tr style="background-color: <?php echo $color; ?>">

                        <td><?php echo $item['media']; ?></td>
                        <td><?php echo $item['Date']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>
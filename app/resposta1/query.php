<?php

require_once '../Conexao.php';

function get_media_pedidos()
{
    $db = new Conexao();
    $sql = "SELECT AVG(order_total) media, DATE_FORMAT(order_date, '%d/%m/%Y') 'Date' FROM orders
            GROUP BY DATE_FORMAT(order_date, '%d')";
    $result = $db->select($sql);
    return $result;
}

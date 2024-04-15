<?php

require_once '../Conexao.php';

function get_pedidos_pais() {
    $db = new Conexao();
    $sql = "SELECT SUM(order_total) 'total', us.user_country 'country' FROM orders ors
            JOIN user us ON ors.order_user_id = us.user_id
            GROUP BY us.user_country";
    $result = $db->select($sql);
    return $result;
}
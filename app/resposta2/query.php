<?php

require_once "../Conexao.php";

function get_todos_pedidos() {
$db = new Conexao();
$sql = "SELECT ors.order_id id,  us.user_name 'name', ors.order_total 'total', date_format(ors.order_date, '%d/%m/%Y') 'date' FROM orders ors
        JOIN user us ON ors.order_user_id = us.user_id
        ORDER BY us.user_name";
$result = $db->select($sql);
return $result;
}
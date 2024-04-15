<?php

class Conexao {
    private $conn;

    public function __construct() {
        $this->conn = new mysqli("mariadb",'root', 'teste','teste');
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function select($sql) {
        $result = $this->conn->query($sql);
        $rows = array();
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows;
    }

}
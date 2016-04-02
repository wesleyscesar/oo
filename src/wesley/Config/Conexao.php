<?php

namespace wesley\Config;

class Conexao{
    function getConexao()
    {
        try {
            $conn = new \PDO("mysql:host=localhost;dbname=oo", "root", "t2ic0l02"); // CONEXÃO COM O BD
            return $conn;
        } catch (\PDOException $e) {
            die("não foi possivel estabelecer a conexão");
        }
    }
}
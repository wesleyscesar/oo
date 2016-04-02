<?php

namespace wesley\Config;

class Fixtures{

    private $conn;
    private $cliente;

    public function __construct(Conexao $conexao)
    {
        $this->conn = $conexao->getConexao();
    }

    public function flush($cliente){
        $this->persist($cliente);
    }

    private function persist($cliente = null)
    {

        $this->cliente = $cliente;

        # REMOVENDO A TABELA
        $this->conn->query("DROP TABLE IF EXISTS clientes;");


        # CRIANDO A TABELA
        $this->conn->query("CREATE TABLE clientes (
                  id INT NOT NULL AUTO_INCREMENT,
                  nome VARCHAR(50),
                  endereco VARCHAR(50),
                  cobranca VARCHAR(50),
                  cidade VARCHAR(50),
                  estado VARCHAR(50),
                  cpf VARCHAR(50),
                  telefone VARCHAR(50),
                  email VARCHAR(50),
                  pessoa VARCHAR(50),
                  importancia VARCHAR(50),
                  PRIMARY KEY (id));"
        );


        # INSERINDO INFORMAÇOES

        $clientes = array(
            0 => array("id" => 1, "nome" => "Cliente1", "endereco" => "Endereco Cliente1", "cidade" => "Cidade Cliente1", "estado" => "SP", "cpf" => "111.111.111-11", "telefone" => "1111-1111", "email" => "cliente1@cliente1.com", "pessoa" => "Juridica", "importancia" => "3"),
            1 => array("id" => 2, "nome" => "Cliente2", "endereco" => "Endereco Cliente2", "cidade" => "Cidade Cliente2", "estado" => "SP", "cpf" => "222.222.222-22", "telefone" => "2222-2222", "email" => "cliente2@cliente2.com", "pessoa" => "Fisica", "importancia" => "1"),
            2 => array("id" => 3, "nome" => "Cliente3", "endereco" => "Endereco Cliente3", "cidade" => "Cidade Cliente3", "estado" => "RJ", "cpf" => "333.333.333-33", "telefone" => "3333-3333", "email" => "cliente3@cliente3.com", "pessoa" => "Fisica", "importancia" => "5"),
            3 => array("id" => 4, "nome" => "Cliente4", "endereco" => "Endereco Cliente4", "cidade" => "Cidade Cliente4", "estado" => "MG", "cpf" => "444.444.444-44", "telefone" => "4444-4444", "email" => "cliente4@cliente4.com", "pessoa" => "Juridica", "importancia" => "1"),
            4 => array("id" => 5, "nome" => "Cliente5", "endereco" => "Endereco Cliente5", "cidade" => "Cidade Cliente5", "estado" => "PE", "cpf" => "555.555.555-55", "telefone" => "5555-5555", "email" => "cliente5@cliente5.com", "pessoa" => "Fisica", "importancia" => "5"),
            5 => array("id" => 6, "nome" => "Cliente6", "endereco" => "Endereco Cliente6", "cidade" => "Cidade Cliente6", "estado" => "ES", "cpf" => "666.666.666-66", "telefone" => "6666-6666", "email" => "cliente6@cliente6.com", "pessoa" => "Fisica", "importancia" => "2"),
            6 => array("id" => 7, "nome" => "Cliente7", "endereco" => "Endereco Cliente7", "cidade" => "Cidade Cliente7", "estado" => "MT", "cpf" => "777.777.777-77", "telefone" => "7777-7777", "email" => "cliente7@cliente7.com", "pessoa" => "Juridica", "importancia" => "1"),
            7 => array("id" => 8, "nome" => "Cliente8", "endereco" => "Endereco Cliente8", "cidade" => "Cidade Cliente8", "estado" => "AC", "cpf" => "888.888.888-88", "telefone" => "8888-8888", "email" => "cliente8@cliente8.com", "pessoa" => "Fisica", "importancia" => "2"),
            8 => array("id" => 9, "nome" => "Cliente9", "endereco" => "Endereco Cliente9", "cidade" => "Cidade Cliente9", "estado" => "SP", "cpf" => "999.999.999-99", "telefone" => "9999-9999", "email" => "cliente9@cliente9.com", "pessoa" => "Fisica", "importancia" => "4"),
            9 => array("id" => 10, "nome" => "Cliente10", "endereco" => "Endereco Cliente10", "cidade" => "Cidade Cliente10", "estado" => "RJ", "cpf" => "000.000.000-00", "telefone" => "0000-0000", "email" => "cliente0@cliente0.com", "pessoa" => "Juridica", "importancia" => "3")
        );


        foreach ($clientes as $cli) {

            $query = "Insert into clientes(nome, endereco, cobranca, cidade, estado, cpf, telefone, email, pessoa, importancia) values(:nome, :endereco, :cobranca, :cidade, :estado, :cpf, :telefone, :email, :pessoa, :importancia)";
            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(':nome', $cli['nome']);
            $stmt->bindValue(':endereco', $cli['endereco']);
            $stmt->bindValue(':cobranca', $cli['cobranca']);
            $stmt->bindValue(':cidade', $cli['cidade']);
            $stmt->bindValue(':estado', $cli['estado']);
            $stmt->bindValue(':cpf', $cli['cpf']);
            $stmt->bindValue(':telefone', $cli['telefone']);
            $stmt->bindValue(':email', $cli['email']);
            $stmt->bindValue(':pessoa', $cli['pessoa']);
            $stmt->bindValue(':importancia', $cli['importancia']);
            $stmt->execute();

        }

        
    }

}

<?php

namespace wesley\Cliente;

use wesley\Config\Conexao;

class Cliente
{

    private $conn;
    private $id;
    private $nome;
    private $endereco;
    private $cidade;
    private $estado;
    private $cpf;
    private $telefone;
    private $email;
    private $pessoa;

    public function __construct(Conexao $conexao)
    {
        $this->conn = $conexao->getConexao();
    }

    public function findAll($str){

        $query = "select * from clientes ORDER BY id {$str}";

        $stmt = $this->conn->query($query);

        foreach ($stmt->fetchAll(\PDO::FETCH_ASSOC) as $item) {
            echo '<tr>';
            echo '<td>' . $item['nome'] . '</td>';
            echo '<td>' . $item['cpf'] . '</td>';
            echo '<td>' . $item['telefone'] . '</td>';
            echo '<td>' . $item['email'] . '</td>';
            echo '<td>' . $item['pessoa'] . '</td>';
            echo '<td><a data-toggle="modal"
                data-id="' . $item["id"] . '"
                data-nome="' . $item["nome"] . '"
                data-endereco="' . $item["endereco"] . '"
                data-cobranca="' . $item["cobranca"] . '"
                data-cidade="' . $item["cidade"] . '"
                data-estado="' . $item["estado"] . '"
                data-cpf="' . $item["cpf"] . '"
                data-telefone="' . $item["telefone"] . '"
                data-email="' . $item["email"] . '"
                data-pessoa="' . $item["pessoa"] . '"
                data-importancia="' . $item["importancia"] . '"
                href="#bs-example-modal-lg" id="btn" class="btn btn-primary btn-lg active" role="button">Visualizar</a></td>';
            echo '</tr>';

        }
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    public function getCidade()
    {
        return $this->cidade;
    }

    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPessoa()
    {
        return $this->pessoa;
    }

    public function setPessoa($pessoa)
    {
        $this->pessoa = $pessoa;
    }

}
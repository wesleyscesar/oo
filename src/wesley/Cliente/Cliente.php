<?php

namespace wesley\Cliente;

class Cliente
{

    private $id;
    private $nome;
    private $endereco;
    private $cidade;
    private $estado;
    private $cpf;
    private $telefone;
    private $email;
    private $pessoa;

    public function getCliente($str){


        $clientes = array(
            0 => array(id=>1, nome=>"Cliente1", endereco=>"Endereco Cliente1", cobranca=>"Cobrança1", cidade=>"Cidade Cliente1", estado=>"SP", cpf=>"111.111.111-11", telefone=>"1111-1111", email=>"cliente1@cliente1.com", pessoa=>"Juridica", importancia=>"3"),
            1 => array(id=>2, nome =>"Cliente2", endereco=>"Endereco Cliente2", cobranca=>"", cidade=>"Cidade Cliente2", estado=>"SP", cpf=>"222.222.222-22", telefone=>"2222-2222", email=>"cliente2@cliente2.com", pessoa=>"Fisica", importancia=>"1"),
            2 => array(id=>3, nome =>"Cliente3", endereco=>"Endereco Cliente3", cobranca=>"", cidade=>"Cidade Cliente3", estado=>"RJ", cpf=>"333.333.333-33", telefone=>"3333-3333", email=>"cliente3@cliente3.com", pessoa=>"Fisica", importancia=>"5"),
            3 => array(id=>4, nome =>"Cliente4", endereco=>"Endereco Cliente4", cobranca=>"", cidade=>"Cidade Cliente4", estado=>"MG", cpf=>"444.444.444-44", telefone=>"4444-4444", email=>"cliente4@cliente4.com", pessoa=>"Juridica", importancia=>"1"),
            4 => array(id=>5, nome =>"Cliente5", endereco=>"Endereco Cliente5", cobranca=>"", cidade=>"Cidade Cliente5", estado=>"PE", cpf=>"555.555.555-55", telefone=>"5555-5555", email=>"cliente5@cliente5.com", pessoa=>"Fisica", importancia=>"5"),
            5 => array(id=>6, nome =>"Cliente6", endereco=>"Endereco Cliente6", cobranca=>"endereco cobrança 6", cidade=>"Cidade Cliente6", estado=>"ES", cpf=>"666.666.666-66", telefone=>"6666-6666", email=>"cliente6@cliente6.com", pessoa=>"Fisica", importancia=>"2"),
            6 => array(id=>7, nome =>"Cliente7", endereco=>"Endereco Cliente7", cobranca=>"", cidade=>"Cidade Cliente7", estado=>"MT", cpf=>"777.777.777-77", telefone=>"7777-7777", email=>"cliente7@cliente7.com", pessoa=>"Juridica", importancia=>"1"),
            7 => array(id=>8, nome =>"Cliente8", endereco=>"Endereco Cliente8", cobranca=>"", cidade=>"Cidade Cliente8", estado=>"AC", cpf=>"888.888.888-88", telefone=>"8888-8888", email=>"cliente8@cliente8.com", pessoa=>"Fisica", importancia=>"2"),
            8 => array(id=>9, nome =>"Cliente9", endereco=>"Endereco Cliente9", cobranca=>"", cidade=>"Cidade Cliente9", estado=>"SP", cpf=>"999.999.999-99", telefone=>"9999-9999", email=>"cliente9@cliente9.com", pessoa=>"Fisica", importancia=>"4"),
            9 => array(id=>10, nome =>"Cliente10", endereco=>"Endereco Cliente10", cobranca=>"Cobrança 10", cidade=>"Cidade Cliente10", estado=>"RJ", cpf=>"000.000.000-00", telefone=>"0000-0000", email=>"cliente0@cliente0.com", pessoa=>"Juridica", importancia=>"3")
        );

        if($str == "asc")
        {
            krsort($clientes);
        }
        else
        {
            ksort($clientes);
        }

        foreach ($clientes as $cliente)
        {
            echo '<tr>';
            echo '<td>' . $cliente['nome'] . '</td>';
            echo '<td>' . $cliente['cpf'] . '</td>';
            echo '<td>' . $cliente['telefone'] . '</td>';
            echo '<td>' . $cliente['email'] . '</td>';
            echo '<td>' . $cliente['pessoa'] . '</td>';
            echo '<td><a data-toggle="modal"
                data-id="' . $cliente["id"] . '"
                data-nome="' . $cliente["nome"] . '"
                data-endereco="' . $cliente["endereco"] . '"
                data-cobranca="' . $cliente["cobranca"] . '"
                data-cidade="' . $cliente["cidade"] . '"
                data-estado="' . $cliente["estado"] . '"
                data-cpf="' . $cliente["cpf"] . '"
                data-telefone="' . $cliente["telefone"] . '"
                data-email="' . $cliente["email"] . '"
                data-pessoa="' . $cliente["pessoa"] . '"
                data-importancia="' . $cliente["importancia"] . '"
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
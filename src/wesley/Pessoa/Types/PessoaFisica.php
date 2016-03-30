<?php

namespace wesley\Pessoa\Types;

class PessoaFisica extends \wesley\Pessoa\Pessoa
{

    private $cpf;

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }


}
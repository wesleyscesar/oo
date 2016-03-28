<?php

class PessoaFisica extends Pessoa
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
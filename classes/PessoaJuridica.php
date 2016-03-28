<?php

class PessoaJuridica extends Pessoa
{

    private $cnpj;

    public function getCnpj()
    {
        return $this->cnpj;
    }

    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
    }


}
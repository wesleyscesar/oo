<?php

namespace wesley\Pessoa\Types;

class PessoaJuridica extends \wesley\Pessoa\Pessoa
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
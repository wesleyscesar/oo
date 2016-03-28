<?php

class Pessoa implements PessoaInterface
{
    private $tipo;
    private $importancia;

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    public function getImportancia()
    {
        return $this->importancia;
    }

    public function setImportancia($importancia)
    {
        $this->importancia = $importancia;
    }


}
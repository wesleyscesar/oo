<?php

namespace wesley\Pessoa\interfaces;

interface PessoaInterface
{
    public function getTipo();
    public function setTipo($tipo);
    public function getImportancia();
    public function setImportancia($importancia);
}
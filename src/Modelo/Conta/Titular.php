<?php

namespace Modelo\Conta;

class Titular extends Pessoa
{
    private $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome,$cpf);
        $this->Endereco = $endereco;
    }



    public function recuperarEndereco(): Endereco
    {
        return $this->endereco;
    }
}
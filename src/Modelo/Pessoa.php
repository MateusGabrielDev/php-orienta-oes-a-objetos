<?php

namespace Modelo;

class Pessoa
{
    protected  $nome;
    private  $cpf;

    public function __construct(string $nome,CPF $cpf)
    {
        $this->validarNometitular($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperarNome(): string
    {
        return $this->nome;
    }

    public function recuperarCpf(): string
    {
        return $this->cpf->recuperarNumero();
    }

    protected function validarNometitular(string $nometitular)
    {
        if (strlen($nometitular)< 5) {
            echo "Nome precisa ter no minimo 5 caracteres";
            exit();
        }
    }

}
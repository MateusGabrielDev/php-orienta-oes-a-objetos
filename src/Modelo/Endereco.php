<?php

namespace Modelo;

class Endereco
{
    private string $cidade;
    private string $bairro; 
    private string $rua;
    private string $numero;

    public function __construct(string $cidade,string $bairro,string $rua,string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function recuperarcidade(): string
    {
        return $this->cidade;
    }

    public function recuperarbairro(): string
    {
        return $this->bairro;
    }

    public function recuperarrua(): string
    {
        return $this->rua;
    }

}
<?php

//namespace Modelo\Conta;//

class Conta
{
    private $titular;
    private $saldo;
    private static $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function sacar(float $valorASacar): void
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }
    
        $this->saldo -= $valorASacar;
    }

    public function depositar(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }
    
        $this->saldo += $valorADepositar;
    }
    
    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        } 
    
        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }

    public function recuperarsaldo(): float
    {
        return $this->saldo;
    }

    public function recuperarNometitular(): string
    {
        //return $this->titular->recuperarNome();
    }

    public function recuperarcpftitular(): string
    {
       // return $this->titular->recuperarcpf();
    }

    public static function recuperarnumeroDeContas(): int
    {
        //return self::$numeroDeContas;
    }
}
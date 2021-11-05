<?php

require_once 'src/Conta.php';
require_once 'src/Endereco.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';

$endereco = new endereco('Petrópolis','lagoa redonda','dom helder camara','01A');
$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinicius Dias', $endereco);
$primeiraConta = new Conta($vinicius);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo $primeiraConta->recuperarNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperarCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperarSaldo() . PHP_EOL;

$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia',$endereco);
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

$outroendereco = new endereco('São paulo','Zona norte','Chiquito','345');
$outra = new Conta(new Titular(new CPF('123'), 'Abcdefg',$outroendereco));
unset($segundaConta);
echo Conta::recuperarNumeroDeContas();
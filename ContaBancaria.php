<?php

class Conta{

public $banco;
public $nome;
public $numAgencia;
public $numConta;
private $Saldo;

//método construtor
public function __construct($ba,$na,$numA,$numC,$sa){
  $this->banco = $ba;
  $this->nome = $na;
  $this->numAgencia = $numA;
  $this->numConta = $numC;
  $this->Saldo = $sa;

  echo "\n================================\n";

  echo "Objeto Instanciado \n";
  echo "Banco:".$this->banco;
  echo "\nNome:".$this->nome;
  echo "\nAgência:".$this->numAgencia;
  echo "\nConta:".$this->numConta;
  echo "\nSaldo:".$this->Saldo;
  echo "\n================================\n";
}

public function deposito($deposito){
  echo "\nValor antigo:".$this->Saldo;
  echo "\nValor depositado:".$deposito;
  $this->Saldo += $deposito;
  echo "\nNovo valor de saldo:".$this->Saldo;
  echo "\n================================\n";

}

public function saque($saque){

 if ($saque > $this->Saldo) {
   echo "Operação Inválida,valor de saque maior do que o saldo disponível";
 }else{

  echo "\nValor antigo:".$this->Saldo;
  $this->Saldo -= $saque;
  echo "\nNovo valor de saldo:".$this->Saldo;
}
  echo "\n================================\n";

}

public function getSaldo(){

  echo "\nSaldo Atual:".$this->Saldo;

  echo "\n================================\n";

}

}

//instancia e método construtor
$conta = new Conta('Nubank','Raphael',32,3245382,108.2);

echo "Método deposito():";
$conta->deposito(readline());

echo "Método getSaldo():";
$conta->getSaldo();

echo "Método saque():";
$conta->saque(readline());


 ?>

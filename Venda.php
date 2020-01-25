<?php

class Venda{

private $data;
private $produto;
private $quantidade;
private $valorTotal;

public function __construct($da,$pro,$quan,$val){
  $this->data = $da;
  $this->produto = $pro;
  $this->quantidade = $quan;
  $this->$valorTotal = $val;
}

public function getVenda(){
  return
  "\nData da venda:".$this->data.
  "\nProduto da venda:".$this->produto.
  "\nQuantidade da venda:".$this->quantidade.
  "\nValor total da venda:".$this->$valorTotal."\n";
}

}

$Venda = new Venda("05/11/2001","Teste","1","100000");

echo $Venda->getVenda();
 ?>

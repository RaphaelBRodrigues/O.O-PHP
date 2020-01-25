<?php

 declare(strict_types=1);
class Venda{


/*
@var string
*/
private $data;
private $produto;
private $quantidade;
private $valorTotal;

public function __construct(String $da,String $pro,int $quan,float $val){
  $this->data = $da;
  $this->produto = $pro;
  $this->quantidade = $quan;

  @$this->$valorTotal = $val;

}

public function getVenda():string{
  return
  "\nData da venda:".$this->data.
  "\nProduto da venda:".$this->produto.
  "\nQuantidade da venda:".$this->quantidade.
  "\nValor total da venda:".@$this->$valorTotal."\n";
}

}

$Venda = new Venda("05/11/2001","Teste",1,100000);

echo $Venda->getVenda();


 ?>

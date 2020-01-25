<?php
class mat{

public function divisao(float $n1,$n2):float{
  if ($n1 == 0 || $n2 == 0) {
    throw new Exception("Os números inseridos não podem ser iguais a 0\n");
  }
  return $n1/$n2;
}


}

$mat = new mat();

try {
echo "Resultado:".$mat->divisao(1,2)."\n";
} catch (Exception $e) {
echo $e->getMessage();
}
finally{
  echo "\nOperação finalizada\n";
}
 ?>

<?php
//
// //echo date('d/m/Y')."\n";
//
// $data1 = new DateTime();
// $data2 = new DateTime();
//
// $interval = new DateInterval("P2Y2M1DT9H2M50S");
// // 2Y = 2ANOS 2M =2MESES 1D=1DIA T=DIVISÃO 9H=9HORAS 2M=MINUTOS 50S =50SEGUNDOS
//
//
//
//
// // $data1->add($interval);
// $data1->sub($interval);
// echo $data1->format("d-m-Y  H:i:s  ");
// // var_dump($data1);


//EXERCICIO

$data = new DateTime();
$intervalo = new DateInterval("P5DT10H50M");

$data->sub($intervalo);

echo $data->format("d/m/Y - H-i-s");


 ?>

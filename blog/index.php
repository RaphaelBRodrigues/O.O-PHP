
<?php
/*
try{
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=orientado","root","password");


     $pdo->prepare("insert into blog(nome) values('teste2')");

    $pdo->execute();


}catch(Exception $e){
    print "Erro:".$e->getMessage();
}*/require 'blog.php';

$pdo = new blog();
$pdo->listar();
// echo "Insert,linhas afetadas:".$pdo->inserir();
?>
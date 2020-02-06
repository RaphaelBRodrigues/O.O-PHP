
<?php
require 'blog.php';

$pdo = new blog();


//echo "atualizar,linhas afetadas:".$pdo->atualizar();
// echo "deletar,linhas afetadas:".$pdo->deletar();
// echo "listar:".$pdo->listar();
 echo "Insert,linhas afetadas:".$pdo->inserir();
?>
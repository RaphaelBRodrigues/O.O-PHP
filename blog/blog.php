<?php

class blog{

    private $hostDb = "mysql:host=127.0.0.1;dbname=orientado";
    private $user = "root";
    private $pass = "password";

function __construct(){

$this->pdo = new PDO("mysql:host=127.0.0.1;dbname=orientado","root","password");
    

}


    public function inserir(){

            $prepare = $this->pdo->prepare("insert into blog(nome) values('caralhooooooooooooo')");
            $prepare->execute();
            
       
        return $prepare->rowCount();
    
    }

    public function listar(){

    }

    public function deletar(){

    }

    public function atualizar(){

    }


}


$pdo = new blog();

?>
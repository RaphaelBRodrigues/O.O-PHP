<?php

class blog{

    private $hostDb = "mysql:host=127.0.0.1;dbname=orientado";
    private $user = "root";
    private $pass = "password";
    private $pdo;
function __construct(){

$this->pdo = new PDO("mysql:host=127.0.0.1;dbname=orientado","root","password");
    

}


    public function inserir(){

            $prepare = $this->pdo->prepare("insert into blog(nome) values(?)");
            $prepare->bindParam(1,$_GET['nome']);
            $prepare->execute();
            
       
        return $prepare->rowCount();
    
    }

    public function listar(){
        $sql = "select * from blog";

        foreach($this->pdo->query($sql) as $blog){
            echo $blog['nome']."\n";
        }


    }

    public function deletar(){

    }

    public function atualizar(){

    }


}


$pdo = new blog();

?>
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
     $data = new DateTime();
     $hor = $data->format('Y-m-d');

            $prepare = $this->pdo->prepare("insert into blog(nome,dataa) values(?,?)");
            $prepare->bindParam(1,$_GET['nome']);
            $prepare->bindParam(2,$hor);
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
        $sql = "delete from blog where blogID = ?";
        $prepare = $this->pdo->prepare($sql);
        $prepare->bindParam(1,$_GET['id']);
        $prepare->execute();
        return $prepare->rowCount();
    }

    public function atualizar(){

$sql = "update blog set nome = ? where blogID = ? ";
$prepare = $this->pdo->prepare($sql);

$prepare->bindParam(1,$_GET['nome']);
$prepare->bindParam(2,$_GET['id']);
$prepare->execute();

return $prepare->rowCount();


    }


}



?>
<?php
class Contato {
    private $pdo;

    public function __construct(){
        $this->pdo = new PDO("mysql:dbname=crud;host=marcas_db_1", "user", "test");
        echo "ok";
    }

    public function add($nome){
        $sql = 'INSERT INTO carros (nome) VALUES (:nome)';
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':nome', $nome);
        $sql->execute();
        return true;

    }

}
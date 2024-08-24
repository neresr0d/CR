<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/SQL/CRUD/crud_estudo/configs/conexao.php';

class Animal {

    private $id_animal;
    private $nome;

    public function __construct($id = false)
    {
        
        if($id);{
        $this->id_animal = $id;
        $this->carregar();
        }
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getId() {
        return $this->id_animal;
    }

    public function carregar () {
        $conexao = Conexao::conectar();
        $sql = "SELECT * FROM animal WHERE id_animal = :id";
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':id', $this->getId());
        $stmt->execute();
        $resultado = $stmt->fetch();

        $this->setNome($resultado  ['nome']);

    }

    public function criar () {
        try {
            $conexao = Conexao::conectar();
            $sql = "INSERT INTO animal (nome) VALUES (:nome)";
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(':nome', $this->getNome());
            $stmt->execute();
        }catch (PDOException $e){
            echo $e->getMessage();
    }
    }
    

    public static function listar(){
        try {
            $conexao = Conexao::conectar();
            $sql = "SELECT * FROM animal";
            $stmt = $conexao->prepare($sql);

        $stmt->execute();

        $lista = $stmt->fetchAll();
        return $lista;
        } catch (PDOException $e){
            echo $e->getMessage();
        }
    }

    public function atualizar(){
        try {
                    $conexao = Conexao::conectar();
                    $sql = "UPDATE animal SET nome = :nome WHERE id_animal = :id";
                    $stmt = $conexao->prepare($sql);
                    $stmt->bindValue(':nome', $this->getNome());
                    $stmt->bindValue(':id', $this->getId());
                    $stmt->execute();

                } catch (PDOException $e){
                    echo $e->getMessage();
                }
    }
       
        

    public function deletar(){
        try {
            $conexao = Conexao::conectar();
            $sql = "DELETE FROM animal WHERE id_animal = :id";
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(':id', $this->getId());
            $stmt->execute();

        } catch (PDOException $e){
            echo $e->getMessage();
        }
    }
}
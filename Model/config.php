<?php

class Database {
    private $host = "localhost";
    private $db_name = "lista_telefonica";
    private $username = "jessica";
    private $password = "123456";
    private $conn;


public function getConnection() {
    $this->conn = null;

    try {
        $this->conn = new PDO("mysql:host=".$this->host . ";dbname=".$this->db_name, $this->username, $this->username);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     } catch (PDOException $e){
             echo"Erro: ".$e->getMessage();
         }
     
         return $this->conn;
}

public function adicionarcontato($nome,$email,$telefone){
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO contatos (nome,email,telefone) VALUES (?, ?, ?)");
    $stmt->bind_param('sss', 
        htmlspecialchars($_POST["nome"], ENT_QUOTES), 
        htmlspecialchars($_POST["email"], ENT_QUOTES), 
        htmlspecialchars($_POST["telefone"], ENT_QUOTES)
    );
    $stmt->execute();
}
    
public function atualizarcontato($nome,$email,$telefone,$id){
    global $pdo;
    $stmt = $pdo->prepare("UPDATE contatos SET nome = ?, email = ?,telefone = ? WHERE id=?");
    $stmt->bind_param('sssd',
        htmlspecialchars($_POST["nome"], ENT_QUOTES), 
        htmlspecialchars($_POST["email"], ENT_QUOTES), 
        htmlspecialchars($_POST["telefone"], ENT_QUOTES),
        htmlspecialchars($_POST["id"], ENT_QUOTES)
    );
    $stmt->execute();

}

public function excluircontato($id){
    global $pdo;
    $stmt = $pdo->prepare("DELETE FROM contatos WHERE id=?");
    $stmt->execute(["id"]);
}
}
?>
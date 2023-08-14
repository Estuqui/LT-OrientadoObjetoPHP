<?php 

class AcessarBancoDeDados {
    public function TabelaContato($id, $nome, $email, $telefone){
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM contatos");
        $stmt->execute();
    }
    
    public function AdicionarContato(){
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO contatos (nome, email, telefone) VALUES (?, ?, ?, ?)");
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function AtualizarContato(){
        global $pdo;
        $stmt = $pdo->prepare("UPDATE contatos SET nome = ?, sobrenome = ?, email = ?,telefone = ? WHERE id=?");
            $stmt->bind_param('ssssd',
            htmlspecialchars($_POST["nome"], ENT_QUOTES), 
            htmlspecialchars($_POST["sobrenome"], ENT_QUOTES), 
            htmlspecialchars($_POST["email"], ENT_QUOTES), 
            htmlspecialchars($_POST["telefone"], ENT_QUOTES),
            htmlspecialchars($_POST["id"], ENT_QUOTES)
        );
        $stmt->execute();
    }

    public function EditarContato(){
        global $pdo;
        $id= $_GET["id"];
        $stmt = $pdo->prepare("SELECT * FROM contatos WHERE id = $id");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function ExcluirContato(){
        global $pdo;
        $id= $_GET["id"];
        $stmt = $pdo->prepare("DELETE * FROM contatos WHERE id = $id");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

?>
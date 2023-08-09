<?php 
$host = "localhost";
$db_name = "lista_telefonica";
$username = "jessica";
$password = "123456";


try {
   $conexao = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
   $query = "SELECT * FROM contatos";
   $resultado = $conexao->query($query);
    while($dados = $resultado->fetch(PDO::FETCH_ASSOC)){
    $id = $dados["id"];
    $nomecompleto = $dados["nomecompleto"];
    $email = $dados["email"];
    $senha = $dados["senha"];

    echo"Id: $id, nomecompleto: $nomecompleto, email: $email, telefone: $telefone";
    
   }
$conexao=null;
} catch (PDOException $e){
        echo"Erro: ".$e->getMessage();
    }

   


?>
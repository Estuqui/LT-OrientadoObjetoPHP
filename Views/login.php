<?php 

include("./Model/config.php");

class Login{
    private $conn;
    
    public function __construct($conn){
    }
}








?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/estilologin.css">
    <title>Página de Login</title>
</head>

<body>
    <div class="box">
        <div class="img-box">
            <img src="./img/cadastroLT.png">
        </div>
        <div class="form-box">
            <h2>Faça seu Login</h2>
            <p> Não tem uma conta? <a href="#"> Cadastre-se </a> </p>
            <form action="#">

                <div class="input-group">
                    <label for="email">Usuário</label>
                    <input type="email" id="email" placeholder="Digite o seu email" required>
                </div>

                <div class="input-group">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" placeholder="Digite sua senha" required>
                </div>

                <div class="input-group">
                    <button>Cadastrar</button>
                </div>

            </form>
        </div>
    </div>
</body>

</html>
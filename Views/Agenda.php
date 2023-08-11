<?php
    require_once("../Controller/AgendaController.php");
    
    $agenda = new AgendaController();
    
    $action = !empty($_GET["action"]) ? $_GET["action"] : "getAll";

    $agenda->{$action}();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatos</title>
</head>

<body>
    <h1>Lista de Contatos</h1>
    <div class="container">
        <table class="tabela">
            <thead>
                <th>Id</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>E-mail</th>
            </thead>
            <tbody>
                <?php foreach($result as $dados); ?>
                <tr>
                    <td><?= $dados["id"] ?></td>
                    <td><?= $dados["nome"] ?></td>
                    <td><?= $dados["telefone"] ?></td>
                    <td><?= $dados["email"] ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/estiloindex.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Página Principal</title>
</head>

<body>
    <nav>

        <div class="logo">
            <a href="index.html"> L|T</a>
        </div>

        <ul>
            <li> <a href="#">Sobre <i class="bi bi-person-fill-exclamation"></i></a></li>
            <li> <a href="#">Suporte <i class="bi bi-person-fill-gear"></i> </a> </li>
            <li> <a href="#">Exit <i class="bi bi-box-arrow-right"></i></a> </li>
        </ul>

    </nav>

    <h1>Lista de Contatos <i class="bi bi-person-lines-fill"></i></h1>
    <div class="container">
        <table class="table table-bordered border-primary" id=" contatos">
            <thead>
                <th> </th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>E-mail</th>
            </thead>


        </table>
    </div>
</body>

</html>
<?php
    require_once("../Controller/AgendaController.php");
    
    $agenda = new AgendaController();
    
    $action = !empty($_GET["action"]) ? $_GET["action"] : "getAll";

    $agenda->{$action}();
?>

<!--<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <table>
            <thead>
                <th>Nome</th>
                <th>Contato</th>
            </thead>
            <tbody>
                //<?php //$lista = PegaListaDeContatos();
                //foreach($lista as $contato) {
                   // echo "<tr>";
                    //echo "<td>" . $contato->Nome . "</td>";
                    //echo "<td>" . $contato->Telefone . "</td>";
                    //echo "<td>" . ApagaContato($contato) . "</td>";
                    //echo "</tr>";
                //}
            //?>
            </tbody>
        </table>
    </body>

    </html>
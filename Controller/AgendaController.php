<?php 
    include("../Model/ModelAgenda.php");

    function PegaListaDeContatos() {
        $listadecontato = ConexaoComBancoESelect();
        return $listadecontato;
    }

    function ApagaContato(Contato $c) {
        ApagaContato($c);
    }

?>
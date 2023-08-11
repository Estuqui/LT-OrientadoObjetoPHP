<?php
    require_once("config.php");

    $db = new Database();
    $conn = $db->getConnection();

    class Contato {
        public $Nome;
        public $Telefone;
        public $Email;

        public function __construct($nome, $telefone, $email) {
            $this->Nome = $nome;
            $this->Telefone = $telefone;
            $this->Email = $email;
        }
    }

    //cria um contato novo
    $novoContato = new Contato("Jessica", "47991693266", "email@email.com");

    //cria um array vazio -> lista
    $lista = [];

    //adiciona o novo contato na lista
    array_push($lista, $novoContato);

    //interação com lista
    foreach ($lista as $itemLista) {
        printf($itemLista->Nome);
    }

    function ConexaoComBancoESelect() {
        $resultdofetchassoc = [];
        //lista de objectos que vou retornar para a view
        $listadeobjetos = [];

        //exemplo fetch assoc
        foreach ($resultdofetchassoc as $linhadobanco) {
            $temporario = new Contato(  $linhadobanco['nome']
                                        , $linhadobanco['telefone']
                                        , $linhadobanco['email']
                                    );

            array_push($listadeobjetos, $temporario);
        }

        return $listadeobjetos;
    }

    function ApagarDoBanco(Contato $a) {
        //query de delete com id do objeto
    }
    

    foreach($listadeobjetos as $contato) {
        echo "Nome: " . $contato->Nome . " Telefone: " . $contato->Telefone;
    }
?>
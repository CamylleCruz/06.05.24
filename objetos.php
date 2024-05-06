<?php

class ONG{

    public $nome;
    public $quantidadePessoas;

    function __construct($nome, $quantidadePessoas) {
        $this->nome = $nome;
        $this->quantidadePessoas = $quantidadePessoas;
    }

    function get_nome() {
        return $this->nome;
    }

    function get_quantidadePessoas() {
        return $this->quantidadePessoas;
    }
}

$nome = new ONG("AME", "150"); 

echo "O nome da ONG é: " . $nome->get_nome(); 

echo "<br/>";

echo "A quantidade de pessoas é: " . $nome->get_quantidadePessoas();

?>
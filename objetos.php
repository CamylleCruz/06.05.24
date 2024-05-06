<?php

class ONG{

    public $NomeONG;
    public $quantidadePessoas;

    function __construct($NomeONG, $quantidadePessoas) {
        $this->get_NomeONG = $NomeONG;
        $this->get_quantidadePessoas = $quantidadePessoas;
    }

    function get_NomeONG() {
        return $this->NomeONG;
    }

    function get_quantidadePessoas() {
        return $this->get_quantidadePessoas;
    }
}

$NomeONG = new ONG("AME", "150"); 

echo "O nome da ONG é: " . $NomeONG->get_NomeONG(); 

echo "<br/>";

echo "A quantidade de pessoas é: " . $quantidadePessoas->get_quantidadePessoas();



/**
 * Padrões de nomenclatura:
 * kebab-case: todas as letras minúsculas com traço "-" entre as palavras, utilizado mais em css e arquivos comuns.
 * PascalCase: A Primeira Letra De Cada Palavra É Maiúscula, utilizada mais em Objetos
 * camelCase: a primeira letra sempre começa com minúscula e as Próximas Palavras São Maiúsculas A Primeira Letra De Cada Palavra, utilizado mais na criação de métodos
 * snake_case: todas as letras são minúsculas e tem um sublinhado "_" no meio de cada palavra, utilizado mais na criação de variáveis
 * SCREAM_CASE: todas as letras são maiúsculas e são separadas por sublinhado "_", utilizado mais em variáveis CONSTANTES de ambiente/interface
 */


 /**class Fruta {

    public $nome;
    public $cor;

    function __construct($nome, $cor) {
        $this->nome = $nome;
        $this->cor = $cor;
    }

    function get_nome() {
        return $this->nome;
    }

    function get_cor() {
        return $this->cor;
    }
}

$maca = new Fruta("Maçã", "Vermelha"); //Aqui está sendo criado um novo objeto $maca

echo "O nome da fruta é: " . $maca->get_nome(); //aqui está sendo invocado o novo objeto $maca, o qual está invocando o método (function) get_nome(), que, por sua vez, está renderizando o texto (nome da fruta) "Maçã", declarado na linha 20

echo "<br/>"; //Aqui está sendo renderizado uma quebra de linha em html

echo "A cor da fruta é: " . $maca->get_cor(); //aqui está sendo invocado o novo objeto $maca, o qual está invocando o método (function) get_cor(), que, por sua vez, está renderizando o texto (cor da fruta) "Vermelho", declarado na linha 20 */

 ?>
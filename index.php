<?php

class Fruta
{
    private $nome;
    private $peso;


    public function __construct($nome, $peso)
    {
        $this->nome = $nome;
        $this->peso = $peso;
    }

    public function __destruct()
    {
        echo " <br> o objeto " . $this->nome ."foi destruiido <br>" ;
    }

    public function get_nome()
    {
        return $this->nome;
    }
    public function get_peso()
    {
        return $this->peso;
    }

    public function get_informacoes(){
        return "a fruta é ". $this->nome. "e o peso em gramas é ". $this->peso;
    }

}

$abacate = new Fruta('abacate', 500);
//O __construct é o método que roda automaticamente quando você cria (instancia) um objeto da classe.
$fruta1->__construct("Maçã", 150);
echo  $abacate->get_informacoes();

unset($abacate);

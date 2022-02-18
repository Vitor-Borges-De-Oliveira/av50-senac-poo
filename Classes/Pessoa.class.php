<?php

class Pessoa{

    public $Codigo;
    public $Nome;
    public $Altura;
    public $Idade;
    public $Nascimento;
    public $Escolaridade;
    public $Salario;

    public function Crescer($centimetros){

        if($centimetros>0):
            $this->Altura += $centimetros;

        endif;

    }

    public function Formar($titulacao){

        $this->Escolaridade = $titulacao;

    }

    public function Envelhecer($anos){

        if($anos>0):
            $this->Idade += $anos;

        endif;

    }

    public function __destruct(){

        echo "Objeto {$this->Nome} finalizado...<br>";

    }

}
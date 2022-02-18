<?php

class Conta{

    public $Agencia;
    public $Codigo;
    public $DataDeCriacao;
    public $Titular;
    public $Senha;
    public $Saldo;
    public $Cancelada;

    public function Retirar($quantia){

        if($quantia>0):
            $this->Saldo -= $quantia;
        
        endif;

    }

    public function Depositar($quantia){

        if($quantia>0):
            $this->Saldo += $quantia;

        endif;

    }

    public function ObterSaldo(){
        
        return $this->Saldo;

    }

    public function __construct($Agencia,$Codigo,$DataDeCriacao,$Titular,$Senha,$Saldo,$Cancelada){

        $this->Agencia       = $Agencia;
        $this->Codigo        = $Codigo;
        $this->DataDeCriacao = $DataDeCriacao;
        $this->Titular       = $Titular;
        $this->Senha         = $Senha;

        $this->Depositar($Saldo);
        $this->Cancelada = false;

    }

    public function __destruct(){

        echo "Objeto Conta {$this->Codigo} de {$this->Titular->Nome} finalizada...<br>";

    }



}
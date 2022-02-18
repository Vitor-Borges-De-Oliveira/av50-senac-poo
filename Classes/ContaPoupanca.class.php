<?php

class ContaPoupanca extends Conta{

    public $Limite;

    public function __construct($Agencia,$Codigo,$DataDeCriacao,$Titular,$Senha,$Saldo,$Aniversario){

        parent::__construct($Agencia,$Codigo,$DataDeCriacao,$Titular,$Senha,$Saldo);
        $this->Aniversario = $Aniversario;
        $this->Limite      = $Limite;

    }

    public function Retirar($quantia){

        $cpmf = 0.05;

        if($this->Saldo + $this->Limite >= $quantia):
            parent::Retirar($quantia);
            parent::Retirar($quantia*$cpmf);

        else:
            echo "Retirada não permitida...<br>";
            return false;

        endif;

        return true;

    }

}
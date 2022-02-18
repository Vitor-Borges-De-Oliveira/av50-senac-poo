<?php

class Produto{

    public $Codigo;
    public $Descricao;
    public $Preco;
    public $Quantidade;

    public function ImprimeEtiqueta(){

        echo 'Produto:<br><br>';

        echo 'Código: ' . $this->Codigo . '<br>';
        echo 'Descrição: ' . $this->Descricao . '<br>';
        echo 'Preço: ' . $this->Preco . '<br>';
        echo 'Quantidade: ' . $this->Quantidade . '<br>';

    }

}
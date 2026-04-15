<?php

class Visibilidade {
    public $varPublic;
    protected $varProtected;
    private $varPrivate;

    public function __construct($varPublic, $varProtected, $varPrivate)
    {
        $this->varPublic = $varPublic;
        $this->varProtected = $varProtected;
        $this->varPrivate = $varPrivate;
    }
}

$teste = new Visibilidade(1,2,3);
echo "Atributo Public = $teste->varPublic";
echo "Atributo Protected = $teste->varProtected";
echo "Atributo Private = $teste->varPriva";

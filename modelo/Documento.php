<?php

require_once 'TipoDocumento.php';

class Documento{
    private $Id;
    private $Numero;
    private $Habilitado;
    private $TipoDocumento;

    public function getId()
    {
        return $this->Id;
    }

    public function setId($Id)
    {
        $this->Id = $Id;
    }


    public function getNumero()
    {
        return $this->Numero;
    }


    public function setNumero($Numero)
    {
        $this->Numero = $Numero;


    }


    public function getHabilitado()
    {
        return $this->Habilitado;
    }


    public function setHabilitado($Habilitado)
    {
        $this->Habilitado = $Habilitado;


    }

    public function getTipoDocumento()
    {
        return $this->TipoDocumento;
    }

 
    public function setTipoDocumento($TipoDocumento)
    {
        $this->TipoDocumento = $TipoDocumento;

    }
}
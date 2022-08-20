<?php

class TipoDocumento{
    private $Id;
    private $Descripcion;
    private $Habilitado;


    public function getId()
    {
        return $this->Id;
    }


    public function setId($Id)
    {
        $this->Id = $Id;

    }


    public function getDescripcion()
    {
        return $this->Descripcion;
    }


    public function setDescripcion($Descripcion)
    {
        $this->Descripcion = $Descripcion;


    }


    public function getHabilitado()
    {
        return $this->Habilitado;
    }


    public function setHabilitado($Habilitado)
    {
        $this->Habilitado = $Habilitado;

    }
}
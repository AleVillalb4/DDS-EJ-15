<?php

class ObraSocial{
    private $Id;
    private $RazonSocial;
    private $Cuit;
    private $SitioWeb;
    private $Telefono;

    public function getId()
    {
        return $this->Id;
    }

    public function setId($Id)
    {
        $this->Id = $Id;


    }

    public function getRazonSocial()
    {
        return $this->RazonSocial;
    }
 
    public function setRazonSocial($RazonSocial)
    {
        $this->RazonSocial = $RazonSocial;

    }

    public function getCuit()
    {
        return $this->Cuit;
    }

    public function setCuit($Cuit)
    {
        $this->Cuit = $Cuit;


    }

    public function getSitioWeb()
    {
        return $this->SitioWeb;
    }


    public function setSitioWeb($SitioWeb)
    {
        $this->SitioWeb = $SitioWeb;
    }

    public function getTelefono()
    {
        return $this->Telefono;
    }


    public function setTelefono($Telefono)
    {
        $this->Telefono = $Telefono;

    }
}
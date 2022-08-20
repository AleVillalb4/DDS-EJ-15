<?php

require_once 'Documento.php';
require_once 'ObraSocial.php';

class Persona
{
    private $Id;
    private $Nombre;
    private $Apellido;
    private $FechaNacimiento;
    private $ObraSocial;
    private $ListDocumentos = array();

    public function getId()
    {
        return $this->Id;
    }

    public function setId($Id)
    {
        $this->Id = $Id;
    }

    public function getNombre()
    {
        return $this->Nombre;
    }


    public function setNombre($Nombre)
    {
        $this->Nombre = $Nombre;
    }


    public function getApellido()
    {
        return $this->Apellido;
    }


    public function setApellido($Apellido)
    {
        $this->Apellido = $Apellido;
    }

    public function getFechaNacimiento()
    {
        return $this->FechaNacimiento;
    }

    public function setFechaNacimiento($FechaNacimiento)
    {
        $this->FechaNacimiento = $FechaNacimiento;
    }

    public function getObraSocial()
    {
        return $this->ObraSocial;
    }

    public function setObraSocial($ObraSocial)
    {
        $this->ObraSocial = $ObraSocial;
    }

    public function getListDocumentos()
    {
        return $this->ListDocumentos;
    }

    public function setDocumento($doc)
    {
        $this->ListDocumentos[] = $doc;
    }


    public function MostrarDatos()
    {
        echo 'Datos persona: <br>';
        echo 'Nombre: ' . $this->getNombre() . '<br>';
        echo 'Apellido: ' . $this->getApellido() . '<br>';
        echo 'Fecha Nacimiento: ' . $this->getFechaNacimiento() . '<br>';
        echo 'Datos Obra Social: <br>';
        echo 'Razón social: ' . $this->getObraSocial()->getRazonSocial() . ' y sitio web de su Obra Social: ' . $this->getObraSocial()->getSitioWeb() . '<br>';
        echo 'Datos documento: <br>';
        foreach ($this->getListDocumentos() as $doc) {
            echo 'Descripcion del tipo:' . $doc->getTipoDocumento()->getDescripcion() . '<br>';
            echo 'Numero: ' . $doc->getNumero() . '<br>';
        }
    }
}

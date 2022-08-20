<?php

require_once 'modelo/Persona.php';
require_once 'modelo/ObraSocial.php';
require_once 'modelo/TipoDocumento.php';
require_once 'modelo/Documento.php';

$obra=new ObraSocial();
$obra->setId(4);
$obra->setRazonSocial('OSDE');
$obra->setCuit('4-849492-3');
$obra->setSitioWeb('https://www.osde.com.ar/index.html#!homepage.html');
$obra->setTelefono('425489');

$tipodocu = new TipoDocumento();
$tipodocu->setId(1);
$tipodocu->setDescripcion('DNI');
$tipodocu->setHabilitado(true);

$tipodocu1 = new TipoDocumento();
$tipodocu1->setId(2);
$tipodocu1->setDescripcion('Pasaporte');
$tipodocu1->setHabilitado(true);


$per = new Persona();
$per->setId(1);
$per->setNombre('Alejandro');
$per->setApellido('Villalba');
$per->setFechaNacimiento('22/9/1996');

$documento= new Documento();
$documento->setId(1);
$documento->setNumero('40123123');
$documento->setHabilitado(true);
$documento->setTipoDocumento($tipodocu);

$documento1= new Documento();
$documento1->setId(2);
$documento1->setNumero('50123123');
$documento1->setHabilitado(true);
$documento1->setTipoDocumento($tipodocu1);



$per->setObraSocial($obra);
$per->setDocumento($documento);
$per->setDocumento($documento1);
$per->MostrarDatos();




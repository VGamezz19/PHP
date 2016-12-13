<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 30/09/2016
 * Time: 15:27
 */

namespace Modelo;

require_once 'Punto.php';
require_once 'Figura.php';


class Circulo extends Figura
{

    private $radio;

    public function __construct(Punto $origen, $radio)
    {

        parent::__construct($origen); //la clase donde la estoy eredando (padre) LLAMAS EL CONSTRUCTOR DEL PADRE
        $this->radio = $radio;


    }

    public function getRadio()
    {
        return $this->radio;
    }

    public function getOrigen()
    {
        return $this->origen;
    }


    public function setOrigen(Punto $origen)
    {
        $this->origen = $origen;  //con esto ""(int)"" fuerza a que X sea una cadena
        return $this;
    }


    public function setRadio($radio)
    {
        $this->radio = (int)$radio;
        return $this;
    }


    function __toString()
    {
        $origenTostring = parent::__toString();

       return 'Circulo[' . $origenTostring . ', ' . $this->radio . ' ]';
    }


    public function desplazarCirculo (Punto $nuevoOrigen)
    {

        $this->getOrigen()->desplazar($nuevoOrigen);

    }


    public function esIgual(Circulo $circulo)
    {
        return $this->getOrigen()->esIgual($circulo->getOrigen()) &&

        $this->getRadio() == $circulo->getRadio();
    }

    public function area ()
    {
        return M_PI * pow($this->getRadio(), 2);
    }



}
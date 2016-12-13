<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 04/10/2016
 * Time: 17:20
 */

namespace Modelo;

require_once 'Punto.php';

class Cuadrado
{
    private $costado;
    private $origen;

   public function __construct(Punto $origen, $costado)
   {

       $this->origen = $origen;
       $this->costado = $costado;
   }

    public function getCostado()
    {
        return $this->costado;
    }


    public function setCostado($costado)
    {
        $this->costado = $costado;
        return $this;
    }


    public function getOrigen()
    {
        return $this->origen;
    }


    public function setOrigen($origen)
    {
        $this->origen = $origen;
        return $this;
    }

    function __toString()
    {
        return 'El origen del cuadrado '. $this->getOrigen() . ' y el costado ' . $this->getCostado();
    }

    public function esIgual(Cuadrado $cuadrado)
    {
        return $this->getOrigen()->esIgual($cuadrado->getOrigen()) &&

        $this->getCostado() == $cuadrado->getCostado();
    }



    public function desplazarCuadrado (Punto $nuevoOrigen)
    {

        $this->getOrigen()->desplazar($nuevoOrigen);

    }


}
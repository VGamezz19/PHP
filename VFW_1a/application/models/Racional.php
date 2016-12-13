<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 20/10/2016
 * Time: 15:19
 */

namespace models;


class Racional
{
    private $numerador;
    private $denominador;
    public function __construct($numerador = null, $denominador = null )
    {
        $this->setNumerador($numerador);
        $this->setDenominador($denominador);


    }
    public function multiplicar (Racional $r){
        $producto = new Racional();

        $producto->setNumerador($this->getNumerador() * $r->getNumerador());
        $producto->setDenominador($this->getDenominador() * $r->getDenominador());

        return $producto;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getNumerador()."/". $this->getDenominador();

        // TODO: Implement __toString() method.
    }





    /* SETERS Y GETES **/
    /**
     * @return mixed
     */
    public function getDenominador()
    {
        return $this->denominador;
    }

    /**
     * @return mixed
     */
    public function getNumerador()
    {
        return $this->numerador;
    }

    /**
     * @param mixed $denominador
     */
    public function setDenominador($denominador)
    {
        if ($denominador === 0){

            die;
        } else {

            $this->denominador = $denominador;
        }

    }

    /**
     * @param mixed $numerador
     */
    public function setNumerador($numerador)
    {
        $this->numerador = $numerador;
    }
}
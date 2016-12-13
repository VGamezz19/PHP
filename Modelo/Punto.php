<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 23/09/2016
 * Time: 17:35
 */

namespace Modelo;


class Punto
{
    private $x;
    private $y;   // las variables en php van con el $

    public function __construct($x, $y)      //El constructor
    {
        $this->setX($x);
        $this->setY($y);

    }

    public function desplazar(Punto $destino)
    {

        $this->setX($destino->getX());
        $this->setY($destino->getY());

    }

    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
    }


    public function setX($x)
    {
        $this->x = (int)$x;  //con esto ""(int)"" fuerza a que X sea una cadena
        return $this;
    }


    public function setY($y)
    {
        $this->y = (int)$y;
        return $this;
    }

    public function esIgual(Punto $p)
    {
        if ($this->getX() == $p->getX() &&
            $this->getY() == $p->getY()
        ) {
            return true;
        } else {
            return false;
        }
    }

    public function queCuadrante()
    {
        if ($this->getX() >= 0 &&
            $this->getY() >= 0
        ) { //Primer cuadrante X + Y +
            return 1;
        } elseif ($this->getX() < 0 &&
            $this->getY() < 0
        ) { //Primer cuadrante X - Y -
            return 3;


        } elseif ($this->getX() < 0 &&
            $this->getY() > 0
        ) { //Primer cuadrante X - Y +
            return 2;
        } elseif ($this->getX() > 0 &&
            $this->getY() < 0
        ) { //Primer cuadrante X + Y -
            return 4;

        }


    }

    public function nuevoCuadrante ($n1) // Podemos llamar las funciones ya definidas en el programa (Como  queCUADRANTE)
    {
        if ($n1 == 1) {
            $this->setX(($this->getX() * +1));
            $this->setY(($this->getY() * +1));
        } elseif ($n1 == 2) {
            $this->setX(($this->getX() * -1));
            $this->setY(($this->getY() * +1));
        } elseif ($n1 == 3) {
            $this->setX(($this->getX() * -1));
            $this->setY(($this->getY() * -1));
        } elseif ($n1 == 4) {
            $this->setX(($this->getX() * +1));
            $this->setY(($this->getY() * -1));
        }

    }
    function __toString()  //Imprimir el punto
    {
        return 'Punto{' . $this->getX() . ',' . $this->getY() . '}' ; //<br> para salto de linea
        //el <br> es para saltar linea
    }

}
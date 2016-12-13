<?php
/**
 * xenFramework (http://xenframework.com/)
 *
 * This file is part of the xenframework package.
 *
 * (c) Ismael Trascastro <itrascastro@xenframework.com>
 *
 * @link        http://github.com/xenframework for the canonical source repository
 * @copyright   Copyright (c) xenFramework. (http://xenframework.com)
 * @license     MIT License - http://en.wikipedia.org/wiki/MIT_License
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace figura;
require_once 'Punto.php';
require_once 'Figura.php';
class Triangulo extends Figura
{
    /**
     * @var int
     */
    private $_base;
    /**
     * @var int
     */
    private $_altura;
    /**
     * @param int $_altura
     * @param int $_base
     * @param Punto $_origen
     */
    function __construct($_altura, $_base, Punto $_origen)
    {
        parent::__construct($_origen);
        $this->_altura  = $_altura;
        $this->_base    = $_base;
    }
    /**
     * @return int
     */
    public function getAltura()
    {
        return $this->_altura;
    }
    /**
     * @param int $altura
     */
    public function setAltura($altura)
    {
        $this->_altura = $altura;
    }
    /**
     * @return int
     */
    public function getBase()
    {
        return $this->_base;
    }
    /**
     * @param int $base
     */
    public function setBase($base)
    {
        $this->_base = $base;
    }
    /**
     * toString
     *
     * Description
     *
     * @return string
     */
    public function __toString()
    {
        $origenToString = parent::__toString();
        return 'Triangulo[' . $origenToString . ', ' . $this->_base . ', ' . $this->_altura . ']';
    }
    /**
     * area
     *
     * Description
     *
     * @return mixed
     */
    public function area()
    {
        return $this->_base * $this->_altura / 2;
    }
    /**
     * perimetro
     *
     * Description
     *
     * @return mixed
     */
    public function perimetro()
    {
        return sqrt(pow($this->_altura, 2) + pow($this->_base / 2, 2)) * 2 + $this->_base;
    }
    /**
     * escalar
     *
     * Description
     *
     * @param int $dx
     */
    public function escalar($dx)
    {
        $this->_base    *= $dx / 100;
        $this->_altura  *= $dx / 100;
    }
}
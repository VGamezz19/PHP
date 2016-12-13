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
class Circulo extends Figura
{
    /**
     * @var int
     */
    private $_radio;
    /**
     * @param Punto $_origen
     * @param int   $_radio
     */
    public function __construct(Punto $_origen, $_radio)
    {
        parent::__construct($_origen);
        $this->_radio   = $_radio;
    }
    /**
     * area
     *
     * Circle area
     *
     * @return int
     */
    public function area()
    {
        return M_PI * pow($this->_radio, 2);
    }
    /**
     * perimetro
     *
     * Perimetro de un cículo
     *
     * @return int
     */
    public function perimetro()
    {
        return 2 * M_PI * $this->_radio;
    }
    /**
     * escalar
     *
     * Scales the circle
     *
     * @param int $dx
     */
    public function escalar($dx)
    {
        $this->_radio *= $dx;
    }
    /**
     * toString
     *
     * Return a string representing the circle
     *
     * @return string
     */
    public function __toString()
    {
        $origenToString = parent::__toString();
        return 'Circulo[' . $origenToString . ', ' . $this->_radio . ']';
    }
    /**
     * @return int
     */
    public function getRadio()
    {
        return $this->_radio;
    }
    /**
     * @param int $radio
     */
    public function setRadio($radio)
    {
        $this->_radio = $radio;
    }
}
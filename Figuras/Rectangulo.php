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
require_once 'Cuadrado.php';
require_once 'Punto.php';
class Rectangulo extends Cuadrado
{
    /**
     * @var int
     */
    private $_alto;
    /**
     * @param Punto $_origen
     * @param int   $_ancho
     * @param int   $_alto
     */
    public function __construct(Punto $_origen, $_ancho, $_alto)
    {
        parent::__construct($_origen, $_ancho);
        $this->_alto = $_alto;
    }
    /**
     * area
     *
     * Description
     *
     * @return int
     */
    public function area()
    {
        return $this->_ancho * $this->_alto;
    }
    /**
     * perimetro
     *
     * Description
     *
     * @return int
     */
    public function perimetro()
    {
        return 2 * $this->_ancho + 2 * $this->_alto;
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
        parent::escalar($dx); //$this->_ancho
        $this->_alto *= $dx / 100;
    }
    /**
     * __toString
     *
     * Description
     *
     * @return string
     */
    public function __toString()
    {
        $cuadradoToString = parent::__toString();
        return 'Rectangulo[' . $cuadradoToString . ', ' . $this->_alto . ']';
    }
}
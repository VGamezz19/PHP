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
require_once 'Figura.php';
require_once 'Punto.php';
class Cuadrado extends Figura
{
    /**
     * @var int
     */
    protected $_ancho;
    /**
     * @param Punto $_origen
     * @param int   $_ancho
     */
    function __construct(Punto $_origen, $_ancho)
    {
        parent::__construct($_origen);
        $this->_ancho = $_ancho;
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
        return pow($this->_ancho, 2);
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
        return $this->_ancho * 4;
    }
    /**
     * escalar
     *
     * Description
     *
     * @param int $dx
     *
     */
    public function escalar($dx)
    {
        $this->_ancho *= $dx / 100;
    }
    public function __toString()
    {
        $origenToString = parent::__toString();
        return 'Cuadrado[' . $origenToString . ', ' . $this->_ancho . ']';
    }
}
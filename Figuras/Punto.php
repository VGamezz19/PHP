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
class Punto
{
    private $_x;
    private $_y;
    public function __construct($_x, $_y)
    {
        $this->_x = $_x;
        $this->_y = $_y;
    }
    /**
     * @return mixed
     */
    public function getX()
    {
        return $this->_x;
    }
    /**
     * @param mixed $x
     */
    public function setX($x)
    {
        $this->_x = $x;
    }
    /**
     * @return mixed
     */
    public function getY()
    {
        return $this->_y;
    }
    /**
     * @param mixed $y
     */
    public function setY($y)
    {
        $this->_y = $y;
    }
    public function __toString()
    {
        return 'Punto[' . $this->_x . ', ' . $this->_y . ']';
    }
    public function desplazar($dx, $dy)
    {
        $this->_x += $dx;
        $this->_y += $dy;
    }
    public function distancia(Punto $p)
    {
        $dx = $p->getX() - $this->_x;
        $dy = $p->getY() - $this->_y;
        return sqrt(pow($dx, 2) + pow($dy, 2));
    }
    public static function distancia2(Punto $p, Punto $p1)
    {
        $dx = $p->getX() - $p1->getX();
        $dy = $p->getY() - $p1->getY();
        return sqrt(pow($dx, 2) + pow($dy, 2));
    }
}
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

namespace models;


class CalculatorModel
{
    private $_op1;
    private $_op2;
    private $_result;


    public function __construct($_op1, $_op2)
    {
        $this->setOp1($_op1);
        $this->setOp2($_op2);
    }

    public function sum()
    {
        $this->_result = $this->getOp1() + $this->getOp2();
    }

    public function subtract()
    {
        $this->_result = $this->getOp1() - $this->getOp2();
    }

    public function multiply()
    {
        $this->setResult($this->getOp1() * $this->getOp2());
    }

    public function division()
    {
        if ($this->getOp2() == 0) {
            $this->setOp2(1);
        }
        $this->setResult($this->getOp1() / $this->getOp2());
    }

    /**
    INICIO GET
     */
    public function getResult()
    {
        return $this->_result;
    }

    public  function getOp1()
    {
        return $this->_op1;
    }

    public function getOp2()
    {
        return $this->_op2;
    }
    /**
    FIN  GET
     */


    /**
     INICIO SETERS
     */
    public function setOp1($op1)
    {
        $this->_op1 = (int) $op1;
    }

    public function setOp2($op2)
    {
        $this->_op2 = (int) $op2;
    }

    public function setResult($result)
    {
        $this->_result = $result;
    }

}
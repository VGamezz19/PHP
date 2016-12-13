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

require_once'Racional.php';
class CalculatorModel
{
    /**
     * @var Racional
     */
    private $op1;

    /** @var  Racional
     * */
    private $op2;


    private $result;




    public function __construct(Racional $op1, Racional $op2)
    {
        $this->setOp1($op1);
        $this->setOp2($op2);

    }


    public function multiply (){
       return $this->getOp1()->multiplicar($this->getOp2());
    }






     /**
     * @return Racional
     */
    public function getOp1(): Racional
    {
        return $this->op1;
    }

    /**
     * @return Racional
     */
    public function getOp2(): Racional
    {
        return $this->op2;
    }

    /**
     * @param Racional $op2
     */
    public function setOp2(Racional $op2)
    {
        $this->op2 = $op2;
    }

    /**
     * @param Racional $op1
     */
    public function setOp1(Racional $op1)
    {
        $this->op1 = $op1;
    }







}
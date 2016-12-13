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

namespace controllers;

use models\CalculatorModel;
use models\Racional;



require 'application/models/CalculatorModel.php';



class CalculatorController
{
    public function sumAction()
    {
        $action = 'doSum';
        require 'application/views/form.phtml';
    }

    public function doSumAction()
    {
        $model = new CalculatorModel($_POST['op1'], $_POST['op2']);
        $model->sum();
        $result = $model->getResult();
        require 'application/views/result.phtml';
    }

    public function subtractAction()
    {
        $action = 'doSubtract';
        require 'application/views/form.phtml';
    }

    public function doSubtractAction()
    {
        $model = new CalculatorModel($_POST['op1'], $_POST['op2']);
        $model->subtract();
        $result = $model->getResult();
        require 'application/views/result.phtml';
    }

    public function multiplyAction()
    {
        $action = 'doMultiply';
        require 'application/views/form.phtml';
    }

    public function doMultiplyAction()
    {
        $model = new CalculatorModel(new Racional($_POST['op1'],$_POST['op3']), new Racional($_POST['op2'], $_POST['op4']));
         $result = $model->multiply();




        require 'application/views/result.phtml';
    }

    public function divisionAction()
    {
        $action = 'doDivision';
        require 'application/views/form.phtml';
    }

    public function doDivisionAction()
    {
        $model = new CalculatorModel($_POST['op1'], $_POST['op2']);
        $model->division();
        $result = $model->getResult();
        require 'application/views/result.phtml';
    }
}
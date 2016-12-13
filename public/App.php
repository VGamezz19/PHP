<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 27/09/2016
 * Time: 17:45
 */

namespace VictorGamez;

use Modelo\Circulo;
use Modelo\Punto;

 //Namespace + la clase (para dejar constancia de la clase)
require_once '../Modelo/Punto.php';

require_once '../Modelo/Circulo.php';
class App
{

    public static function run()
    {


        // App::testPunto();        //Comentandolo o descomentandolo tu escojes si se ejecuta o no.
        App::testCirculo();
    }


    private static function testCirculo()

    {
        $origen = new Punto(3, 4);
        $radio = 2;
        $circulo = new Circulo($origen, $radio);
        echo $circulo . '<br>' ;


        $puntoDesplazado = new Punto(-2,20);
        $circulo->desplazarCirculo($puntoDesplazado);  //Utilizamos la misma funcion de desplazar del punto
                                                // para desplazar el origen de Circulo

        echo $circulo . '<br>';

        $circulo2 = new Circulo(new Punto(2,0), 3);

        echo $circulo2 . '<br>';

         if(! $circulo2->esIgual($circulo))  // el ! del principio es para decir "SI NO SON IGUALES" //
        {
            echo ' el circulo ' . $circulo . ' y el circulo ' . $circulo2 .' No son iguales';
        }

    }


    private static function testPunto()
    {
        $p =new Punto(0,0);
        $p1 =new Punto(10,0);
        echo 'punto P: '. $p. ' Y el punto P1: ' . $p1; //imprimir utilizando el toString creado

        $p->setY(2)  //modificamos el valor
        -> setX(3);

        echo $p;


        $p->desplazar($p1); //desplazamos el punto P a la posicion P1
        echo 'punto P: '. $p. ' Y el punto P1: ' . $p1;



        if ($p->esIgual($p1)) {
            echo 'True' . '<br>';
        }
        else {
            echo'False' . '<br>';
        }



        if ($p->queCuadrante() == 1){
            echo $p . 'esta en el cuadrante 1' . '<br>';

        } elseif ($p->queCuadrante() ==2){
            echo $p . 'esta en el cuadrante 2' . '<br>';

        } elseif ($p->queCuadrante() ==3){
            echo $p . 'esta en el cuadrante 3' . '<br>';

        } elseif ($p->queCuadrante() ==4){
            echo $p . 'esta en el cuadrante 4' . '<br>';

        }


        $p->setY(2)  //modificamos el valor
        -> setX(-3);

        if ($p->queCuadrante() == 1){
            echo $p . 'esta en el cuadrante 1' . '<br>';

        } elseif ($p->queCuadrante() ==2){
            echo $p . 'esta en el cuadrante 2' . '<br>';

        } elseif ($p->queCuadrante() ==3){
            echo $p . 'esta en el cuadrante 3' . '<br>';

        } elseif ($p->queCuadrante() ==4){
            echo $p . 'esta en el cuadrante 4' . '<br>';

        }



        $p->nuevoCuadrante(1);

        echo $p ;
        }

}

App::run();










<?php

class Matematica
{
    // define("PI", 3.14); define nao funciona dentro de classes
    //readonly É uma propriedade de objeto que só pode ser definida UMA VEZ
    const PI = 3.14;


    public function calcular($numero):float
    {
        return floor($numero * self::PI *100)/100; 

    }
}

$m = new Matematica();
echo $m->calcular(5);
echo "<br>";
//echo $m->PI; NAO FUNCIONA
echo $m::PI; //FUNCIONA
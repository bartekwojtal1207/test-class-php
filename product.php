<?php
/**
 * Created by PhpStorm.
 * User: Bartek
 * Date: 2017-10-26
 * Time: 20:17
 */

//include('klasaTestowa.php');
class Product extends KlasaTestowa
{
    const Rodzaj = 'esd';

    public function dajRodzaj()
    {
        echo 'nie wiem nic '.$this->polska."2";
    }


//    public $argumencik = 'siema';


    public function ustawArg ($argumencik)
    {
        return $argumencik ;

    }





}
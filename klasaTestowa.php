<?php
/**
 * Created by PhpStorm.
 * User: Bartek
 * Date: 2017-10-26
 * Time: 19:49
 */
class KlasaTestowa
{
        const __default = self::physical;
        const physical = "physical";
        const Esd = "esd";
        const mixed = "mixed";
        public $nameKing = "barteeeeeeeeeeeeeeeeeeeeeeeeeeeeek";
        public $polska = "niemcy";

    public function funckjaTestowa($kraj='dziwny jest ten swiat')
    {

        $zmiennaTestowa = $this->nameKing.$kraj;

        return $zmiennaTestowa.$this->polska;


    }





}
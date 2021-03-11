<?php


namespace Factory\AbstractFactory\Model;


class Sofa implements Furniture
{
    private static $furniture = 'Sofa';

    private $material;

    private $style;

    public function __construct($material, $style)
    {
        $this->material = $material;
        $this->style = $style;
    }

    public function create()
    {
        return sprintf("Created %s in %s style using material %s!!! ", self::$furniture, $this->style, $this->material);
    }
}
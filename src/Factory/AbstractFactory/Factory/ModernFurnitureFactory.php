<?php


namespace Factory\AbstractFactory\Factory;

use Factory\AbstractFactory\Model\Chair;
use Factory\AbstractFactory\Model\Furniture;
use Factory\AbstractFactory\Model\Sofa;
use Factory\AbstractFactory\Model\Table;

class ModernFurnitureFactory implements FurnitureFactory
{
    private static $material = 'Modern Material';
    private static $style = 'Modern Style';

    public function createChair() : Furniture
    {
        return new Chair(self::$material, self::$style);
    }

    public function createSofa() : Furniture
    {
        return new Sofa(self::$material, self::$style);
    }

    public function createTable() : Furniture
    {
        return new Table(self::$material, self::$style);
    }
}
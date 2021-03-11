<?php


namespace Factory\AbstractFactory\Factory;

use Factory\AbstractFactory\Model\Furniture;

interface FurnitureFactory
{
    public function createChair():Furniture;

    public function createSofa():Furniture;

    public function createTable():Furniture;
}
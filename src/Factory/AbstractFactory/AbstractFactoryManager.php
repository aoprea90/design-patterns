<?php


namespace Factory\AbstractFactory;


use Factory\AbstractFactory\Factory\ArtDecoFurnitureFactory;
use Factory\AbstractFactory\Factory\ModernFurnitureFactory;
use Factory\AbstractFactory\Factory\VictorianFurnitureFactory;

class AbstractFactoryManager
{
    public function createFurniture($style, $furnitureType)
    {
        switch ($style) {
            case "artdeco":
                $method = sprintf("create%s", ucfirst($furnitureType));
                $furniture = new ArtDecoFurnitureFactory();
                $furniture = $furniture->$method();
                break;
            case "modern":
                $method = sprintf("create%s", ucfirst($furnitureType));
                $furniture = new ModernFurnitureFactory();
                $furniture = $furniture->$method();
                break;
            default:
                $method = sprintf("create%s", ucfirst($furnitureType));
                $furniture = new VictorianFurnitureFactory();
                $furniture = $furniture->$method();
                break;

        }
        return $furniture;
    }
}